<?php

/* download bap pdf 
---------------------------------------------------------------
*/

add_action('wp_ajax_download_pdf','process_download_pdf');
add_action('wp_ajax_nopriv_download_pdf','process_download_pdf');
function process_download_pdf(){


	$template_directory = get_template_directory_uri();

	$template_file = CELL_REPORT .'/css/print.bootstrap.min.css';

	$inline_style = file_get_contents($template_file);

	$icon_sprite = CELL_REPORT .'/img/glyphicons-halflings.png';

	$inline_style = str_replace('../img/glyphicons-halflings.png', $icon_sprite , $inline_style);

	ob_start();

	include_once ('pdf-template.php');

	$stuff = ob_get_contents();

	ob_end_clean();

	set_time_limit(300);
	ini_set('memory_limit', '-1');

	$dompdf = new DOMPDF();
	// $dompdf->set_base_path($template_file);
	$dompdf->load_html($stuff);
	$dompdf->set_paper( 'A4' , 'portrait' );
	$dompdf->render();
	$dompdf->stream('sample.pdf');
	// $file_to_save = $_SERVER['DOCUMENT_ROOT'].'/report-file/sample.pdf';
	// echo $file_to_save;
	$output = $dompdf->output();
	$test = file_put_contents($file_to_save, $output);
	// wp_redirect( '/report-file/sample.pdf' );
	exit;
	die();
}

add_action('wp_ajax_download_card_template','process_download_card_template');
add_action('wp_ajax_nopriv_download_card_template','process_download_card_template');
function process_download_card_template(){


	$template_directory = get_template_directory_uri();

	$template_file = CELL_REPORT .'/css/print.bootstrap.min.css';

	$inline_style = file_get_contents($template_file);

	$icon_sprite = CELL_REPORT .'/img/glyphicons-halflings.png';

	$inline_style = str_replace('../img/glyphicons-halflings.png', $icon_sprite , $inline_style);

	ob_start();

	include_once ('card-template.php');

	$stuff = ob_get_contents();

	ob_end_clean();

	if (isset($_REQUEST['debug'])) {
		echo $stuff;
		wp_die();
	}

	set_time_limit(300);
	ini_set('memory_limit', '-1');

	$dompdf = new DOMPDF();
	// $dompdf->set_base_path($template_file);
	$dompdf->load_html($stuff);
	$dompdf->set_paper( 'A4' , 'landscape' );
	$dompdf->set_paper( array(0,0, 3.34 * 72, 2.08 * 72), "plasticcard" ); // 12" x 12"
	$dompdf->render();
	$dompdf->stream('card-template.pdf');
	// $file_to_save = $_SERVER['DOCUMENT_ROOT'].'/report-file/sample.pdf';
	// echo $file_to_save;
	$output = $dompdf->output();
	$test = file_put_contents($file_to_save, $output);
	// wp_redirect( '/report-file/sample.pdf' );
	exit;
	die();
}

?>