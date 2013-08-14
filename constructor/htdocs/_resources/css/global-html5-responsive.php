<?php 
	include('../inc/compiler-variables.php');
	header("Content-type: text/css"); 
	$maxWidth = $_GET['maxWidth'];
?>
/*
Theme Name: CLIENT NAME
Description: global.css contains a reset, font normalization and some base styles.
Author: ISITE Design, Inc
Author URL: http://www.isitedesign.com
--------------------------------------------------------------------------------------  
1.ROOT
2.HEADINGS
3.TYPOGRAPHY
4.LINKS
5.FIGURES & IMAGES
6.TABLES
7.FORMS
8.BANNER header[role="banner"]
9.NAVIGATION nav[role="navigation"]
10.CONTENT
11.MAIN [role="main"]
12.COMPLIMENTARY [role="complementary"]
13.CONTENTINFO footer[role="contentinfo"]
14.GLOBAL OBJECTS
15.VENDOR-SPECIFIC 
16.TEMPLATE SPECIFICS
17.MODERNIZR
*/

/* Basic browser reset */
body,div,h1,h2,h3,h4,h5,h6,p,ul,ol,li,dl,dd,dt,blockquote,fieldset,legend,form { margin:0;padding:0;border:0; }
html,input,textarea,select { font-size: 100% } /* keep ie happy */

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display:block; } 

