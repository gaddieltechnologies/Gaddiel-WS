<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";s:3242:"/**
 * SqueezeBox - Expandable Lightbox
 *
 * Allows to open various content as modal,
 * centered and animated box.
 *
 * @version		1.3
 *
 * @license		MIT-style license
 * @author		Harald Kirschner <mail [at] digitarald.de>
 * @author		Rouven Weßling <me [at] rouvenwessling.de>
 * @copyright	Author
 */

#sbox-overlay {
	position: absolute;
	background-color: #000;
	left: 0px;
	top: 0px;
}

#sbox-window {
	position: absolute;
	background-color: #fff;
	text-align: left;
	overflow: visible;
	padding: 10px;
	/* invalid values, but looks smoother! */
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

#sbox-window[aria-hidden=true],
#sbox-overlay[aria-hidden=true] {
	display: none;
}

#sbox-btn-close {
	position: absolute;
	width: 30px;
	height: 30px;
	right: -15px;
	top: -15px;
	background: url(/media/system/images/modal/closebox.png) no-repeat center;
	border: none;
}

.sbox-loading #sbox-content {
	background-image: url(/media/system/images/modal/spinner.gif);
	background-repeat: no-repeat;
	background-position: center;
}

#sbox-content {
	clear: both;
	overflow: auto;
	background-color: #fff;
	height: 100%;
	width: 100%;
}

.sbox-content-image#sbox-content {
	overflow: visible;
}

#sbox-image {
	display: block;
}

.sbox-content-image img {
	display: block;
	width: 100%;
	height: 100%;
}

.sbox-content-iframe#sbox-content {
	overflow: visible;
}

/* Hides scrollbars */
.body-overlayed {
	overflow: hidden;
}

/* Hides flash (Firefox problem) and selects (IE) */
.body-overlayed embed, .body-overlayed object, .body-overlayed select {
	visibility: hidden;
}

#sbox-window embed, #sbox-window object, #sbox-window select {
	visibility: visible;
}

/* Shadows */
#sbox-window.shadow {
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
}

.sbox-bg {
	position: absolute;
	width: 33px;
	height: 40px;
}

.sbox-bg-n {
	left: 0;
	top: -40px;
	width: 100%;
	background: url(/media/system/images/modal/bg_n.png) repeat-x;
}
.sbox-bg-ne {
	right: -33px;
	top: -40px;
	background: url(/media/system/images/modal/bg_ne.png) no-repeat;
}
.sbox-bg-e {
	right: -33px;
	top: 0;
	height: 100%;
	background: url(/media/system/images/modal/bg_e.png) repeat-y;
}
.sbox-bg-se {
	right: -33px;
	bottom: -40px;
	background: url(/media/system/images/modal/bg_se.png) no-repeat;
}
.sbox-bg-s {
	left: 0;
	bottom: -40px;
	width: 100%;
	background: url(/media/system/images/modal/bg_s.png) repeat-x;
}
.sbox-bg-sw {
	left: -33px;
	bottom: -40px;
	background: url(/media/system/images/modal/bg_sw.png) no-repeat;
}
.sbox-bg-w {
	left: -33px;
	top: 0;
	height: 100%;
	background: url(/media/system/images/modal/bg_w.png) repeat-y;
}
.sbox-bg-nw {
	left: -33px;
	top: -40px;
	background: url(/media/system/images/modal/bg_nw.png) no-repeat;
}
@-moz-document url-prefix() {
    .body-overlayed {
	overflow: visible;
    }
}
@media (max-width: 979px) {
	#sbox-window {
		overflow: none;
	}
	#sbox-btn-close {
		right: -10px;
		top: -10px;
	}
}
@media (max-device-width: 979px) {
	#sbox-content {
		-webkit-overflow-scrolling: touch;
	}
	#sbox-content.sbox-content-iframe {
		overflow: scroll;
		-webkit-overflow-scrolling: touch;
	}
}";}