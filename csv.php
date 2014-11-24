<?php

/* report file
---------------------------------------------------------------
*/

add_action('wp_ajax_download_report','process_download_report');
add_action('wp_ajax_nopriv_download_report','process_download_report');
function process_download_report(){

	$date = date('l jS \of F Y h:i:s A');

	$part = 1;
	$per_part = 300;
	$filename = '';
	if (isset($_REQUEST['part'])) {
		$part = $_REQUEST['part'];
	}
	if (isset($_REQUEST['per-part'])) {
		$per_part = $_REQUEST['per-part'];
	}

	if(isset($_REQUEST['view_relawan'])){
		$user_id = $_REQUEST['view_relawan'];
		$user_data = get_user_by( 'id', $user_id ) ;
		$lot['author'] = $user_id;
		$filename .= $user_data->data->user_nicename.'-';
	}

	if(isset($_REQUEST['view_project'])){
		$project = $_REQUEST['view_project'];
		$project_object = get_term_by('slug',$project, 'project-term');
		$project_link = get_term_link($project_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'project-term',
			'field' => 'slug',
			'terms' => $project_object->slug,
		);
		$filename .= $project_object->slug.'-';
	}

	if(isset($_REQUEST['view_sponsorship'])){
		$sponsorship = $_REQUEST['view_sponsorship'];
		$sponsorship_object = get_term_by('slug',$sponsorship, 'sponsorship-term');
		$sponsorship_link = get_term_link($sponsorship_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'sponsorship-term',
			'field' => 'slug',
			'terms' => $sponsorship_object->slug,
		);
		$filename .= $sponsorship_object->slug.'-';
	}

	if(isset($_REQUEST['view_block'])){
		$block = $_REQUEST['view_block'];
		$block_object = get_term_by('slug',$block, 'block-term');
		$block_link = get_term_link($block_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'block-term',
			'field' => 'slug',
			'terms' => $block_object->slug,
		);
		$filename .= $block_object->slug.'-';

		// get kecamatan data
		$block_data = get_post_object($block_object->term_id, 'block-term');
		$block_meta = get_post_meta( $block_data->ID);
		if (isset($block_meta['kecamatan'][0])) {
			$block_kecamatan = get_kecamatan_data($block_meta['kecamatan'][0]);
			$kecamatan = $block_kecamatan->kecamatan;
			$kabupaten = $block_kecamatan->kabupaten;
			$provinsi = $block_kecamatan->provinsi;
		}

	}

	if(isset($_REQUEST['view_status'])){
		$status = $_REQUEST['view_status'];
		$status_object = get_term_by('slug',$status, 'lot-status');
		$status_link = get_term_link($status_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'lot-status',
			'field' => 'slug',
			'terms' => $status_object->slug,
		);
		$filename .= $status_object->slug.'-';
	}

	if (isset($user_id) || isset($sponsorship) || isset($project) || isset($block) || isset($status)) {

		$offset = 0;
		if (isset($part)) {
			$offset = ($part - 1) * $per_part;
		}

		$lot['offset'] = $offset;
		$lot['order'] = 'ASC';
		$lot['posts_per_page'] = $per_part;
		$lot['post_type'] = 'lot';

		$wp_query = new WP_Query( $lot );
	}

	$filename .= $part.'of'.$wp_query->max_num_pages;

	
	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$filename.'.csv');

	// create a file pointer connected to the output stream
	$output = fopen('php://output', 'w');

	// output the column headings
	fputcsv($output, array('Data per tanggal '. $date,'Part '. $part .' / '.$wp_query->max_num_pages ,'Total Lot : '.$wp_query->found_posts));

	if (isset($_REQUEST['short']) && isset($block_object) && isset($block_meta['kecamatan'][0])) {
		// output the column headings
		fputcsv($output, array($block_data->post_title, $kecamatan , $kabupaten, $provinsi));
	}

	if (isset($_REQUEST['short'])) {
		// output the column headings
		fputcsv($output, array('ID Lot', 'Nama Lot','Relawan','Petani','Jumlah Pohon','URL'));
	} else {
		// output the column headings
		fputcsv($output, array('ID Lot', 'Nama Lot', 'GPS','Relawan','Petani','KTP','Desa','Kecamatan','Kabupaten','Propinsi','Luas Lahan','Jenis Pohon','Jumlah Pohon','Status Terakhir','URL'));
	}



	foreach ($wp_query->posts as $key => $post) {

		$lot = array();
		$lot_short = array();

		$lot_meta = get_post_meta($post->ID);
		$lot_term = get_term_by( 'id', $lot_meta['lot-term-id'][0], 'lot-term' );
		$lot_term_link = get_term_link($lot_term );
		
		// get relawan data
		if (isset($user_data)) {
			$relawan = $user_data;
		} else {
			$relawan = get_user_by('id', $post->post_author); 	
		}
		
		// get farmer data
		if (isset($lot_meta['farmer'][0])) {
			$farmer = get_user_by('id', $lot_meta['farmer'][0]);
			$farmer_meta = get_user_meta( $farmer->ID );
		}

		// get plants
		$plants = wp_get_object_terms($post->ID, 'plants');

		// get status
		if (isset($status_object)) {
			$lot_status = $status_object;
		} else {
			$lot_status = wp_get_object_terms($post->ID, 'lot-status');	
			$lot_status = $lot_status[0];
		}

		// get block
		if (isset($block_object)) {
			$block_term = $block_object;
		} else {
			$block_term = wp_get_object_terms($post->ID, 'block-term');	
			$block_term = $block_term[0];
		}

		// get kecamatan data
		$block_data = get_post_object($block_term->term_id, 'block-term');
		$block_meta = get_post_meta( $block_data->ID);
		if (isset($block_meta['kecamatan'][0])) {
			$block_kecamatan = get_kecamatan_data($block_meta['kecamatan'][0]);
			$kecamatan = $block_kecamatan->kecamatan;
			$kabupaten = $block_kecamatan->kabupaten;
			$provinsi = $block_kecamatan->provinsi;
		}

		// set data : id
		$lot[] = $post->ID;
		$lot_short[] = $post->ID;

		// set data : post title
		$lot[] = $post->post_title;
		$lot_short[] = $post->post_title;

		// set data : koordinat
		if (isset($lot_meta['koordinat-lot'][0])) {
			$lot[] = $lot_meta['koordinat-lot'][0];
		} else {
			$lot[] = '-';
		}
		// set data : relawan
		$lot[] = $relawan->display_name;
		$lot_short[] = $relawan->display_name;

		// set data : farmer
		if (isset($farmer)) {
			$lot[] = $farmer->display_name;
			$lot[] = $farmer_meta['id-card'][0];
			$lot_short[] = $farmer->display_name;

		} else {
			$lot[] = '-';
			$lot[] = '-';
			$lot_short[] = '-';
		}

		// set data : block
		if (isset($block_term)) {
			$lot[] = $block_term->name;
		} else {
			$lot[] = '-';
		}
		if (isset($kecamatan)) {
			$lot[] = $kecamatan;
		} else {
			$lot[] = '-';
		}
		if (isset($kabupaten)) {
			$lot[] = $kabupaten;
		} else {
			$lot[] = '-';
		}
		if (isset($provinsi)) {
			$lot[] = $provinsi;
		} else {
			$lot[] = '-';
		}

		// set data : luas lot
		$lot[] = $lot_meta['luas-lot'][0];

		// set data : jenis tanaman
		$lot[] = $plants[0]->name;

		// set data : jumlah pohon
		$lot[] = $lot_meta['jumlah-pohon'][0];
		$lot_short[] = $lot_meta['jumlah-pohon'][0];

		// set data : status
		$lot[] = $lot_status->name;

		// set data : link
		$lot[] = $lot_term_link;
		$lot_short[] = $lot_term_link;

		if (isset($_REQUEST['short'])) {
			if ($lot_status->slug != 'growong') {
				fputcsv($output, $lot_short);
			}
		} else {
			fputcsv($output, $lot);
		}
	}

	fclose($output);

	
	exit;
	die();
}

