<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Scaffold - List - <?php echo $column; ?></title>
		<?php echo View::factory("scaffold/snippets/head")->render(); ?>
	</head>
	
	<body>
		<div id="container">
			<p>
				<?php echo HTML::anchor('scaffold', 'Models'); ?> > <strong><?php echo ImplodeUppercase::ucwords_text($column) ?></strong>
			</p>
			<?php
				$msg = Session::instance()->get("flash.message");
				if ( ! empty( $msg ) ) {
					foreach ( $msg as $item )
					{
						echo "<div id=\"msg\" class=\"msg ". $item["type"] ."\">" . $item["msg"] . "<a href=\"./". $column ."\" id=\"msg-button\">[X]</a></div>";
					};
					Session::instance()->delete("flash.message");
				};
			?>
			<p>
				<?php echo HTML::anchor('scaffold/insert/' . $column, __("Insert"), Array("class"=>"submit right")); ?>
			</p>
			<table width="100%" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<?php
							$header_html = "";
							foreach ( $header as $item ) {
								$header_html .= "<th>" . $item . "</th>";
							};
							echo $header_html;
						?>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<?php echo $header_html; ?>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
				<?php foreach ($content as $items) : ?>
					<tr>
					<?php foreach ( $items as $item ) : ?>
						<td><?php echo $item ?></td>
					<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<p>
				<?php echo $pagination ?>
			</p>
			<p>
				<?php echo HTML::anchor('scaffold', "< " . __("Back") . " " . __("to") . " " . __("Model") ); ?>
			</p>
		</div>
		<?php echo View::factory("scaffold/snippets/footer")->render(); ?>
	</body>

</html>