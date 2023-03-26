/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'ite-icons\'">' + entity + '</span>' + html;
	}
	var icons = {
		'ite-logo': '&#xe900;',
		'ite-logo-withText': '&#xe908;',
		'ite-chevron-up': '&#xe915;',
		'ite-chevron-right': '&#xe91b;',
		'ite-chevron-down': '&#xe914;',
		'ite-chevron-left': '&#xe911;',
		'ite-arrow-up': '&#xe92c;',
		'ite-arrow-right': '&#xe92d;',
		'ite-arrow-down': '&#xe929;',
		'ite-arrow-left': '&#xe92e;',
		'ite-search': '&#xe91c;',
		'ite-basket': '&#xe92f;',
		'ite-basket-outline': '&#xe912;',
		'ite-times': '&#xe913;',
		'ite-heart': '&#xe925;',
		'ite-heart-outline': '&#xe92b;',
		'ite-duration': '&#xe92a;',
		'ite-calendar': '&#xe91d;',
		'ite-web': '&#xe91e;',
		'ite-location': '&#xe91f;',
		'ite-plus': '&#xe920;',
		'ite-ellipse': '&#xe921;',
		'ite-bars': '&#xe922;',
		'ite-check-circle': '&#xe923;',
		'ite-check': '&#xe924;',
		'ite-download': '&#xe926;',
		'ite-certificate': '&#xe927;',
		'ite-play-circle': '&#xe928;',
		'ite-fb': '&#xe916;',
		'ite-instagram': '&#xe917;',
		'ite-youtube': '&#xe918;',
		'ite-telegram': '&#xe91a;',
		'ite-linkedn': '&#xe919;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/ite-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