add_action('wp_ajax_download_report_status_by_date','process_download_report_status_by_date');
function process_download_report_status_by_date(){

	$before = $_REQUEST['before'];
	$after = $_REQUEST['after'];

	$part = 1;
	if ($_REQUEST['part']) {
		$part = $_REQUEST['part'];
	}

	$status = $_REQUEST['status'];

	if ($before && $status) {
		echo 'start';

		$posts_per_page = 1000;
		$offset = 0;
		if ($_REQUEST['part']) {
			$offset = ($_REQUEST['part'] - 1) * $posts_per_page;
		}

		$lot['meta_query'] = array(
			array(
				'key' => 'to-'.$status,
				'value' => $before,
				'type' => 'DATE',
				'compare' => '<='
				)
			);
		$lot['post_type'] = 'lot';
		$lot['offset'] = $offset;
		$lot['order'] = 'ASC';
		$lot['posts_per_page'] = $posts_per_page;

		$wp_query = new WP_Query( $lot );


	}
	

	print_r(array('Part '. $part .' / '.$wp_query->max_num_pages ,'Total Lot '.$wp_query->found_posts));
	echo '</pre>';
	
	// // output headers so that the file is downloaded rather than displayed
	// header('Content-Type: text/csv; charset=utf-8');
	// header('Content-Disposition: attachment; filename=data.csv');

	// // create a file pointer connected to the output stream
	// $output = fopen('php://output', 'w');

	// // output the column headings
	// fputcsv($output, array('Data per tanggal '. $date,'--','Part '. $part .' / '.$wp_query->max_num_pages ,'--','Total Lot '.$wp_query->found_posts));

	// // output the column headings
	// fputcsv($output, array('ID Lot', 'Nama Lot', 'GPS','Relawan','Petani','Desa','Kabupaten','Propinsi','Luas Lahan','Jenis Pohon','Jumlah Pohon','Status Terakhir'));


	// foreach ($wp_query->posts as $key => $post) {

	// 	$lot = array();

	// 	$lot_meta = get_post_meta($post->ID);
		
	// 	$relawan = get_user_by('id', $post->post_author); 
	// 	$farmer = get_user_by('id', $lot_meta['farmer'][0]);

	// 	$plants = wp_get_object_terms($post->ID, 'plants');
	// 	$plants = $plants[0];

	// 	$lot_status = wp_get_object_terms($post->ID, 'lot-status');
	// 	$lot_status = $lot_status[0];

	// 	$area = wp_get_object_terms($post->ID, 'area');
	// 	$area = $area[0];

	// 	$parent_area = get_term_by('term_id', $area->parent, 'area');

	// 	$lot[] = $post->ID;
	// 	$lot[] = $post->post_title;
	// 	$lot[] = $lot_meta['koordinat-lot'][0];
	// 	$lot[] = $relawan->display_name;
	// 	$lot[] = $farmer->display_name;
	// 	$lot[] = $lot_meta['desa'][0];
	// 	$lot[] = $area->name;
	// 	$lot[] = $parent_area->name;
	// 	$lot[] = $lot_meta['luas-lot'][0];
	// 	$lot[] = $plants->name;
	// 	$lot[] = $lot_meta['jumlah-pohon'][0];
	// 	$lot[] = $lot_status->name;

	// 	fputcsv($output, $lot);

	// }

	// fclose($output);

	exit;
	die();
}

