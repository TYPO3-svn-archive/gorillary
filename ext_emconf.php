<?php

########################################################################
# Extension Manager/Repository config file for ext "gorillary".
#
# Auto generated 09-12-2010 10:59
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Gorillary',
	'description' => 'Is an image gallery extension which makes use of TYPO3\'s Inline Relational Record Editing feature.
You can select files an add meta info to each file. You can create galleries on pages, each of them having several media collections, which themself consist of several images with meta data.',
	'category' => 'fe',
	'author' => 'Stephan Petzl',
	'author_email' => 'stephan.petzl@ajado.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:81:{s:9:"ChangeLog";s:4:"5374";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"5caf";s:17:"ext_localconf.php";s:4:"7250";s:14:"ext_tables.php";s:4:"a108";s:14:"ext_tables.sql";s:4:"ed2c";s:15:"flexform_ds.xml";s:4:"49bd";s:13:"locallang.xml";s:4:"a519";s:16:"locallang_db.xml";s:4:"f349";s:7:"tca.php";s:4:"a34f";s:17:"css/gorillary.css";s:4:"91dc";s:14:"doc/manual.sxw";s:4:"0bf0";s:49:"hooks/class.tx_gorillary_collection_save_hook.php";s:4:"27b2";s:49:"hooks/class.tx_gorillary_feedimport_save_hook.php";s:4:"5089";s:47:"hooks/class.tx_gorillary_tceformsInlineHook.php";s:4:"91d7";s:26:"images/face-monkey-big.png";s:4:"4aa8";s:22:"images/face-monkey.gif";s:4:"5caf";s:22:"images/face-monkey.png";s:4:"a413";s:22:"images/image-stack.png";s:4:"8159";s:16:"images/image.png";s:4:"0ed0";s:17:"images/loader.gif";s:4:"a51c";s:20:"images/loader_bg.png";s:4:"8bd1";s:23:"images/media-import.png";s:4:"f8c1";s:28:"js/gorillary.jquery.cycle.js";s:4:"8045";s:34:"js/gorillary.jquery.galleriffic.js";s:4:"d020";s:22:"js/jquery-1.3.2.min.js";s:4:"7d91";s:33:"js/galleriffic-2.0/example-1.html";s:4:"1d0a";s:33:"js/galleriffic-2.0/example-2.html";s:4:"9a5a";s:33:"js/galleriffic-2.0/example-3.html";s:4:"4a05";s:33:"js/galleriffic-2.0/example-4.html";s:4:"82f3";s:33:"js/galleriffic-2.0/example-5.html";s:4:"3d46";s:29:"js/galleriffic-2.0/index.html";s:4:"741e";s:32:"js/galleriffic-2.0/css/basic.css";s:4:"3c8d";s:32:"js/galleriffic-2.0/css/black.css";s:4:"fbbe";s:34:"js/galleriffic-2.0/css/caption.png";s:4:"664f";s:40:"js/galleriffic-2.0/css/galleriffic-1.css";s:4:"fd38";s:40:"js/galleriffic-2.0/css/galleriffic-2.css";s:4:"bd90";s:40:"js/galleriffic-2.0/css/galleriffic-3.css";s:4:"c96c";s:40:"js/galleriffic-2.0/css/galleriffic-4.css";s:4:"9d6e";s:40:"js/galleriffic-2.0/css/galleriffic-5.css";s:4:"5749";s:31:"js/galleriffic-2.0/css/jush.css";s:4:"0d29";s:33:"js/galleriffic-2.0/css/loader.gif";s:4:"9c39";s:38:"js/galleriffic-2.0/css/loaderWhite.gif";s:4:"3573";s:40:"js/galleriffic-2.0/css/nextPageArrow.gif";s:4:"03c2";s:45:"js/galleriffic-2.0/css/nextPageArrowWhite.gif";s:4:"a8ce";s:40:"js/galleriffic-2.0/css/prevPageArrow.gif";s:4:"5bb6";s:45:"js/galleriffic-2.0/css/prevPageArrowWhite.gif";s:4:"812b";s:32:"js/galleriffic-2.0/css/white.css";s:4:"0430";s:37:"js/galleriffic-2.0/js/jquery-1.3.2.js";s:4:"e4af";s:43:"js/galleriffic-2.0/js/jquery.galleriffic.js";s:4:"37eb";s:39:"js/galleriffic-2.0/js/jquery.history.js";s:4:"737f";s:47:"js/galleriffic-2.0/js/jquery.opacityrollover.js";s:4:"b3aa";s:29:"js/galleriffic-2.0/js/jush.js";s:4:"199e";s:28:"js/jquery.cycle/example.html";s:4:"ba64";s:39:"js/jquery.cycle/jquery.cycle.all.min.js";s:4:"c36e";s:40:"js/jquery.cycle/jquery.cycle.lite.min.js";s:4:"b2d6";s:35:"js/jquery.cycle/jquery.cycle.min.js";s:4:"97b0";s:26:"js/jquery.cycle/readme.txt";s:4:"6182";s:39:"js/jquery.cycle/src/jquery.cycle.all.js";s:4:"3150";s:35:"js/jquery.cycle/src/jquery.cycle.js";s:4:"aa86";s:40:"js/jquery.cycle/src/jquery.cycle.lite.js";s:4:"e04c";s:29:"lib/class.user_imagefield.php";s:4:"0acf";s:30:"pi1/class.tx_gorillary_pi1.php";s:4:"7a9b";s:38:"pi1/class.tx_gorillary_pi1_wizicon.php";s:4:"de17";s:17:"pi1/locallang.xml";s:4:"0b15";s:15:"pi1/wizicon.png";s:4:"a841";s:30:"pi2/class.tx_gorillary_pi2.php";s:4:"3cf0";s:38:"pi2/class.tx_gorillary_pi2_wizicon.php";s:4:"d662";s:17:"pi2/locallang.xml";s:4:"0b15";s:15:"pi2/wizicon.png";s:4:"0cb5";s:51:"static/gorillary_direct_link_to_image/constants.txt";s:4:"d41d";s:47:"static/gorillary_direct_link_to_image/setup.txt";s:4:"2d8b";s:60:"static/gorillary_gallery_default_configuration/constants.txt";s:4:"d41d";s:56:"static/gorillary_gallery_default_configuration/setup.txt";s:4:"f9a2";s:37:"static/gorillary_jquery/constants.txt";s:4:"d41d";s:33:"static/gorillary_jquery/setup.txt";s:4:"42cc";s:43:"static/gorillary_jquery_cycle/constants.txt";s:4:"d41d";s:39:"static/gorillary_jquery_cycle/setup.txt";s:4:"cc00";s:49:"static/gorillary_jquery_galleriffic/constants.txt";s:4:"d41d";s:48:"static/gorillary_jquery_galleriffic/newhtml.html";s:4:"adcb";s:45:"static/gorillary_jquery_galleriffic/setup.txt";s:4:"9746";}',
	'suggests' => array(
	),
);

?>