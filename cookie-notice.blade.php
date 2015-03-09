{{-----------------------------------------------------------------------------
 * Cookie notice
 * A cookie notice snippet that does not include visual or positional styles 
 * but handles functional styling so that the snippet can be used without the 
 * need for javascript.
 *
 * @param string $message The cookie message to be displayed
 * @url https://bitbucket.org/cozyt/cookie-notice
 * @author  A. Harvey @since 0.1
 * @version  0.1
 * @since  0.1
 * @return string
-----------------------------------------------------------------------------}}


<div class="cookie-notice">
	<input type="checkbox" name="cookie-notice__state" id="cookie-notice__state" value="1" class="cookie-notice__state" {{ $checked or '' }}/>

	<div class="cookie-notice__content">
		<div class="cookie-notice__message">
			{{ $message or 'Awaiting cookie notice' }}
		</div>

		<label for="cookie-notice__state" class="cookie-notice__btn"><span>Close</span></label>
	</div>
</div>
