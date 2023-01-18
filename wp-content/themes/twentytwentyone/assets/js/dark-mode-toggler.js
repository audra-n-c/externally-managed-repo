function toggleDarkMode() { // jshint ignore:line
	var toggler = document.getElementById( 'dark-mode-toggler' );

	if ( 'false' === toggler.getAttribute( 'aria-pressed' ) ) {
		toggler.setAttribute( 'aria-pressed', 'true' );
		document.documentElement.classList.add( 'is-dark-theme' );
		document.body.classList.add( 'is-dark-theme' );
		window.localStorage.setItem( 'twentytwentyoneDarkMode', 'yes' );
	} else {
		toggler.setAttribute( 'aria-pressed', 'false' );
		document.documentElement.classList.remove( 'is-dark-theme' );
		document.body.classList.remove( 'is-dark-theme' );
		window.localStorage.setItem( 'twentytwentyoneDarkMode', 'no' );
	}
}

function twentytwentyoneIsDarkMode() {
	var isDarkMode = window.matchMedia( '(prefers-color-scheme: dark)' ).matches;

	if ( 'yes' === window.localStorage.getItem( 'twentytwentyoneDarkMode' ) ) {
		isDarkMode = true;
	} else if ( 'no' === window.localStorage.getItem( 'twentytwentyoneDarkMode' ) ) {
		isDarkMode = false;
	}

	return isDarkMode;
}

function darkModeInitialLoad() {
	var toggler = document.getElementById( 'dark-mode-toggler' ),
		isDarkMode = twentytwentyoneIsDarkMode();

	if ( isDarkMode ) {
		document.documentElement.classList.add( 'is-dark-theme' );
		document.body.classList.add( 'is-dark-theme' );
	} else {
		document.documentElement.classList.remove( 'is-dark-theme' );
		document.body.classList.remove( 'is-dark-theme' );
	}

	if ( toggler && isDarkMode ) {
		toggler.setAttribute( 'aria-pressed', 'true' );
	}
}

function darkModeRepositionTogglerOnScroll() {
<<<<<<< HEAD

	var toggler = document.getElementById( 'dark-mode-toggler' ),
		prevScroll = window.scrollY || document.documentElement.scrollTop,
=======
	var prevScroll = window.scrollY || document.documentElement.scrollTop,
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
		currentScroll,

		checkScroll = function() {
			currentScroll = window.scrollY || document.documentElement.scrollTop;
			if (
				currentScroll + ( window.innerHeight * 1.5 ) > document.body.clientHeight ||
				currentScroll < prevScroll
			) {
<<<<<<< HEAD
				toggler.classList.remove( 'hide' );
			} else if ( currentScroll > prevScroll && 250 < currentScroll ) {
				toggler.classList.add( 'hide' );
			}
			prevScroll = currentScroll;
		};

	if ( toggler ) {
		window.addEventListener( 'scroll', checkScroll );
	}
=======
				document.getElementById( 'dark-mode-toggler' ).classList.remove( 'hide' );
			} else if ( currentScroll > prevScroll && 250 < currentScroll ) {
				document.getElementById( 'dark-mode-toggler' ).classList.add( 'hide' );
			}
			prevScroll = currentScroll;
		};
	window.addEventListener( 'scroll', checkScroll );
>>>>>>> 8adbba5df3c87832de0c756811c05091cf31f571
}

darkModeInitialLoad();
darkModeRepositionTogglerOnScroll();
