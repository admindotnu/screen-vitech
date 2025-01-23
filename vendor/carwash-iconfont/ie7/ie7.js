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
		el.innerHTML = '<span style="font-family: \'carwash-iconfont\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-chevron_left': '&#xe900;',
		'icon-chevron_right': '&#xe901;',
		'icon-icon_check': '&#xe902;',
		'icon-icon_close': '&#xe903;',
		'icon-icon_info': '&#xe904;',
		'icon-icon_contactloosbetalen': '&#xe905;',
		'icon-icon_payconiq': '&#xe906;',
		'icon-icon_francais': '&#xe907;',
		'icon-icon_deutsch': '&#xe90a;',
		'icon-icon_dutch': '&#xe90d;',
		'icon-icon_english': '&#xe910;',
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
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
