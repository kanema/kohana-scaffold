<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript">
	// Msg hide
	( function( $ ) {
		var $msg = $("#msg");
		$msg.find("#msg-button").click( function() {
			$msg.slideUp();
			return false;
		});
		window.setTimeout(function() {
			$msg.slideUp();
		}, 5000);
		
		$('a[class="delete"]').click( function() {
			if ( ! confirm('Are you sure you want to delete?') )
				return false;
		});
	})( jQuery );
</script>