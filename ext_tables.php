<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::allowTableOnStandardPages("tx_gorillary_feedimports");

$TCA['tx_gorillary_feedimports'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:gorillary/locallang_db.xml:tx_gorillary_feedimports',
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',
		'transOrigPointerField'    => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_gorillary_collections.gif',
	),
);

t3lib_extMgm::allowTableOnStandardPages("tx_gorillary_collections");

$TCA['tx_gorillary_collections'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:gorillary/locallang_db.xml:tx_gorillary_collections',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l10n_parent',	
		'transOrigDiffSourceField' => 'l10n_diffsource',	
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_gorillary_collections.gif',
	),
);

t3lib_extMgm::allowTableOnStandardPages("tx_gorillary_images");
$TCA['tx_gorillary_images'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:gorillary/locallang_db.xml:tx_gorillary_images',		
		'label'     => 'title',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_gorillary_images.gif',
	),
);


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1']='pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY.'_pi1', 'FILE:EXT:'.$_EXTKEY.'/flexform_ds.xml');

t3lib_extMgm::addPlugin(array(
	'LLL:EXT:gorillary/locallang_db.xml:tt_content.list_type_pi1',
	$_EXTKEY . '_pi1',
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');



t3lib_extMgm::addStaticFile($_EXTKEY,'static/gorillary_gallery_default_configuration/', 'Gorillary gallery default configuration');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/gorillary_gallery_jquery/', 'Gorillary gallery jquery ajaxification');
t3lib_extMgm::addStaticFile($_EXTKEY,'static/gorillary_direct_link_to_image/', 'Gorillary gallery direct image link');
?>
