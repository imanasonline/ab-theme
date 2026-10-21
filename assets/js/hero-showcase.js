/**
 * AB Custom Theme — Hero showcase rotation.
 *
 * Slides khud badalti hain (har 4.5 second), hover ya
 * keyboard focus par ruk jati hain, dots se bhi badli
 * ja sakti hain. "Reduce motion" wale visitors ke liye
 * auto-rotation band rehti hai.
 */
(function () {
	var root = document.querySelector('[data-showcase]');
	if (!root) {
		return;
	}

	var slides = Array.prototype.slice.call(root.querySelectorAll('.showcase__slide'));
	var dots = Array.prototype.slice.call(root.querySelectorAll('.showcase__dot'));
	if (slides.length < 2) {
		return;
	}

	var current = 0;
	var timer = null;
	var DELAY = 4500;
	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	function show(index) {
		slides[current].classList.remove('is-active');
		slides[current].setAttribute('aria-hidden', 'true');
		dots[current].classList.remove('is-active');

		current = (index + slides.length) % slides.length;

		slides[current].classList.add('is-active');
		slides[current].removeAttribute('aria-hidden');
		dots[current].classList.add('is-active');
	}

	function start() {
		if (reduceMotion || timer) {
			return;
		}
		timer = window.setInterval(function () {
			show(current + 1);
		}, DELAY);
	}

	function stop() {
		if (timer) {
			window.clearInterval(timer);
			timer = null;
		}
	}

	dots.forEach(function (dot, i) {
		dot.addEventListener('click', function () {
			stop();
			show(i);
			start();
		});
	});

	root.addEventListener('mouseenter', stop);
	root.addEventListener('mouseleave', start);
	root.addEventListener('focusin', stop);
	root.addEventListener('focusout', start);
	document.addEventListener('visibilitychange', function () {
		if (document.hidden) {
			stop();
		} else {
			start();
		}
	});

	start();
})();