/* temp for layout purposes*/
section, header, footer, nav	{ background-color: rgba(200,200,200, .4); border: 1px solid #aaa; border-width: 1px 0px;} 
body 	{ background: url(../img/css/grid.gif) center 0 repeat-y; color:#3A3A3A; }
.wrapper	{border-right: 1px solid #ccc;}
.secondary, .tertiary	{ background-color: rgba(180,180,180, .4);} 
/* end temp for layout purposes*/


/* 1.ROOT */
body 					{ font: 100%/1.335 Arial, Helvetica, sans-serif; }

/* 2.HEADINGS */
h1, h2, h3, h4, h5, h6	{ font-weight: normal; margin: 0 0 .25em 0;}

h1	{ font-size: 1.5rem; } 	/* 24 / 16 */
h2	{ font-size: 1.25rem; }  /* 20 / 16 */
h3	{ font-size: 1.0625rem; }/* 17 / 16 */
h4	{ font-size: .9375rem; } /* 15 / 16 */
h5	{ font-size: .75rem; } 	/* 12 / 16 */
h6	{ font-size: .6875rem; } /* 11 / 16 */

/* 3.TYPOGRAPHY */
p				{ margin-bottom: 1rem; }
abbr,acronym	{ border-bottom: 1px dotted #999; cursor: help; }
ul, ol 			{ margin: 0 0 1rem 0; }
blockquote {
	border-top: 0.1em solid;
	border-bottom: 0.1em solid;
	padding: 0 1em;
	font-style: italic;
	font-size: 1.25rem;
	line-height: 1.5;
	letter-spacing: 0.05em;
	color: #888;
	border-color: #ccc;
	border-color: rgba(0,0,0,0.2);
}
blockquote p { margin:1.25em 0;}
blockquote em {
	font-style: normal;
}

/* 4.LINKS */
a, a:visited		{ color: #00f; }
a:hover, a:focus 	{ color: #999; }

a.brand { display: block;}
	a.brand img {border:none;}
	
/* 5.FIGURES & IMAGES */
img 			{max-width:100%;}
figure.right 	{margin:0 0 1em .5em;}
figcaption 		{font-style:italic;}

/* 6.TABLES */
table			{ border-collapse: collapse; font-size:.8125rem; margin-bottom:1.5em;}
th, td		{ border: 1px solid rgb(204,204,204); padding: .5em; text-align:left;  }
tbody td 	{ border-width:0 1px;}
tbody tr.odd{background:rgb(240,240,240);}
tr.last td 	{border-bottom: 1px solid rgb(204,204,204);}

/* 7.FORMS */
fieldset ol, fieldset ol ul {
	list-style-type: none;
	margin: 0;
}
fieldset li {
    margin-bottom: 1em;
}
input, select, textarea, label, button {
    display: block;
}
label input {
	display: inline;
}
.wrapper input[type=hidden] {
    display: none;	
}
button, .button, [type="button"] {
	background:rgb(251,251,251);
	border:1px solid rgb(202,207,211);
	color:rgb(0,124,225);
    cursor: pointer;
	font-size:.875rem;	
	font-weight:bold;
	margin:0;
	padding:.5em 1em;
}
button:hover, .button:hover,[type="button"]:hover {background:rgb(240,241,242);}


	
/* 8.BANNER */	
[role="banner"] { padding:.5em 0;}
#search input, #search button { display:inline-block; line-height:2.25;}
#search input {padding:0 .35em;}
#search button {padding:.45em .75em .15em;}

/* 9.NAVIGATION */
nav[role=navigation] {
	margin:.5em 0;
	padding:.5em 0;
	width:100%;
}
nav ul {margin:0;}

	nav, .meta {
		list-style-type: none;
		margin: 0;
		overflow: hidden;
		padding: 0;
	}
	
		nav a, nav li, .meta li {
			display: block;
			padding: 0 1em;
			text-decoration: none;
			width: auto;
		}


/* 10.CONTENT */
#content {
	border: none;
}
/* 11.MAIN (.primary) */
.primary {}

/* 12.COMPLEMENTARY (.secondary) */
.secondary {}

.tertiary {}

aside {
	background:#E3E3E3;
	clear:both;
	padding:1em;
}
	aside:hover {background:#ccc;}

/* 13.CONTENTINFO */
footer[role="contentinfo"] { 
	clear: both; 
}

/* 14.GLOBAL OBJECTS */
.wrapper {
	margin: auto;
	position: relative;
	width:<?php echo $maxWidth;?>;
}

.accessibility { height:0;left:-9999em;line-height:0;position:absolute;text-indent:-9999em; }
.column {
    display:inline-block;
	margin-right: 2%;
	width: 45%;
}

.box {
	background: rgb(222,222,222); /* Old browsers */
}
.box .content {background:rgb(255,255,255); margin:0 1px;}

.small 			{ width: 25%; }
.medium 		{ width: 48%; }
.large 			{ width: 90%; }
.error, .red 	{ color: red; }


/* there's always a better way than using these. */
.hide			{ display: none; }
.left 			{ float: left; margin: 10px 5px 10px 0; }
* html .left 	{ margin-right: 0; }
.right 			{ float: right; }
.clear 			{ clear: both; }
.clearleft 		{ clear: left; }
.clearright 	{ clear: right; }

/* self-clear floats */
.group:before,
.group:after,
[role="banner"]:before,
[role="banner"]:after {
	clear: both; 
	content: "."; 
	display: block; 
	height: 0; 
	visibility: hidden;
}

*:first-child+html .group {
	min-height: 1px;
}


/* 15.VENDOR-SPECIFIC */
body {
-webkit-text-size-adjust : 100%; 
-ms-text-size-adjust : 100%; }

a:link { 
-webkit-tap-highlight-color : rgb(52,158,219); }

::-webkit-selection { 
background : rgb(39,46,54); 
color : rgb(250,250,250); 
text-shadow : none; }

::-moz-selection { 
background : rgb(39,46,54); 
color : rgb(250,250,250); 
text-shadow : none; }

::selection { 
background : rgb(39,46,54); 
color : rgb(250,250,250); 
text-shadow : none; }

::-webkit-input-placeholder {
padding : 10px;
font-size : .875rem; 
line-height : 1.4; }

/* Remove inner padding and border in FF3/4 h5bp.com/l */
button::-moz-focus-inner, input::-moz-focus-inner { 
border: 0; 
padding: 0; }

input:-moz-placeholder { 
padding : 10px;
font-size : .875rem; 
line-height : 1.4; }

.ie7 img,
.iem7 img { 
-ms-interpolation-mode : bicubic; }

div,
input,
textarea  { 
-webkit-box-sizing : border-box;
-moz-box-sizing : border-box;
-o-box-sizing : border-box;
box-sizing : border-box; }

/* 16.TEMPLATE SPECIFICS */
.full .primary {
	display:block;
	float:none;
	margin:0;
	padding:2%;
	width:96%;	
}

div.group + div.group {padding-top:1.5em;}

/* 17.MODERNIZR */
/* BORDERRADIUS */
.borderradius aside {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	border-radius: 5px;
}

/* GRADIENTS */
.cssgradients aside {
	background-image:-moz-linear-gradient(100% 59% 90deg,#E3E3E3, #ffffff);
	background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#E3E3E3));
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f1f1f1', endColorstr='#E3E3E3');

}

	.cssgradients aside:hover {
		background-image:-moz-linear-gradient(100% 59% 90deg,#CCCCCC, #FFFFFF);
		background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#CCCCCC));
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f1f1f1', endColorstr='#cccccc');
	}

.cssgradients .box {	
	background: -moz-linear-gradient(top, rgb(222,222,222) 0%, rgb(255,255,255) 68%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(222,222,222)), color-stop(68%,rgb(255,255,255))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgb(222,222,222) 0%,rgb(255,255,255) 68%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgb(222,222,222) 0%,rgb(255,255,255) 68%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgb(222,222,222) 0%,rgb(255,255,255) 68%); /* IE10+ */
	background: linear-gradient(top, rgb(222,222,222) 0%,rgb(255,255,255) 68%); /* W3C */
}
.no-cssgradients .box {	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dedede', endColorstr='#ffffff',GradientType=0 ); /* IE6-8 */}

.csstransitions a { 
	-webkit-transition : color .2s linear;
	-moz-transition : color .2s linear;
	-o-transition : color .2s linear;
	transition : color .2s linear; 
}
/* No alternative required */

@media print {
* { 
background : transparent !important; 
color : black !important; 
text-shadow : none !important; 
filter : none !important;
-ms-filter : none !important; } 

a, a:visited { 
color : #444 !important; 
text-decoration : underline; }

/*a[href]:after { 
content : " (" attr(href) ")"; }*/

abbr[title]:after { 
content : " (" attr(title) ")"; }

a[href^="javascript:"]:after, 
a[href^="#"]:after { 
content : ""; }
  
pre, blockquote { 
border : 1px solid #999; 
page-break-inside : avoid; }

thead { 
display : table-header-group; }

tr, img { 
page-break-inside : avoid; }

@page { 
margin : .5cm; }

p, h2, h3 { 
orphans : 3; 
widows : 3; }

h2, h3 { 
page-break-after : avoid; }
}/*/mediaquery*/

/* MEDIA QUERIES */

/*480px __________________________________________________________________________________________________________ */
@media only screen and (min-width: 480px) {

/* 1.ROOT */
/* 2.HEADINGS */
/* 3.TYPOGRAPHY */
/* 4.LINKS */
/* 5.FIGURES & IMAGES */
/* 6.TABLES */
/* 7.FORMS */
/* 8.BANNER */
.brand {float:left;}
#search {float:right;}
/* 9.NAVIGATION */
nav a, nav li, .meta li {	float: left;}
/* 10.CONTENT */
/* 11.MAIN */
/* 12.COMPLIMENTARY */
/* 13.CONTENTINFO */
/* 14.GLOBAL OBJECTS */
/* 15.VENDOR-SPECIFIC */
/* 16.TEMPLATE SPECIFICS */

/* 17.MODERNIZR */

}/*/mediaquery*/

/*768px __________________________________________________________________________________________________________ */
@media only screen and (min-width: 768px) {

/* 1.ROOT */
/* 2.HEADINGS */
/* 3.TYPOGRAPHY */
/* 4.LINKS */
/* 5.FIGURES & IMAGES */
/* 6.TABLES */
/* 7.FORMS */
/* 8.BANNER */
/* 9.NAVIGATION */
/* 10.CONTENT */

/* 11.MAIN */
.primary {
	display: inline;
	float: left;
    margin-left: 25%; /* 240 / 960 */
	width: 54.16666666666667%; /* 520 / 960 */
}
*[role="main"] p {
line-height : 1.3; }

/* 12.COMPLIMENTARY */
.secondary {
	display: inline;
	float: left;
	margin-left: -79.16666666666667%; /* -760 / 960 */
	width: 22.91666666666667%; /* 220 / 960 */
}

.tertiary {
    float: right;
	margin-left: 0.0208333333333333%; /* 20 / 960 */
	width: 18.75%; /* 180 / 960*/
}

/* 13.CONTENTINFO */
footer[role="contentinfo"] {
padding-bottom : 1.5em; 
font-size : 90%; }

/* 14.GLOBAL OBJECTS */
.wrapper {
	max-width: 960px;
}
/* 15.VENDOR-SPECIFIC */
/* 16.TEMPLATE SPECIFICS */
/* 17.MODERNIZR */

}/*/mediaquery*/

/*992px __________________________________________________________________________________________________________ */
@media only screen and (min-width: 992px) {

/* 1.ROOT */

body { }

/* 2.HEADINGS */
/* 3.TYPOGRAPHY */
/* 4.LINKS */
/* 5.FIGURES & IMAGES */
/* 6.TABLES */
/* 7.FORMS */

/* 8.BANNER */

header[role="banner"] { }

/* 9.NAVIGATION */
/* 10.CONTENT */
/* 11.MAIN */
*[role="main"] { }

*[role="main"] p {
line-height : 1.4; }

/* 12.COMPLIMENTARY */

*[role="complementary"] {
overflow : hidden; }

/* 13.CONTENTINFO */
/* 14.GLOBAL OBJECTS */
/* 15.VENDOR-SPECIFIC */
/* 16.TEMPLATE SPECIFICS */
/* 17.MODERNIZR */

}/*/mediaquery*/

/*1382px __________________________________________________________________________________________________________ */
@media only screen and (min-width: 1382px) {

/* 1.ROOT */
/* 2.HEADINGS */
/* 3.TYPOGRAPHY */
/* 4.LINKS */
/* 5.FIGURES & IMAGES */
/* 6.TABLES */
/* 7.FORMS */
/* 8.BANNER */
/* 9.NAVIGATION */
/* 10.CONTENT */
/* 11.MAIN */
/* 12.COMPLIMENTARY */
/* 13.CONTENTINFO */
/* 14.GLOBAL OBJECTS */
.wrapper {
	max-width: 960px;
}
/* 15.VENDOR-SPECIFIC */
header[role="banner"],
footer[role="contentinfo"] {
-webkit-box-sizing : border-box;
-moz-box-sizing : border-box;
-o-box-sizing : border-box;
box-sizing : border-box; }

/* 16.TEMPLATE SPECIFICS */
/* 17.MODERNIZR */

}/*/mediaquery*/

/*2x __________________________________________________________________________________________________________ */
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2) {

/* 1.ROOT */
/* 2.HEADINGS */
/* 3.TYPOGRAPHY */
/* 4.LINKS */
/* 5.FIGURES & IMAGES */
/* 6.TABLES */
/* 7.FORMS */
/* 8.BANNER */
/* 9.NAVIGATION */
/* 10.CONTENT */
/* 11.MAIN */
/* 12.COMPLIMENTARY */
/* 13.CONTENTINFO */
/* 14.GLOBAL OBJECTS */
/* 15.VENDOR-SPECIFIC */
/* 16.TEMPLATE SPECIFICS */
/* 17.MODERNIZR */

}/*/mediaquery*/


/*
Sources:
html5doctor.com Reset Stylesheet (Eric Meyer's Reset Reloaded + HTML5 baseline)
v1.4 2009-07-27 | Authors: Eric Meyer & Richard Clark
html5doctor.com/html-5-reset-stylesheet/
CSS organization takes "320 and Up" approach http://stuffandnonsense.co.uk/projects/320andup/
*/