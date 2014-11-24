<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<style type="text/css">
			<?php echo $inline_style ?>
		</style>
	</head>
	<body>

		<section id="typography">
			<div class="page-header">
				<h1>Typography</h1>
			</div>
			<h2 id="headings">Headings</h2>
			<div>
				<h1>h1. Heading 1</h1>
				<h2>h2. Heading 2</h2>
				<h3>h3. Heading 3</h3>
				<h4>h4. Heading 4</h4>
				<h5>h5. Heading 5</h5>
				<h6>h6. Heading 6</h6>
			</div>

			<h2 id="body-copy">Body copy</h2>
			<div>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
			</div>

			<h3>Lead body copy</h3>
			<div>
				<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
			</div>
	
			<h2 id="emphasis">Emphasis</h2>
			<h3>Bold</h3>
			<div>
				<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
			</div>
	
			<h3>Italics</h3>
			<div>
				<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
			</div>
	
			<h3>Alignment classes</h3>
			<div>
				<p class="text-left">Left aligned text.</p>
				<p class="text-center">Center aligned text.</p>
				<p class="text-right">Right aligned text.</p>
			</div>

			<h3>Emphasis classes</h3>
			<p>Convey meaning through color with a handful of emphasis utility classes.</p>
			<div>
				<p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
				<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
				<p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
				<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
			</div>

			<h2 id="addresses">Addresses</h2>
			<div>
				<address>
					<strong>Twitter, Inc.</strong><br>
					795 Folsom Ave, Suite 600<br>
					San Francisco, CA 94107<br>
					<abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
				<address>
					<strong>Full Name</strong><br>
					<a href="mailto:#">first.last@example.com</a>
				</address>
			</div>
			<h2 id="blockquotes">Blockquotes</h2>
			<h3>Default blockquote</h3>

			<div>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				</blockquote>
			</div>

			<h3>Blockquote options</h3>
			<h4>Naming a source</h4>
			<div>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>

			<h4>Alternate displays</h4>
			<div  style="overflow: hidden;">
				<blockquote class="pull-right">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>

			<h2 id="lists">Lists</h2>
			<h3>Unordered</h3>
			<div>
				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>

			<h3>Ordered</h3>
			<div>
				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>
			</div>

			<h3>Unstyled</h3>
			<div>
				<ul class="unstyled">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
						<ul>
						<li>Phasellus iaculis neque</li>
						<li>Purus sodales ultricies</li>
						<li>Vestibulum laoreet porttitor sem</li>
						<li>Ac tristique libero volutpat at</li>
						</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>
			</div>

			<h3>Description</h3>
			<div>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>
			</div>

			<h4>Horizontal description</h4>
			<div>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
				</dl>
			</div>
		</section>

		<section id="code">
			<div class="page-header">
				<h1>Code</h1>
			</div>
			<h2>Inline</h2>
			<div>
				For example, <code>&lt;section&gt;</code> should be wrapped as inline.
			</div>
			<h2>Basic block</h2>
			<div><pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre></div>
		</section>

		<section id="tables">
			<div class="page-header">
				<h1>Tables</h1>
			</div>

			<h2>Default styles</h2>
			<div>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h2>Optional classes</h2>
			<h3><code>.table-striped</code></h3>
			<div>
				<table class="table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h3><code>.table-bordered</code></h3>
			<div>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td rowspan="2">1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>Mark</td>
						<td>Otto</td>
						<td>@TwBootstrap</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h3><code>.table-hover</code></h3>
			<div>
				<table class="table table-hover">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h3><code>.table-condensed</code></h3>
			<div>
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h2>Optional row classes</h2>
			<table class="table table-bordered table-striped">
				<colgroup>
					<col class="span1">
					<col class="span7">
				</colgroup>
				<thead>
					<tr>
					<th>Class</th>
					<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>
						<code>.success</code>
					</td>
					<td>Indicates a successful or positive action.</td>
					</tr>
					<tr>
					<td>
						<code>.error</code>
					</td>
					<td>Indicates a dangerous or potentially negative action.</td>
					</tr>
					<tr>
					<td>
						<code>.warning</code>
					</td>
					<td>Indicates a warning that might need attention.</td>
					</tr>
					<tr>
					<td>
						<code>.info</code>
					</td>
					<td>Used as an alternative to the default styles.</td>
					</tr>
				</tbody>
			</table>
			<div>
				<table class="table">
					<thead>
					<tr>
						<th>#</th>
						<th>Product</th>
						<th>Payment Taken</th>
						<th>Status</th>
					</tr>
					</thead>
					<tbody>
					<tr class="success">
						<td>1</td>
						<td>TB - Monthly</td>
						<td>01/04/2012</td>
						<td>Approved</td>
					</tr>
					<tr class="error">
						<td>2</td>
						<td>TB - Monthly</td>
						<td>02/04/2012</td>
						<td>Declined</td>
					</tr>
					<tr class="warning">
						<td>3</td>
						<td>TB - Monthly</td>
						<td>03/04/2012</td>
						<td>Pending</td>
					</tr>
					<tr class="info">
						<td>4</td>
						<td>TB - Monthly</td>
						<td>04/04/2012</td>
						<td>Call in to confirm</td>
					</tr>
					</tbody>
				</table>
			</div>

			<h2>Supported table markup</h2>
			<table class="table table-bordered table-striped">
				<colgroup>
					<col class="span1">
					<col class="span7">
				</colgroup>
				<thead>
					<tr>
					<th>Tag</th>
					<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>
						<code>&lt;table&gt;</code>
					</td>
					<td>
						Wrapping element for displaying data in a tabular format
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;thead&gt;</code>
					</td>
					<td>
						Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;tbody&gt;</code>
					</td>
					<td>
						Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;tr&gt;</code>
					</td>
					<td>
						Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;td&gt;</code>
					</td>
					<td>
						Default table cell
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;th&gt;</code>
					</td>
					<td>
						Special table cell for column (or row, depending on scope and placement) labels
					</td>
					</tr>
					<tr>
					<td>
						<code>&lt;caption&gt;</code>
					</td>
					<td>
						Description or summary of what the table holds, especially useful for screen readers
					</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section id="buttons">
			<div class="page-header">
				<h1>Buttons</h1>
			</div>

			<h2>Default buttons</h2>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<th>Button</th>
					<th>class=""</th>
					<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td><button type="button" class="btn">Default</button></td>
					<td><code>btn</code></td>
					<td>Standard gray button with gradient</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-primary">Primary</button></td>
					<td><code>btn btn-primary</code></td>
					<td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-info">Info</button></td>
					<td><code>btn btn-info</code></td>
					<td>Used as an alternative to the default styles</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-success">Success</button></td>
					<td><code>btn btn-success</code></td>
					<td>Indicates a successful or positive action</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-warning">Warning</button></td>
					<td><code>btn btn-warning</code></td>
					<td>Indicates caution should be taken with this action</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-danger">Danger</button></td>
					<td><code>btn btn-danger</code></td>
					<td>Indicates a dangerous or potentially negative action</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-inverse">Inverse</button></td>
					<td><code>btn btn-inverse</code></td>
					<td>Alternate dark gray button, not tied to a semantic action or use</td>
					</tr>
					<tr>
					<td><button type="button" class="btn btn-link">Link</button></td>
					<td><code>btn btn-link</code></td>
					<td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
					</tr>
				</tbody>
			</table>

			<h2>Button sizes</h2>
			<div>
				<p>
					<button type="button" class="btn btn-large btn-primary">Large button</button>
					<button type="button" class="btn btn-large">Large button</button>
				</p>
				<p>
					<button type="button" class="btn btn-primary">Default button</button>
					<button type="button" class="btn">Default button</button>
				</p>
				<p>
					<button type="button" class="btn btn-small btn-primary">Small button</button>
					<button type="button" class="btn btn-small">Small button</button>
				</p>
				<p>
					<button type="button" class="btn btn-mini btn-primary">Mini button</button>
					<button type="button" class="btn btn-mini">Mini button</button>
				</p>
			</div>

			<div>
				<div class="well" style="max-width: 400px; margin: 0 auto 10px;">
					<button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
					<button type="button" class="btn btn-large btn-block">Block level button</button>
				</div>
			</div>

			<h2>Disabled state</h2>
			<h3>Anchor element</h3>
			<p >
				<a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
				<a href="#" class="btn btn-large disabled">Link</a>
			</p>

			<h3>Button element</h3>
			<p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
			<p >
				<button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
				<button type="button" class="btn btn-large" disabled="">Button</button>
			</p>
		</section>

		<section id="images">
			<div class="page-header">
				<h1>Images</h1>
			</div>
			<div class="bs-docs-example bs-docs-example-images">
				<img src="http://placehold.it/350x150&text=img-rounded" class="img-rounded" alt="140x140" style="width: 140px; height: 140px;" > &nbsp;
				<img src="http://placehold.it/350x150&text=img-circle" class="img-circle" alt="140x140" style="width: 140px; height: 140px;" > &nbsp;
				<img src="http://placehold.it/350x150&text=img-polaroid" class="img-polaroid" alt="140x140" style="width: 140px; height: 140px;" > &nbsp;
			</div>
		</section>

		<section id="icons">
			<div class="page-header">
				<h1>Icons <small>by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></h1>
			</div>

			<h2>Icon glyphs</h2>
			<p>140 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a>.</p>
			<ul class="the-icons clearfix">
				<li><i class="icon-glass"></i> icon-glass</li>
				<li><i class="icon-music"></i> icon-music</li>
				<li><i class="icon-search"></i> icon-search</li>
				<li><i class="icon-envelope"></i> icon-envelope</li>
				<li><i class="icon-heart"></i> icon-heart</li>
				<li><i class="icon-star"></i> icon-star</li>
				<li><i class="icon-star-empty"></i> icon-star-empty</li>
				<li><i class="icon-user"></i> icon-user</li>
				<li><i class="icon-film"></i> icon-film</li>
				<li><i class="icon-th-large"></i> icon-th-large</li>
				<li><i class="icon-th"></i> icon-th</li>
				<li><i class="icon-th-list"></i> icon-th-list</li>
				<li><i class="icon-ok"></i> icon-ok</li>
				<li><i class="icon-remove"></i> icon-remove</li>
				<li><i class="icon-zoom-in"></i> icon-zoom-in</li>
				<li><i class="icon-zoom-out"></i> icon-zoom-out</li>
				<li><i class="icon-off"></i> icon-off</li>
				<li><i class="icon-signal"></i> icon-signal</li>
				<li><i class="icon-cog"></i> icon-cog</li>
				<li><i class="icon-trash"></i> icon-trash</li>
				<li><i class="icon-home"></i> icon-home</li>
				<li><i class="icon-file"></i> icon-file</li>
				<li><i class="icon-time"></i> icon-time</li>
				<li><i class="icon-road"></i> icon-road</li>
				<li><i class="icon-download-alt"></i> icon-download-alt</li>
				<li><i class="icon-download"></i> icon-download</li>
				<li><i class="icon-upload"></i> icon-upload</li>
				<li><i class="icon-inbox"></i> icon-inbox</li>

				<li><i class="icon-play-circle"></i> icon-play-circle</li>
				<li><i class="icon-repeat"></i> icon-repeat</li>
				<li><i class="icon-refresh"></i> icon-refresh</li>
				<li><i class="icon-list-alt"></i> icon-list-alt</li>
				<li><i class="icon-lock"></i> icon-lock</li>
				<li><i class="icon-flag"></i> icon-flag</li>
				<li><i class="icon-headphones"></i> icon-headphones</li>
				<li><i class="icon-volume-off"></i> icon-volume-off</li>
				<li><i class="icon-volume-down"></i> icon-volume-down</li>
				<li><i class="icon-volume-up"></i> icon-volume-up</li>
				<li><i class="icon-qrcode"></i> icon-qrcode</li>
				<li><i class="icon-barcode"></i> icon-barcode</li>
				<li><i class="icon-tag"></i> icon-tag</li>
				<li><i class="icon-tags"></i> icon-tags</li>
				<li><i class="icon-book"></i> icon-book</li>
				<li><i class="icon-bookmark"></i> icon-bookmark</li>
				<li><i class="icon-print"></i> icon-print</li>
				<li><i class="icon-camera"></i> icon-camera</li>
				<li><i class="icon-font"></i> icon-font</li>
				<li><i class="icon-bold"></i> icon-bold</li>
				<li><i class="icon-italic"></i> icon-italic</li>
				<li><i class="icon-text-height"></i> icon-text-height</li>
				<li><i class="icon-text-width"></i> icon-text-width</li>
				<li><i class="icon-align-left"></i> icon-align-left</li>
				<li><i class="icon-align-center"></i> icon-align-center</li>
				<li><i class="icon-align-right"></i> icon-align-right</li>
				<li><i class="icon-align-justify"></i> icon-align-justify</li>
				<li><i class="icon-list"></i> icon-list</li>

				<li><i class="icon-indent-left"></i> icon-indent-left</li>
				<li><i class="icon-indent-right"></i> icon-indent-right</li>
				<li><i class="icon-facetime-video"></i> icon-facetime-video</li>
				<li><i class="icon-picture"></i> icon-picture</li>
				<li><i class="icon-pencil"></i> icon-pencil</li>
				<li><i class="icon-map-marker"></i> icon-map-marker</li>
				<li><i class="icon-adjust"></i> icon-adjust</li>
				<li><i class="icon-tint"></i> icon-tint</li>
				<li><i class="icon-edit"></i> icon-edit</li>
				<li><i class="icon-share"></i> icon-share</li>
				<li><i class="icon-check"></i> icon-check</li>
				<li><i class="icon-move"></i> icon-move</li>
				<li><i class="icon-step-backward"></i> icon-step-backward</li>
				<li><i class="icon-fast-backward"></i> icon-fast-backward</li>
				<li><i class="icon-backward"></i> icon-backward</li>
				<li><i class="icon-play"></i> icon-play</li>
				<li><i class="icon-pause"></i> icon-pause</li>
				<li><i class="icon-stop"></i> icon-stop</li>
				<li><i class="icon-forward"></i> icon-forward</li>
				<li><i class="icon-fast-forward"></i> icon-fast-forward</li>
				<li><i class="icon-step-forward"></i> icon-step-forward</li>
				<li><i class="icon-eject"></i> icon-eject</li>
				<li><i class="icon-chevron-left"></i> icon-chevron-left</li>
				<li><i class="icon-chevron-right"></i> icon-chevron-right</li>
				<li><i class="icon-plus-sign"></i> icon-plus-sign</li>
				<li><i class="icon-minus-sign"></i> icon-minus-sign</li>
				<li><i class="icon-remove-sign"></i> icon-remove-sign</li>
				<li><i class="icon-ok-sign"></i> icon-ok-sign</li>

				<li><i class="icon-question-sign"></i> icon-question-sign</li>
				<li><i class="icon-info-sign"></i> icon-info-sign</li>
				<li><i class="icon-screenshot"></i> icon-screenshot</li>
				<li><i class="icon-remove-circle"></i> icon-remove-circle</li>
				<li><i class="icon-ok-circle"></i> icon-ok-circle</li>
				<li><i class="icon-ban-circle"></i> icon-ban-circle</li>
				<li><i class="icon-arrow-left"></i> icon-arrow-left</li>
				<li><i class="icon-arrow-right"></i> icon-arrow-right</li>
				<li><i class="icon-arrow-up"></i> icon-arrow-up</li>
				<li><i class="icon-arrow-down"></i> icon-arrow-down</li>
				<li><i class="icon-share-alt"></i> icon-share-alt</li>
				<li><i class="icon-resize-full"></i> icon-resize-full</li>
				<li><i class="icon-resize-small"></i> icon-resize-small</li>
				<li><i class="icon-plus"></i> icon-plus</li>
				<li><i class="icon-minus"></i> icon-minus</li>
				<li><i class="icon-asterisk"></i> icon-asterisk</li>
				<li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
				<li><i class="icon-gift"></i> icon-gift</li>
				<li><i class="icon-leaf"></i> icon-leaf</li>
				<li><i class="icon-fire"></i> icon-fire</li>
				<li><i class="icon-eye-open"></i> icon-eye-open</li>
				<li><i class="icon-eye-close"></i> icon-eye-close</li>
				<li><i class="icon-warning-sign"></i> icon-warning-sign</li>
				<li><i class="icon-plane"></i> icon-plane</li>
				<li><i class="icon-calendar"></i> icon-calendar</li>
				<li><i class="icon-random"></i> icon-random</li>
				<li><i class="icon-comment"></i> icon-comment</li>
				<li><i class="icon-magnet"></i> icon-magnet</li>

				<li><i class="icon-chevron-up"></i> icon-chevron-up</li>
				<li><i class="icon-chevron-down"></i> icon-chevron-down</li>
				<li><i class="icon-retweet"></i> icon-retweet</li>
				<li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
				<li><i class="icon-folder-close"></i> icon-folder-close</li>
				<li><i class="icon-folder-open"></i> icon-folder-open</li>
				<li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
				<li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
				<li><i class="icon-hdd"></i> icon-hdd</li>
				<li><i class="icon-bullhorn"></i> icon-bullhorn</li>
				<li><i class="icon-bell"></i> icon-bell</li>
				<li><i class="icon-certificate"></i> icon-certificate</li>
				<li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
				<li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
				<li><i class="icon-hand-right"></i> icon-hand-right</li>
				<li><i class="icon-hand-left"></i> icon-hand-left</li>
				<li><i class="icon-hand-up"></i> icon-hand-up</li>
				<li><i class="icon-hand-down"></i> icon-hand-down</li>
				<li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
				<li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
				<li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
				<li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
				<li><i class="icon-globe"></i> icon-globe</li>
				<li><i class="icon-wrench"></i> icon-wrench</li>
				<li><i class="icon-tasks"></i> icon-tasks</li>
				<li><i class="icon-filter"></i> icon-filter</li>
				<li><i class="icon-briefcase"></i> icon-briefcase</li>
				<li><i class="icon-fullscreen"></i> icon-fullscreen</li>
			</ul>
		</section>

		<section id="labels-badges">
			<div class="page-header">
				<h1>Labels and badges</h1>
			</div>
			<h3>Labels</h3>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<th>Labels</th>
					<th>Markup</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>
						<span class="label">Default</span>
					</td>
					<td>
						<code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						<span class="label label-success">Success</span>
					</td>
					<td>
						<code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						<span class="label label-warning">Warning</span>
					</td>
					<td>
						<code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						<span class="label label-important">Important</span>
					</td>
					<td>
						<code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						<span class="label label-info">Info</span>
					</td>
					<td>
						<code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						<span class="label label-inverse">Inverse</span>
					</td>
					<td>
						<code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
					</td>
					</tr>
				</tbody>
			</table>

			<h3>Badges</h3>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<th>Name</th>
					<th>Example</th>
					<th>Markup</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>
						Default
					</td>
					<td>
						<span class="badge">1</span>
					</td>
					<td>
						<code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						Success
					</td>
					<td>
						<span class="badge badge-success">2</span>
					</td>
					<td>
						<code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						Warning
					</td>
					<td>
						<span class="badge badge-warning">4</span>
					</td>
					<td>
						<code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						Important
					</td>
					<td>
						<span class="badge badge-important">6</span>
					</td>
					<td>
						<code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						Info
					</td>
					<td>
						<span class="badge badge-info">8</span>
					</td>
					<td>
						<code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
					</td>
					</tr>
					<tr>
					<td>
						Inverse
					</td>
					<td>
						<span class="badge badge-inverse">10</span>
					</td>
					<td>
						<code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
					</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section id="typography">
			<div class="page-header">
				<h1>Typographic components</h1>
			</div>

			<h2>Hero unit</h2>
			<div>
				<div class="hero-unit">
					<h1>Hello, world!</h1>
					<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<p><a class="btn btn-primary btn-large">Learn more</a></p>
				</div>
			</div>


			<h2>Page header</h2>
			<div>
				<div class="page-header">
					<h1>Example page header <small>Subtext for header</small></h1>
				</div>
			</div>
		</section>

		<section id="alerts">
			<div class="page-header">
				<h1>Alerts <small>Styles for success, warning, and error messages</small></h1>
			</div>

			<h2>Default alert</h2>
			<p>Wrap any text and an optional dismiss button in <code>.alert</code> for a basic warning alert message.</p>
			<div>
				<div class="alert">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Warning!</strong> Best check yo self, you're not looking too good.
				</div>
			</div>
			


			<h2>Options</h2>
			<div>
				<div class="alert alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h4>Warning!</h4>
					<p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				</div>
			</div>

			<h2>Contextual alternatives</h2>
			<h3>Error or danger</h3>
			<div>
				<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Oh snap!</strong> Change a few things up and try submitting again.
				</div>
			</div>


			<h3>Success</h3>
			<div>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
			</div>


			<h3>Information</h3>
			<div>
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
				</div>
			</div>
		</section>

		<section id="misc">
			<div class="page-header">
				<h1>Miscellaneous <small>Lightweight utility components</small></h1>
			</div>

			<h2>Wells</h2>
			<div>
				<div class="well">
					Look, I'm in a well!
				</div>
			</div>

			<h3>Optional classes</h3>
			<div>
				<div class="well well-large">
					Look, I'm in a well!
				</div>
			</div>

			<div>
				<div class="well well-small">
					Look, I'm in a well!
				</div>
			</div>


			<h2>Close icon</h2>
			<div>
				<p><button class="close" style="float: none;">×</button></p>
			</div>

			<h2>Helper classes</h2>
			<p>Simple, focused classes for small display or behavior tweaks.</p>

			<h4>.pull-left</h4>
			<p>Float an element left</p>



			<h4>.pull-right</h4>
			<p>Float an element right</p>



			<h4>.muted</h4>
			<p>Change an element's color to <code>#999</code></p>



			<h4>.clearfix</h4>
			<p>Clear the <code>float</code> on any element</p>
		</section>

	</body>
</html>