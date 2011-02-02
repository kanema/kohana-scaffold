<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Scaffold - Models</title>
		<?php echo View::factory("scaffold/snippets/head")->render(); ?>
	</head>
	
	<body>
		<div id="container">
			<p>
				<?php echo __('Models'); ?></strong>
			</p>
			<?php
				$msg = Session::instance()->get("flash.message");
				if ( ! empty( $msg ) ) {
					foreach ( $msg as $item )
					{
						echo "<div id=\"msg\" class=\"msg ". $item["type"] ."\">" . $item["msg"] . "<a href=\"./\" id=\"msg-button\">[X]</a></div>";
					};
					Session::instance()->delete("flash.message");
				};
			?>
			<p>
				<!-- <?php echo HTML::anchor('scaffold?auto_modeler', __("Add a model"), Array("class"=>"submit right")); ?> -->
				<?php echo HTML::anchor('scaffold?auto_modeler', __("List all models") , Array("class"=>"submit right")); ?>
				<?php echo HTML::anchor('scaffold?remove_models', __("Remove all models") , Array("class"=>"submit right")); ?>
			</p>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody>
				<?php if ( is_array($content) ) : ?> 
					<?php foreach ($content as $item) : ?>
						<tr>
							<td><?php echo $item ?></td>
						</tr>
					<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td><?php echo $content ?></td>
					</tr>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php echo View::factory("scaffold/snippets/footer")->render(); ?>
	</body>

</html>