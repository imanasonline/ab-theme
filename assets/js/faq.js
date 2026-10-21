/**
 * AB Theme — FAQ accordion.
 *
 * Live wala rawaiya: ek waqt mein sirf EK jawab khula
 * rehta hai; doosra kholo to pehla khud band ho jata
 * hai. Load par sab band hote hain.
 *
 * @package AB_Theme
 */
( function () {
	var buttons = document.querySelectorAll( '.faq-card__q' );
	if ( ! buttons.length ) {
		return;
	}

	function closeCard( button ) {
		var card = button.closest( '.faq-card' );
		var panel = document.getElementById( button.getAttribute( 'aria-controls' ) );
		button.setAttribute( 'aria-expanded', 'false' );
		card.classList.remove( 'is-open' );
		if ( panel ) {
			panel.hidden = true;
		}
	}

	function openCard( button ) {
		var card = button.closest( '.faq-card' );
		var panel = document.getElementById( button.getAttribute( 'aria-controls' ) );
		button.setAttribute( 'aria-expanded', 'true' );
		card.classList.add( 'is-open' );
		if ( panel ) {
			panel.hidden = false;
		}
	}

	buttons.forEach( function ( button ) {
		button.addEventListener( 'click', function () {
			var isOpen = button.getAttribute( 'aria-expanded' ) === 'true';
			buttons.forEach( closeCard );
			if ( ! isOpen ) {
				openCard( button );
			}
		} );
	} );
} )();
