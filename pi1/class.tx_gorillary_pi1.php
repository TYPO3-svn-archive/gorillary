<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Stephan Petzl <office@netrabbit.at>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin 'Gorillary Gallery' for the 'gorillary' extension.
 *
 * @author	Stephan Petzl <office@netrabbit.at>
 * @package	TYPO3
 * @subpackage	tx_gorillary
 */
class tx_gorillary_pi1 extends tslib_pibase {
	var $prefixId      = 'tx_gorillary_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_gorillary_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'gorillary';	// The extension key.
	var $pi_checkCHash = true;
	
	/**
	 *
	 * @var tslib_fe
	 */
	private $tsfe;
	/**
	 *
	 * @var t3lib_DB
	 */
	private $db;

	/**
	 *
	 * @var tslib_cObj
	 */
	public $cObj;
	/**
	 * Main method of your PlugIn
	 *
	 * @param	string		$content: The content of the PlugIn
	 * @param	array		$conf: The PlugIn Configuration
	 * @return	The content that should be displayed on the website
	 */
	function main($content, $conf)	{

		$this->db = $GLOBALS['TYPO3_DB'];
		$this->tsfe = $GLOBALS['TSFE'];
		$this->pi_setPiVarDefaults();
		$this->pi_initPIflexForm();
		$this->conf = $conf;
		//$js = "$('.tx_gorillary_image').append('<div class=\"tx_gorillary_overlay\" style=\"position:absolute;\">sdfasd</div>');";
		//$this->tsfe->setJS($this->extKey,$js);

		$content = "";
		$display = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'what_to_display');

		$collectionUids = $this->pi_getFFvalue($this->cObj->data['pi_flexform'], 'collections');
	
		$collections = $this->db->exec_SELECTgetRows('*', 'tx_gorillary_collections', "deleted=0 AND hidden=0 AND uid IN ($collectionUids)");

		if(!$this->conf['collectionView.'])
            return $this->pi_wrapInBaseClass("please include the template \"Gorillery gallery default configuration\" in your typoscript root template!");

        foreach($this->conf['additionalHeaderData.'] as $value){
            $this->tsfe->additionalHeaderData[$this->prefixId] .= $value;
        }
		

		if($display == 'singleView'){
			
			$content = $this->getSingleView($collections[0]);
			
		}else{
		
			if(count($collections)>1){	//listview
				foreach($collections as $gallery){

				}
			}else if(count($collections)==1){	//singleview
			
				$content .= $this->getCollectionView($collections[0]);
			}else{
				$content = "no collections found!";
			}
		}
		
		
		return $this->pi_wrapInBaseClass($content);
	}

	private function getCollectionView($collection){
		$content = "";
		$cObj = t3lib_div::makeInstance('tslib_cObj');
		$images = $this->db->exec_SELECTgetRows('*', 'tx_gorillary_images', 'deleted=0 AND hidden=0 AND collection='.$collection['uid']);
		
        foreach($images as $image){
			$cObj->start($image);
			$content .= $cObj->cObjGetSingle($this->conf['collectionView.']['thumbnail'], $this->conf['collectionView.']['thumbnail.']);
		}
		$content = str_replace('|', $content, $this->conf['collectionView.']['wrap']);
		return $content;
	}

	private function getSingleView($collection){
		$imageUid = intval($this->piVars['image']);
		$content = "";
		$cObj = t3lib_div::makeInstance('tslib_cObj');
		if($imageUid){
			$images = $this->db->exec_SELECTgetRows('*', 'tx_gorillary_images', 'deleted=0 AND hidden=0 AND uid='.$imageUid);
		}else{	// take the first image from the page
			$images = $this->db->exec_SELECTgetRows('*', 'tx_gorillary_images', 'deleted=0 AND hidden=0 AND collection='.$collection['uid']);
		}
		if(count($images)>0){
			$image = $images[0];
			$cObj->start($image);
			$content .= $cObj->cObjGetSingle($this->conf['singleView.']['image'], $this->conf['singleView.']['image.']);
		}else{
			$content .= "no such image found!";
		}
		

		$content = str_replace('|', $content, $this->conf['singleView.']['wrap']);
		$content .= '<div class="tx_gorillary_overlay"></div>';
		$content .= '<div class="tx_gorillary_loader_container"><div class="tx_gorillary_loader"></div></div>';
		$content = '<div style="position: relative;">'.$content.'</div>';
		return $content;
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/gorillary/pi1/class.tx_gorillary_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/gorillary/pi1/class.tx_gorillary_pi1.php']);
}

?>
