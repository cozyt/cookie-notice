<?php
/**
 * Cookie notice
 *
 * A cookie notice snippet that does not include visual or positional styles
 * but handles functional styling so that the snippet can be used without the
 * need for javascript.
 *
 * @param string $message The cookie message to be displayed
 * @see https://github.com/cozyt/cookie-notice
 * @author  A. Harvey
 * @return string
*/
?>

<div class="cookie-notice">
	<input type="checkbox" name="cookie-notice__state" id="cookie-notice__state" value="1" class="cookie-notice__state" <?php echo isset($checked) ? $checked : ''; ?>/>

	<div class="cookie-notice__content">
		<div class="cookie-notice__message">
			<?php echo isset($message) ? $message : 'Awaiting cookie notice'; ?>
		</div>

		<label for="cookie-notice__state" class="cookie-notice__btn"><span><?php echo isset($button_text) ? $button_text : 'Close'; ?></span></label>
	</div>
</div>
