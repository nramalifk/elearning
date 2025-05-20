/*------------------------------------
 *Author:FortunaTheme
 *Template:Rezumate
 *Version:1.1
 *-------------------------------------
 */
(function ($) {
	"use strict";

	jQuery(document).ready(function () {
		/*
		 * -----------------------------------------------------------------
		 *---------------------------Preloader------------------------------
		 * -----------------------------------------------------------------
		 */

		jQuery(window).on("load", function () {
			var preloader = jQuery(".preloader");
			var preloaderArea = jQuery(".preloader-area");
			preloader.fadeOut();
			preloaderArea.delay(200).fadeOut("slow");
			$(window).scrollTop(0);
		});

		/*
		 * -----------------------------------------------------------------
		 *-------------------single-page-nav-plugin------------------------
		 * -----------------------------------------------------------------
		 */

		// Prevent console.log from generating errors in IE for the purposes of the demo
		if (!window.console)
			console = {
				log: function () {},
			};

		// The actual plugin
		/*
		 * -----------------------------------------------------------------
		 *------------------------------Typed.js----------------------------
		 * -----------------------------------------------------------------
		 */

		$(function () {
			$(".element").typed({
				strings: [
					"Konnichiwa Mina-san",
					"Ogenki desu ka?",
					"Kamu ngga usah khawatir ketinggalan materi",
					"Kamu bisa akses semua materi",
					"Materi Kebahasaan dan Kebudayaan ada disini lho, Douzo^^",
				],
				typeSpeed: 80,
				loop: true,
			});
		});
	});
})(jQuery);
