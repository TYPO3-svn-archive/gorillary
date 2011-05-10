<?php

########################################################################
# Extension Manager/Repository config file for ext "gorillary".
#
# Auto generated 23-12-2010 14:45
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Gorillary',
	'description' => 'Is an image gallery extension with highly customizable rendering and easy to use backend. Preconfigurations for jQuery colorbox, cycle and galleriffic already exist.',
	'category' => 'fe',
	'author' => 'Stephan Petzl',
	'author_email' => 'stephan.petzl@ajado.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.2.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:138:{s:9:"ChangeLog";s:4:"5374";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"5caf";s:17:"ext_localconf.php";s:4:"7250";s:14:"ext_tables.php";s:4:"c18e";s:14:"ext_tables.sql";s:4:"ed2c";s:15:"flexform_ds.xml";s:4:"49bd";s:13:"locallang.xml";s:4:"a519";s:16:"locallang_db.xml";s:4:"f349";s:7:"tca.php";s:4:"a34f";s:17:"css/gorillary.css";s:4:"91dc";s:14:"doc/manual.sxw";s:4:"9b53";s:49:"hooks/class.tx_gorillary_collection_save_hook.php";s:4:"27b2";s:49:"hooks/class.tx_gorillary_feedimport_save_hook.php";s:4:"5089";s:47:"hooks/class.tx_gorillary_tceformsInlineHook.php";s:4:"540d";s:26:"images/face-monkey-big.png";s:4:"4aa8";s:22:"images/face-monkey.gif";s:4:"5caf";s:22:"images/face-monkey.png";s:4:"a413";s:22:"images/image-stack.png";s:4:"8159";s:16:"images/image.png";s:4:"0ed0";s:17:"images/loader.gif";s:4:"a51c";s:20:"images/loader_bg.png";s:4:"8bd1";s:23:"images/media-import.png";s:4:"f8c1";s:31:"js/gorillary.jquery.colorbox.js";s:4:"8e67";s:28:"js/gorillary.jquery.cycle.js";s:4:"9585";s:34:"js/gorillary.jquery.galleriffic.js";s:4:"d020";s:22:"js/jquery-1.3.2.min.js";s:4:"7d91";s:18:"js/colorbox/README";s:4:"5cea";s:23:"js/colorbox/colorbox.ai";s:4:"0ed6";s:43:"js/colorbox/colorbox/jquery.colorbox-min.js";s:4:"bdad";s:39:"js/colorbox/colorbox/jquery.colorbox.js";s:4:"2a5f";s:29:"js/colorbox/content/ajax.html";s:4:"b6e9";s:30:"js/colorbox/content/flash.html";s:4:"8481";s:29:"js/colorbox/content/homer.jpg";s:4:"ebab";s:31:"js/colorbox/content/marylou.jpg";s:4:"4883";s:32:"js/colorbox/content/ohoopee1.jpg";s:4:"3586";s:32:"js/colorbox/content/ohoopee2.jpg";s:4:"d108";s:32:"js/colorbox/content/ohoopee3.jpg";s:4:"567a";s:33:"js/colorbox/example1/colorbox.css";s:4:"02b9";s:31:"js/colorbox/example1/index.html";s:4:"cbff";s:38:"js/colorbox/example1/images/border.png";s:4:"7ca8";s:40:"js/colorbox/example1/images/controls.png";s:4:"e687";s:39:"js/colorbox/example1/images/loading.gif";s:4:"e661";s:50:"js/colorbox/example1/images/loading_background.png";s:4:"acf4";s:39:"js/colorbox/example1/images/overlay.png";s:4:"7903";s:68:"js/colorbox/example1/images/internet_explorer/borderBottomCenter.png";s:4:"1936";s:66:"js/colorbox/example1/images/internet_explorer/borderBottomLeft.png";s:4:"7cee";s:67:"js/colorbox/example1/images/internet_explorer/borderBottomRight.png";s:4:"297f";s:66:"js/colorbox/example1/images/internet_explorer/borderMiddleLeft.png";s:4:"64df";s:67:"js/colorbox/example1/images/internet_explorer/borderMiddleRight.png";s:4:"9fa4";s:65:"js/colorbox/example1/images/internet_explorer/borderTopCenter.png";s:4:"01ec";s:63:"js/colorbox/example1/images/internet_explorer/borderTopLeft.png";s:4:"bf49";s:64:"js/colorbox/example1/images/internet_explorer/borderTopRight.png";s:4:"5131";s:33:"js/colorbox/example2/colorbox.css";s:4:"647b";s:31:"js/colorbox/example2/index.html";s:4:"cbff";s:40:"js/colorbox/example2/images/controls.png";s:4:"e9bd";s:39:"js/colorbox/example2/images/loading.gif";s:4:"8732";s:33:"js/colorbox/example3/colorbox.css";s:4:"66a3";s:31:"js/colorbox/example3/index.html";s:4:"cbff";s:40:"js/colorbox/example3/images/controls.png";s:4:"2615";s:39:"js/colorbox/example3/images/loading.gif";s:4:"8732";s:33:"js/colorbox/example4/colorbox.css";s:4:"def7";s:31:"js/colorbox/example4/index.html";s:4:"cbff";s:39:"js/colorbox/example4/images/border1.png";s:4:"c079";s:39:"js/colorbox/example4/images/border2.png";s:4:"680e";s:39:"js/colorbox/example4/images/loading.gif";s:4:"b5e2";s:68:"js/colorbox/example4/images/internet_explorer/borderBottomCenter.png";s:4:"3f90";s:66:"js/colorbox/example4/images/internet_explorer/borderBottomLeft.png";s:4:"3262";s:67:"js/colorbox/example4/images/internet_explorer/borderBottomRight.png";s:4:"a5f6";s:66:"js/colorbox/example4/images/internet_explorer/borderMiddleLeft.png";s:4:"3521";s:67:"js/colorbox/example4/images/internet_explorer/borderMiddleRight.png";s:4:"7409";s:65:"js/colorbox/example4/images/internet_explorer/borderTopCenter.png";s:4:"8053";s:63:"js/colorbox/example4/images/internet_explorer/borderTopLeft.png";s:4:"8e9e";s:64:"js/colorbox/example4/images/internet_explorer/borderTopRight.png";s:4:"97c3";s:33:"js/colorbox/example5/colorbox.css";s:4:"96d8";s:31:"js/colorbox/example5/index.html";s:4:"cbff";s:38:"js/colorbox/example5/images/border.png";s:4:"84ac";s:40:"js/colorbox/example5/images/controls.png";s:4:"5aec";s:39:"js/colorbox/example5/images/loading.gif";s:4:"e661";s:50:"js/colorbox/example5/images/loading_background.png";s:4:"7c96";s:33:"js/galleriffic-2.0/example-1.html";s:4:"1d0a";s:33:"js/galleriffic-2.0/example-2.html";s:4:"9a5a";s:33:"js/galleriffic-2.0/example-3.html";s:4:"4a05";s:33:"js/galleriffic-2.0/example-4.html";s:4:"82f3";s:33:"js/galleriffic-2.0/example-5.html";s:4:"3d46";s:29:"js/galleriffic-2.0/index.html";s:4:"741e";s:32:"js/galleriffic-2.0/css/basic.css";s:4:"3c8d";s:32:"js/galleriffic-2.0/css/black.css";s:4:"fbbe";s:34:"js/galleriffic-2.0/css/caption.png";s:4:"664f";s:40:"js/galleriffic-2.0/css/galleriffic-1.css";s:4:"fd38";s:40:"js/galleriffic-2.0/css/galleriffic-2.css";s:4:"bd90";s:40:"js/galleriffic-2.0/css/galleriffic-3.css";s:4:"c96c";s:40:"js/galleriffic-2.0/css/galleriffic-4.css";s:4:"9d6e";s:40:"js/galleriffic-2.0/css/galleriffic-5.css";s:4:"5749";s:31:"js/galleriffic-2.0/css/jush.css";s:4:"0d29";s:33:"js/galleriffic-2.0/css/loader.gif";s:4:"9c39";s:38:"js/galleriffic-2.0/css/loaderWhite.gif";s:4:"3573";s:40:"js/galleriffic-2.0/css/nextPageArrow.gif";s:4:"03c2";s:45:"js/galleriffic-2.0/css/nextPageArrowWhite.gif";s:4:"a8ce";s:40:"js/galleriffic-2.0/css/prevPageArrow.gif";s:4:"5bb6";s:45:"js/galleriffic-2.0/css/prevPageArrowWhite.gif";s:4:"812b";s:32:"js/galleriffic-2.0/css/white.css";s:4:"0430";s:37:"js/galleriffic-2.0/js/jquery-1.3.2.js";s:4:"e4af";s:43:"js/galleriffic-2.0/js/jquery.galleriffic.js";s:4:"37eb";s:39:"js/galleriffic-2.0/js/jquery.history.js";s:4:"737f";s:47:"js/galleriffic-2.0/js/jquery.opacityrollover.js";s:4:"b3aa";s:29:"js/galleriffic-2.0/js/jush.js";s:4:"199e";s:28:"js/jquery.cycle/example.html";s:4:"ba64";s:39:"js/jquery.cycle/jquery.cycle.all.min.js";s:4:"c36e";s:40:"js/jquery.cycle/jquery.cycle.lite.min.js";s:4:"b2d6";s:35:"js/jquery.cycle/jquery.cycle.min.js";s:4:"97b0";s:26:"js/jquery.cycle/readme.txt";s:4:"6182";s:39:"js/jquery.cycle/src/jquery.cycle.all.js";s:4:"3150";s:35:"js/jquery.cycle/src/jquery.cycle.js";s:4:"aa86";s:40:"js/jquery.cycle/src/jquery.cycle.lite.js";s:4:"e04c";s:29:"lib/class.user_imagefield.php";s:4:"0acf";s:30:"pi1/class.tx_gorillary_pi1.php";s:4:"4c9b";s:38:"pi1/class.tx_gorillary_pi1_wizicon.php";s:4:"de17";s:17:"pi1/locallang.xml";s:4:"0b15";s:15:"pi1/wizicon.png";s:4:"a841";s:30:"pi2/class.tx_gorillary_pi2.php";s:4:"3cf0";s:38:"pi2/class.tx_gorillary_pi2_wizicon.php";s:4:"d662";s:17:"pi2/locallang.xml";s:4:"0b15";s:15:"pi2/wizicon.png";s:4:"0cb5";s:51:"static/gorillary_direct_link_to_image/constants.txt";s:4:"d41d";s:47:"static/gorillary_direct_link_to_image/setup.txt";s:4:"2d8b";s:60:"static/gorillary_gallery_default_configuration/constants.txt";s:4:"d41d";s:56:"static/gorillary_gallery_default_configuration/setup.txt";s:4:"d741";s:37:"static/gorillary_jquery/constants.txt";s:4:"d41d";s:33:"static/gorillary_jquery/setup.txt";s:4:"8ba8";s:46:"static/gorillary_jquery_colorbox/constants.txt";s:4:"d41d";s:45:"static/gorillary_jquery_colorbox/newhtml.html";s:4:"adcb";s:42:"static/gorillary_jquery_colorbox/setup.txt";s:4:"7127";s:43:"static/gorillary_jquery_cycle/constants.txt";s:4:"d41d";s:39:"static/gorillary_jquery_cycle/setup.txt";s:4:"3e55";s:49:"static/gorillary_jquery_galleriffic/constants.txt";s:4:"d41d";s:48:"static/gorillary_jquery_galleriffic/newhtml.html";s:4:"adcb";s:45:"static/gorillary_jquery_galleriffic/setup.txt";s:4:"1fb9";}',
	'suggests' => array(
	),
);

?>