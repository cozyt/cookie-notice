{{-----------------------------------------------------------------------------
 * Kooky notice
 * A cookie notice snippet that does not include visual or positional styles 
 * but handles functional styling so that the snippet can be used without the 
 * need for javascript.
 *
 * @param string $message The cookie message to be displayed
 * @url https://bitbucket.org/cozyt/kooky-notice
 * @author  A. Harvey @since 0.1
 * @version  0.1
 * @since  0.1
 * @return string
-----------------------------------------------------------------------------}}


<div class="kooky-notice">
	<input type="checkbox" name="kooky-notice__state" id="kooky-notice__state" value="1" class="kooky-notice__state" />

	<div class="kooky-notice__content">
		<div class="kooky-notice__message">
			{{ $message or 'Awaiting cookie notice' }}
		</div>

		<label for="kooky-notice__state" class="kooky-notice__btn"><span>Close</span></label>
	</div>
</div>