add_action('wp_ajax_download_reports','process_download_reports');
function process_download_reports(){

	$date = date('l jS \of F Y h:i:s A');

	$part = 1;
	if ($_REQUEST['part']) {
		$part = $_REQUEST['part'];
	}

	$project = $_REQUEST['view_project'];
	if($project){
		$project_object = get_term_by('slug',$project, 'project-term');
		$project_link = get_term_link($project_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'project-term',
			'field' => 'slug',
			'terms' => $project_object->slug,
		);
	}

	$block = $_REQUEST['view_block'];
	if($block){
		$block_object = get_term_by('slug',$block, 'block-term');
		$block_link = get_term_link($block_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'block-term',
			'field' => 'slug',
			'terms' => $block_object->slug,
		);
	}

	$status = $_REQUEST['view_status'];
	if($status){
		$status_object = get_term_by('slug',$status, 'lot-status');
		$status_link = get_term_link($status_object);

		$lot['tax_query'][] = array(
			'taxonomy' => 'lot-status',
			'field' => 'slug',
			'terms' => $status_object->slug,
		);
	}

	if ($project || $block || $status) {

		$posts_per_page = 1000;
		$offset = ($_REQUEST['part'] - 1) * $posts_per_page;


		$lot['offset'] = $offset;
		$lot['order'] = 'ASC';
		$lot['posts_per_page'] = $posts_per_page;
		// $lot['meta_query'][] = array(
		// 	'key' => 'koordinat-lot',
		// 	'relation' =>'AND',
		// );

		$wp_query = new WP_Query( $lot );


	}
	// new
	$status_slug = $_GET['status'];
	$start = $_GET['start'];
	$end = $_GET['end'];
	$part = $_GET['part'];
	global $wpdb;
	$results = $wpdb->get_results("
		SELECT	p.*
			FROM $wpdb->posts p INNER JOIN $wpdb->term_relationships tr ON (tr.object_id = p.ID) INNER JOIN $wpdb->term_taxonomy tt ON (tt.term_taxonomy_id = tr.term_taxonomy_id) INNER JOIN $wpdb->terms t ON (t.term_id = tt.term_id)
			WHERE p.post_status = 'publish' AND (p.ID in( SELECT	pa.ID FROM $wpdb->posts pa INNER JOIN $wpdb->postmeta pm1 ON (
				pm1.post_id = pa.ID	AND
				pm1.meta_key		= 'to-".$status_slug."' AND (pm1.meta_value between '".$start."' AND '".$end."' 
			))
		) OR (t.slug='".$status_slug."' AND tt.taxonomy='lot-status')) AND p.post_date < '2013-01-01' GROUP BY p.ID	
	");
	// $results = $wpdb->get_results("
	// 	SELECT	p.*,
	// 		pm1.meta_value AS first_field
	// 		FROM
	// 		$wpdb->posts p INNER JOIN $wpdb->postmeta pm1 ON (
	// 			// pm1.post_id = p.ID	AND
	// 			// pm1.meta_key		= 'to-".$status_slug."' AND (pm1.meta_value between '".$start."' AND '".$end."' 
	// 		// ))
	// 	WHERE	 post_status = 'publish'
	// ");

	// end of new
	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	// create a file pointer connected to the output stream
	$output = fopen('php://output', 'w');

	// output the column headings
	// fputcsv($output, array('Data per tanggal '. $date,'--','Part '. $part .' / '.$wp_query->max_num_pages ,'--','Total Lot '.$wp_query->found_posts));
	fputcsv($output, array('Data per tanggal '. $date,'--','Part '. $part .' / '.$wp_query->max_num_pages ,'--','Total Lot '.count($results)));

	// output the column headings
	fputcsv($output, array('ID Lot', 'Nama Lot', 'Luas lot', 'GPS','Relawan','Petani','KTP',' ','Desa','Kabupaten','Propinsi','Jenis Pohon','Jumlah Pohon','Status Sekarang'));


	// foreach ($wp_query->posts as $key => $post) {
	$i=0;
	foreach($results as $post){
		$i ++;

		$lot = array();

		$lot_meta = get_post_meta($post->ID);
		
		$relawan = get_user_by('id', $post->post_author); 
		$farmer = get_user_by('id', $lot_meta['farmer'][0]);
		// if($farmer->display_name=='')
		// $farmer = get_user_by('id', $lot_meta['farmer'][1]);

		$farmer_meta = get_user_meta( $farmer->ID );


		$plants = wp_get_object_terms($post->ID, 'plants');
		$plants = $plants[0];

		$lot_status = wp_get_object_terms($post->ID, 'lot-status');
		$lot_status = $lot_status[0];

		$area = wp_get_object_terms($post->ID, 'area');
		$area = $area[0];

		$parent_area = get_term_by('term_id', $area->parent, 'area');

		$block_term = wp_get_object_terms($post->ID, 'block-term');
		$block_term = $block_term[0];


		$lot[] = $post->ID;
		$lot[] = $post->post_title;
		$lot[] = $lot_meta['luas-lot'][0];
		$lot[] = $lot_meta['koordinat-lot'][0];
		$lot[] = $relawan->display_name;
		$lot[] = $farmer->display_name;
		$lot[] = $farmer_meta['id-scan'][0];
		$lot[] = $lot_meta['desa'][0];
		$lot[] = $block_term->name;		
		$lot[] = $area->name;
		$lot[] = $parent_area->name;
		$lot[] = $plants->name;
		$lot[] = $lot_meta['jumlah-pohon'][0];
		$lot[] = $lot_status->name;

		fputcsv($output, $lot);

	}

	fclose($output);

	exit;
	die();
}
?>