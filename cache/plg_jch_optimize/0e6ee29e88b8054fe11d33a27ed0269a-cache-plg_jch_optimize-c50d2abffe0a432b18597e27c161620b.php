<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";s:27513:"/* Compiled Less CSS File */
/* Generated from "template_responsive.css" */

/**********************************************************************************

	@copyright	Copyright (C) 2013 IceTheme. All Rights Reserved
	@license	Copyrighted Commercial Software 
	@author     IceTheme (icetheme.com)
	
**********************************************************************************/
/* Import LESS variables and mixins files */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.hide-text {
  font: NaN a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* Import Template Variables */
/***********************************************************************************************/
/* LESS VARIABLES */
/***********************************************************************************************/
/* responsive variables */
/***********************************************************************************************/
/* LESS MIXINS */
/***********************************************************************************************/
/* Responsive Utilities */
@-ms-viewport {
  width: device-width;
}
.hidden {
  display: none;
  visibility: hidden;
}
.visible-phone {
  display: none !important;
}
.visible-tablet {
  display: none !important;
}
.hidden-desktop {
  display: none !important;
}
.visible-desktop {
  display: inherit !important;
}
@media (min-width: 768px) and (max-width: 979px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important ;
  }
  .visible-tablet {
    display: inherit !important;
  }
  .hidden-tablet {
    display: none !important;
  }
}
@media (max-width: 767px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important;
  }
  .visible-phone {
    display: inherit !important;
  }
  .hidden-phone {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: inherit !important;
  }
  .hidden-print {
    display: none !important;
  }
}
@media (max-width: 767px) {
  body {
    padding-left: 20px;
    padding-right: 20px;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom,
  .navbar-static-top {
    margin-left: -20px;
    margin-right: -20px;
  }
  .container-fluid {
    padding: 0;
  }
  .dl-horizontal dt {
    float: none;
    clear: none;
    width: auto;
    text-align: left;
  }
  .dl-horizontal dd {
    margin-left: 0;
  }
  .container {
    width: auto;
  }
  .row-fluid {
    width: 100%;
  }
  .row,
  .thumbnails {
    margin-left: 0;
  }
  .thumbnails > li {
    float: none;
    margin-left: 0;
  }
  [class*="span"],
  .uneditable-input[class*="span"],
  .row-fluid [class*="span"] {
    float: none;
    display: block;
    width: 100%;
    margin-left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .span12,
  .row-fluid .span12 {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .row-fluid [class*="offset"]:first-child {
    margin-left: 0;
  }
  .input-large,
  .input-xlarge,
  .input-xxlarge,
  input[class*="span"],
  select[class*="span"],
  textarea[class*="span"],
  .uneditable-input {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .input-prepend input,
  .input-append input,
  .input-prepend input[class*="span"],
  .input-append input[class*="span"] {
    display: inline-block;
    width: auto;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 0;
  }
}
@media (max-width: 480px) {
  .nav-collapse {
    -webkit-transform: translate3d(0, 0, 0);
  }
  .page-header h1 small {
    display: block;
    line-height: 20px;
  }
  input[type="checkbox"],
  input[type="radio"] {
    border: 1px solid #ccc;
  }
  .form-horizontal .control-label {
    float: none;
    width: auto;
    padding-top: 0;
    text-align: left;
  }
  .form-horizontal .controls {
    margin-left: 0;
  }
  .form-horizontal .control-list {
    padding-top: 0;
  }
  .form-horizontal .form-actions {
    padding-left: 10px;
    padding-right: 10px;
  }
  .media .pull-left,
  .media .pull-right {
    float: none;
    display: block;
    margin-bottom: 10px;
  }
  .media-object {
    margin-right: 0;
    margin-left: 0;
  }
  .modal-header .close {
    padding: 10px;
    margin: -10px;
  }
  .carousel-caption {
    position: static;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  .row {
    margin-left: -20px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {
    width: 724px;
  }
  .span12 {
    width: 724px;
  }
  .span11 {
    width: 662px;
  }
  .span10 {
    width: 600px;
  }
  .span9 {
    width: 538px;
  }
  .span8 {
    width: 476px;
  }
  .span7 {
    width: 414px;
  }
  .span6 {
    width: 352px;
  }
  .span5 {
    width: 290px;
  }
  .span4 {
    width: 228px;
  }
  .span3 {
    width: 166px;
  }
  .span2 {
    width: 104px;
  }
  .span1 {
    width: 42px;
  }
  .offset12 {
    margin-left: 764px;
  }
  .offset11 {
    margin-left: 702px;
  }
  .offset10 {
    margin-left: 640px;
  }
  .offset9 {
    margin-left: 578px;
  }
  .offset8 {
    margin-left: 516px;
  }
  .offset7 {
    margin-left: 454px;
  }
  .offset6 {
    margin-left: 392px;
  }
  .offset5 {
    margin-left: 330px;
  }
  .offset4 {
    margin-left: 268px;
  }
  .offset3 {
    margin-left: 206px;
  }
  .offset2 {
    margin-left: 144px;
  }
  .offset1 {
    margin-left: 82px;
  }
  .row-fluid {
    width: 100%;
    *zoom: 1;
  }
  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row-fluid:after {
    clear: both;
  }
  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.7624309392265194%;
    *margin-left: 2.709239449864817%;
  }
  .row-fluid [class*="span"]:first-child {
    margin-left: 0;
  }
  .row-fluid .controls-row [class*="span"] + [class*="span"] {
    margin-left: 2.7624309392265194%;
  }
  .row-fluid .span12 {
    width: 100%;
    *width: 99.94680851063829%;
  }
  .row-fluid .span11 {
    width: 91.43646408839778%;
    *width: 91.38327259903608%;
  }
  .row-fluid .span10 {
    width: 82.87292817679558%;
    *width: 82.81973668743387%;
  }
  .row-fluid .span9 {
    width: 74.30939226519337%;
    *width: 74.25620077583166%;
  }
  .row-fluid .span8 {
    width: 65.74585635359117%;
    *width: 65.69266486422946%;
  }
  .row-fluid .span7 {
    width: 57.18232044198895%;
    *width: 57.12912895262725%;
  }
  .row-fluid .span6 {
    width: 48.61878453038674%;
    *width: 48.56559304102504%;
  }
  .row-fluid .span5 {
    width: 40.05524861878453%;
    *width: 40.00205712942283%;
  }
  .row-fluid .span4 {
    width: 31.491712707182323%;
    *width: 31.43852121782062%;
  }
  .row-fluid .span3 {
    width: 22.92817679558011%;
    *width: 22.87498530621841%;
  }
  .row-fluid .span2 {
    width: 14.3646408839779%;
    *width: 14.311449394616199%;
  }
  .row-fluid .span1 {
    width: 5.801104972375691%;
    *width: 5.747913483013988%;
  }
  .row-fluid .offset12 {
    margin-left: 105.52486187845304%;
    *margin-left: 105.41847889972962%;
  }
  .row-fluid .offset12:first-child {
    margin-left: 102.76243093922652%;
    *margin-left: 102.6560479605031%;
  }
  .row-fluid .offset11 {
    margin-left: 96.96132596685082%;
    *margin-left: 96.8549429881274%;
  }
  .row-fluid .offset11:first-child {
    margin-left: 94.1988950276243%;
    *margin-left: 94.09251204890089%;
  }
  .row-fluid .offset10 {
    margin-left: 88.39779005524862%;
    *margin-left: 88.2914070765252%;
  }
  .row-fluid .offset10:first-child {
    margin-left: 85.6353591160221%;
    *margin-left: 85.52897613729868%;
  }
  .row-fluid .offset9 {
    margin-left: 79.8342541436464%;
    *margin-left: 79.72787116492299%;
  }
  .row-fluid .offset9:first-child {
    margin-left: 77.07182320441989%;
    *margin-left: 76.96544022569647%;
  }
  .row-fluid .offset8 {
    margin-left: 71.2707182320442%;
    *margin-left: 71.16433525332079%;
  }
  .row-fluid .offset8:first-child {
    margin-left: 68.50828729281768%;
    *margin-left: 68.40190431409427%;
  }
  .row-fluid .offset7 {
    margin-left: 62.70718232044199%;
    *margin-left: 62.600799341718584%;
  }
  .row-fluid .offset7:first-child {
    margin-left: 59.94475138121547%;
    *margin-left: 59.838368402492065%;
  }
  .row-fluid .offset6 {
    margin-left: 54.14364640883978%;
    *margin-left: 54.037263430116376%;
  }
  .row-fluid .offset6:first-child {
    margin-left: 51.38121546961326%;
    *margin-left: 51.27483249088986%;
  }
  .row-fluid .offset5 {
    margin-left: 45.58011049723757%;
    *margin-left: 45.47372751851417%;
  }
  .row-fluid .offset5:first-child {
    margin-left: 42.81767955801105%;
    *margin-left: 42.71129657928765%;
  }
  .row-fluid .offset4 {
    margin-left: 37.01657458563536%;
    *margin-left: 36.91019160691196%;
  }
  .row-fluid .offset4:first-child {
    margin-left: 34.25414364640884%;
    *margin-left: 34.14776066768544%;
  }
  .row-fluid .offset3 {
    margin-left: 28.45303867403315%;
    *margin-left: 28.346655695309746%;
  }
  .row-fluid .offset3:first-child {
    margin-left: 25.69060773480663%;
    *margin-left: 25.584224756083227%;
  }
  .row-fluid .offset2 {
    margin-left: 19.88950276243094%;
    *margin-left: 19.783119783707537%;
  }
  .row-fluid .offset2:first-child {
    margin-left: 17.12707182320442%;
    *margin-left: 17.02068884448102%;
  }
  .row-fluid .offset1 {
    margin-left: 11.32596685082873%;
    *margin-left: 11.219583872105325%;
  }
  .row-fluid .offset1:first-child {
    margin-left: 8.56353591160221%;
    *margin-left: 8.457152932878806%;
  }
  input,
  textarea,
  .uneditable-input {
    margin-left: 0;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 20px;
  }
  input.span12,
  textarea.span12,
  .uneditable-input.span12 {
    width: 710px;
  }
  input.span11,
  textarea.span11,
  .uneditable-input.span11 {
    width: 648px;
  }
  input.span10,
  textarea.span10,
  .uneditable-input.span10 {
    width: 586px;
  }
  input.span9,
  textarea.span9,
  .uneditable-input.span9 {
    width: 524px;
  }
  input.span8,
  textarea.span8,
  .uneditable-input.span8 {
    width: 462px;
  }
  input.span7,
  textarea.span7,
  .uneditable-input.span7 {
    width: 400px;
  }
  input.span6,
  textarea.span6,
  .uneditable-input.span6 {
    width: 338px;
  }
  input.span5,
  textarea.span5,
  .uneditable-input.span5 {
    width: 276px;
  }
  input.span4,
  textarea.span4,
  .uneditable-input.span4 {
    width: 214px;
  }
  input.span3,
  textarea.span3,
  .uneditable-input.span3 {
    width: 152px;
  }
  input.span2,
  textarea.span2,
  .uneditable-input.span2 {
    width: 90px;
  }
  input.span1,
  textarea.span1,
  .uneditable-input.span1 {
    width: 28px;
  }
}
@media (min-width: 1200px) {
  .row {
    margin-left: -30px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 30px;
  }
  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {
    width: 1170px;
  }
  .span12 {
    width: 1170px;
  }
  .span11 {
    width: 1070px;
  }
  .span10 {
    width: 970px;
  }
  .span9 {
    width: 870px;
  }
  .span8 {
    width: 770px;
  }
  .span7 {
    width: 670px;
  }
  .span6 {
    width: 570px;
  }
  .span5 {
    width: 470px;
  }
  .span4 {
    width: 370px;
  }
  .span3 {
    width: 270px;
  }
  .span2 {
    width: 170px;
  }
  .span1 {
    width: 70px;
  }
  .offset12 {
    margin-left: 1230px;
  }
  .offset11 {
    margin-left: 1130px;
  }
  .offset10 {
    margin-left: 1030px;
  }
  .offset9 {
    margin-left: 930px;
  }
  .offset8 {
    margin-left: 830px;
  }
  .offset7 {
    margin-left: 730px;
  }
  .offset6 {
    margin-left: 630px;
  }
  .offset5 {
    margin-left: 530px;
  }
  .offset4 {
    margin-left: 430px;
  }
  .offset3 {
    margin-left: 330px;
  }
  .offset2 {
    margin-left: 230px;
  }
  .offset1 {
    margin-left: 130px;
  }
  .row-fluid {
    width: 100%;
    *zoom: 1;
  }
  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row-fluid:after {
    clear: both;
  }
  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.564102564102564%;
    *margin-left: 2.5109110747408616%;
  }
  .row-fluid [class*="span"]:first-child {
    margin-left: 0;
  }
  .row-fluid .controls-row [class*="span"] + [class*="span"] {
    margin-left: 2.564102564102564%;
  }
  .row-fluid .span12 {
    width: 100%;
    *width: 99.94680851063829%;
  }
  .row-fluid .span11 {
    width: 91.45299145299145%;
    *width: 91.39979996362975%;
  }
  .row-fluid .span10 {
    width: 82.90598290598291%;
    *width: 82.8527914166212%;
  }
  .row-fluid .span9 {
    width: 74.35897435897436%;
    *width: 74.30578286961266%;
  }
  .row-fluid .span8 {
    width: 65.81196581196582%;
    *width: 65.75877432260411%;
  }
  .row-fluid .span7 {
    width: 57.26495726495726%;
    *width: 57.21176577559556%;
  }
  .row-fluid .span6 {
    width: 48.717948717948715%;
    *width: 48.664757228587014%;
  }
  .row-fluid .span5 {
    width: 40.17094017094017%;
    *width: 40.11774868157847%;
  }
  .row-fluid .span4 {
    width: 31.623931623931625%;
    *width: 31.570740134569924%;
  }
  .row-fluid .span3 {
    width: 23.076923076923077%;
    *width: 23.023731587561375%;
  }
  .row-fluid .span2 {
    width: 14.52991452991453%;
    *width: 14.476723040552828%;
  }
  .row-fluid .span1 {
    width: 5.982905982905983%;
    *width: 5.929714493544281%;
  }
  .row-fluid .offset12 {
    margin-left: 105.12820512820512%;
    *margin-left: 105.02182214948171%;
  }
  .row-fluid .offset12:first-child {
    margin-left: 102.56410256410257%;
    *margin-left: 102.45771958537915%;
  }
  .row-fluid .offset11 {
    margin-left: 96.58119658119658%;
    *margin-left: 96.47481360247316%;
  }
  .row-fluid .offset11:first-child {
    margin-left: 94.01709401709402%;
    *margin-left: 93.91071103837061%;
  }
  .row-fluid .offset10 {
    margin-left: 88.03418803418803%;
    *margin-left: 87.92780505546462%;
  }
  .row-fluid .offset10:first-child {
    margin-left: 85.47008547008548%;
    *margin-left: 85.36370249136206%;
  }
  .row-fluid .offset9 {
    margin-left: 79.48717948717949%;
    *margin-left: 79.38079650845607%;
  }
  .row-fluid .offset9:first-child {
    margin-left: 76.92307692307693%;
    *margin-left: 76.81669394435352%;
  }
  .row-fluid .offset8 {
    margin-left: 70.94017094017094%;
    *margin-left: 70.83378796144753%;
  }
  .row-fluid .offset8:first-child {
    margin-left: 68.37606837606839%;
    *margin-left: 68.26968539734497%;
  }
  .row-fluid .offset7 {
    margin-left: 62.393162393162385%;
    *margin-left: 62.28677941443899%;
  }
  .row-fluid .offset7:first-child {
    margin-left: 59.82905982905982%;
    *margin-left: 59.72267685033642%;
  }
  .row-fluid .offset6 {
    margin-left: 53.84615384615384%;
    *margin-left: 53.739770867430444%;
  }
  .row-fluid .offset6:first-child {
    margin-left: 51.28205128205128%;
    *margin-left: 51.175668303327875%;
  }
  .row-fluid .offset5 {
    margin-left: 45.299145299145295%;
    *margin-left: 45.1927623204219%;
  }
  .row-fluid .offset5:first-child {
    margin-left: 42.73504273504273%;
    *margin-left: 42.62865975631933%;
  }
  .row-fluid .offset4 {
    margin-left: 36.75213675213675%;
    *margin-left: 36.645753773413354%;
  }
  .row-fluid .offset4:first-child {
    margin-left: 34.18803418803419%;
    *margin-left: 34.081651209310785%;
  }
  .row-fluid .offset3 {
    margin-left: 28.205128205128204%;
    *margin-left: 28.0987452264048%;
  }
  .row-fluid .offset3:first-child {
    margin-left: 25.641025641025642%;
    *margin-left: 25.53464266230224%;
  }
  .row-fluid .offset2 {
    margin-left: 19.65811965811966%;
    *margin-left: 19.551736679396257%;
  }
  .row-fluid .offset2:first-child {
    margin-left: 17.094017094017094%;
    *margin-left: 16.98763411529369%;
  }
  .row-fluid .offset1 {
    margin-left: 11.11111111111111%;
    *margin-left: 11.004728132387708%;
  }
  .row-fluid .offset1:first-child {
    margin-left: 8.547008547008547%;
    *margin-left: 8.440625568285142%;
  }
  input,
  textarea,
  .uneditable-input {
    margin-left: 0;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 30px;
  }
  input.span12,
  textarea.span12,
  .uneditable-input.span12 {
    width: 1156px;
  }
  input.span11,
  textarea.span11,
  .uneditable-input.span11 {
    width: 1056px;
  }
  input.span10,
  textarea.span10,
  .uneditable-input.span10 {
    width: 956px;
  }
  input.span9,
  textarea.span9,
  .uneditable-input.span9 {
    width: 856px;
  }
  input.span8,
  textarea.span8,
  .uneditable-input.span8 {
    width: 756px;
  }
  input.span7,
  textarea.span7,
  .uneditable-input.span7 {
    width: 656px;
  }
  input.span6,
  textarea.span6,
  .uneditable-input.span6 {
    width: 556px;
  }
  input.span5,
  textarea.span5,
  .uneditable-input.span5 {
    width: 456px;
  }
  input.span4,
  textarea.span4,
  .uneditable-input.span4 {
    width: 356px;
  }
  input.span3,
  textarea.span3,
  .uneditable-input.span3 {
    width: 256px;
  }
  input.span2,
  textarea.span2,
  .uneditable-input.span2 {
    width: 156px;
  }
  input.span1,
  textarea.span1,
  .uneditable-input.span1 {
    width: 56px;
  }
  .thumbnails {
    margin-left: -30px;
  }
  .thumbnails > li {
    margin-left: 30px;
  }
  .row-fluid .thumbnails {
    margin-left: 0;
  }
}
@media (max-width: 979px) {
  body {
    padding-top: 0;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    position: static;
  }
  .navbar-fixed-top {
    margin-bottom: 20px;
  }
  .navbar-fixed-bottom {
    margin-top: 20px;
  }
  .navbar-fixed-top .navbar-inner,
  .navbar-fixed-bottom .navbar-inner {
    padding: 5px;
  }
  .navbar .container {
    width: auto;
    padding: 0;
  }
  .navbar .brand {
    padding-left: 10px;
    padding-right: 10px;
    margin: 0 0 0 -5px;
  }
  .nav-collapse {
    clear: both;
  }
  .nav-collapse .nav {
    float: none;
    margin: 0 0 10px;
  }
  .nav-collapse .nav > li {
    float: none;
  }
  .nav-collapse .nav > li > a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > .divider-vertical {
    display: none;
  }
  .nav-collapse .nav .nav-header {
    color: #777777;
    text-shadow: none;
  }
  .nav-collapse .nav > li > a,
  .nav-collapse .dropdown-menu a {
    padding: 9px 15px;
    font-weight: bold;
    color: #777777;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }
  .nav-collapse .btn {
    padding: 4px 10px 4px;
    font-weight: normal;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .nav-collapse .dropdown-menu li + li a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > li > a:hover,
  .nav-collapse .nav > li > a:focus,
  .nav-collapse .dropdown-menu a:hover,
  .nav-collapse .dropdown-menu a:focus {
    background-color: #f2f2f2;
  }
  .navbar-inverse .nav-collapse .nav > li > a,
  .navbar-inverse .nav-collapse .dropdown-menu a {
    color: #999999;
  }
  .navbar-inverse .nav-collapse .nav > li > a:hover,
  .navbar-inverse .nav-collapse .nav > li > a:focus,
  .navbar-inverse .nav-collapse .dropdown-menu a:hover,
  .navbar-inverse .nav-collapse .dropdown-menu a:focus {
    background-color: #111111;
  }
  .nav-collapse.in .btn-group {
    margin-top: 5px;
    padding: 0;
  }
  .nav-collapse .dropdown-menu {
    position: static;
    top: auto;
    left: auto;
    float: none;
    display: none;
    max-width: none;
    margin: 0 15px;
    padding: 0;
    background-color: transparent;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .nav-collapse .open > .dropdown-menu {
    display: block;
  }
  .nav-collapse .dropdown-menu:before,
  .nav-collapse .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .dropdown-menu .divider {
    display: none;
  }
  .nav-collapse .nav > li > .dropdown-menu:before,
  .nav-collapse .nav > li > .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .navbar-form,
  .nav-collapse .navbar-search {
    float: none;
    padding: 10px 15px;
    margin: 10px 0;
    border-top: 1px solid #f2f2f2;
    border-bottom: 1px solid #f2f2f2;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
  }
  .navbar-inverse .nav-collapse .navbar-form,
  .navbar-inverse .nav-collapse .navbar-search {
    border-top-color: #111111;
    border-bottom-color: #111111;
  }
  .navbar .nav-collapse .nav.pull-right {
    float: none;
    margin-left: 0;
  }
  .nav-collapse,
  .nav-collapse.collapse {
    overflow: hidden;
    height: 0;
  }
  .navbar .btn-navbar {
    display: block;
  }
  .navbar-static .navbar-inner {
    padding-left: 10px;
    padding-right: 10px;
  }
}
@media (min-width: 979px + 1) {
  .nav-collapse.collapse {
    height: auto !important;
    overflow: visible !important;
  }
}
/* Joomla JUI NOTE: Original .modal definition has to be commented */
@media (max-width: 767px) {
  div.modal {
    position: fixed;
    top: 20px;
    left: 20px;
    right: 20px;
    width: auto;
    margin: 0;
  }
  div.modal.fade {
    top: -100px;
  }
  div.modal.fade.in {
    top: 20px;
  }
}
@media (max-width: 480px) {
  div.modal {
    top: 10px;
    left: 10px;
    right: 10px;
  }
}
/*********************************************************************************/
/* DESKTOP XL */
/*********************************************************************************/
@media only screen and (min-width: 1200px) {
  #mainmenu .navbar-inner ul.nav > li > a {
    padding-left: 14px;
    padding-right: 14px;
    font-size: 16px;
  }
}
/*********************************************************************************/
/* DESKTOP */
/*********************************************************************************/
@media only screen and (max-width: 1200px) {
  /* NORMALLY, THIS PART IS ALREADY DEFINED (WHEN RESPONSIVE IS DISABLED) */
}
/*********************************************************************************/
/* TABLET */
/*********************************************************************************/
@media only screen and (max-width: 979px) {
  #header #logo {
    padding-top: 10px;
    padding-bottom: 20px;
  }
  .row-fluid #sidebar.span3 {
    margin-left: 0;
    width: 100%;
  }
  .row-fluid #middlecol.span9 {
    width: 100%;
  }
  #slideshow .camera_caption > div {
    background: #000;
    background: rgba(0, 0, 0, 0.8);
    padding: 6px 0 7px!important;
  }
  #slideshow .camera_caption .camera_caption_title {
    font-size: 24px;
    line-height: 32px;
  }
  #slideshow .camera_caption .camera_caption_desc {
    font-size: 14px;
    line-height: 20px;
  }
  #slideshow .camera_pag {
    display: none;
  }
  #slideshow .camera_loader {
    width: 3.5em;
    height: 3.5em;
    margin: -3.5em 0 0 -3.5em;
  }
  #slideshow .camera_prev,
  #slideshow .camera_next {
    opacity: 1!important;
    -ms-transform: scale(0.75) !important;
    -webkit-transform: scale(0.75) !important;
    transform: scale(0.75) !important;
  }
  #showcase {
    background-position: center center!important;
  }
  #showcase #donate-mod h3 {
    font-size: 22px;
    line-height: 28px;
  }
  #showcase #it_tagline {
    padding: 0;
  }
  #showcase #it_tagline h3 {
    font-size: 30px;
    line-height: 38px;
    margin-bottom: 5px;
  }
  #showcase #it_tagline p {
    font-size: 14px;
    line-height: 22px;
  }
  #testimonials blockquote {
    width: 100%;
    padding: 0;
  }
  #testimonials blockquote:before,
  #testimonials blockquote:after {
    display: none;
  }
  #testimonials .testimonials_author {
    padding-top: 25px;
    clear: both;
    float: none;
    text-align: center;
    width: 100%;
  }
  .row-fluid .span6 #contact-form.form-horizontal .controls {
    display: block;
    margin-left: 0;
  }
  .row-fluid .span6 #contact-form.form-horizontal .control-label {
    float: none;
    width: auto;
    text-align: left;
  }
  ul#jj_sl_navigation {
    display: none;
  }
}
/*********************************************************************************/
/* PHONE */
/*********************************************************************************/
@media only screen and (max-width: 767px) {
  #topbar,
  #showcase,
  #footer:before {
    margin-left: -20px;
    padding-left: 20px;
    margin-right: -20px;
    padding-right: 20px;
  }
  #main_wrapper:before {
    padding-right: 20px;
  }
  #slideshow {
    background: #f1f2eb;
    margin-left: -20px;
    margin-right: -20px;
    margin-bottom: 30px;
  }
  #slideshow .slideshowck {
    min-height: 200px;
  }
  #slideshow .camera_caption > div {
    padding: 5px 10px 5px!important;
  }
  #slideshow .camera_caption .camera_caption_title {
    font-size: 20px;
    line-height: 24px;
  }
  #slideshow .camera_caption .camera_caption_desc {
    display: none;
  }
  #slideshow .camera_prev,
  #slideshow .camera_next {
    top: 28%;
  }
  #content #middlecol + #sidebar {
    padding-top: 30px;
    clear: both;
  }
  .blog .item-image.pull-left,
  .blog-featured .item-image.pull-left {
    float: none;
    margin-right: 0;
  }
  .moduletable {
    margin-bottom: 25px!important;
  }
  #main_wrapper {
    padding-bottom: 0;
  }
  #gotop .scrollup {
    position: relative;
    width: auto;
    border-radius: 0;
    display: block;
    margin: 0;
    left: 0;
    bottom: 0!important;
  }
  #gotop .scrollup:after {
    width: 100%;
  }
  .ice_preload .spinner {
    margin-top: 120px;
  }
  .nav-collapse {
    -webkit-transform: none;
  }
  body .blog .item-image.pull-left,
  body blog-featured .item-image.pull-left,
  body .blog .item-image.pull-right,
  body blog-featured .item-image.pull-right {
    float: none;
    text-align: center;
    margin-left: 0;
    margin-right: 0;
    display: inline-block;
  }
  .page-header {
    clear: both;
  }
  blockquote {
    padding: 0;
    font-size: 20px;
    line-height: 34px;
  }
  blockquote:before,
  blockquote:after {
    display: none;
  }
}";}