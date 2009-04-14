<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005 Sacha Vorbeck (info@unlimited-vision.net)
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
 * Plugin 'tvplaintext' for the 'svo_tvplaintext' extension.
 *
 * @author	Sacha Vorbeck <info@unlimited-vision.net>
 */


require_once(PATH_tslib.'class.tslib_pibase.php');

class tx_svotvplaintext_pi1 extends tslib_pibase {
	var $prefixId = 'tx_svotvplaintext_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_svotvplaintext_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey = 'svo_tvplaintext';	// The extension key.
	var $pi_checkCHash = TRUE;
	
	/**
	 * [Put your description here]
	 */
	function user_cleanup($content,$conf)	{

		// Include the HTML-cleaner class definition file.
		require_once('class.html2text.inc');

		// Instantiate a new instance of the class. Passing the string
		// variable automatically loads the HTML for you.
		$h2t =& new html2text($content);

		// The HTML is likely full of relative links, so let's specify
		// an absolute source.
		$h2t->set_base_url('http://www.steinerverlag.com');      

		// Simply call the get_text() method for the class to convert
		// the HTML to the plain text. Store it into the variable.
		$text = $h2t->get_text();
  
		/*
		Simple removement of all HTML tags
		while($content != strip_tags($content))
		{
				while (strlen($content) != 0)
				{
					if (strlen($content) > 1024) 
					{
							$otherlen = 1024;
					} 
					else 
					{
						$otherlen = strlen($content);
					}
					$temptext = strip_tags(substr($content,0,$otherlen));
					$safetext .= $temptext;
					$content = substr_replace($content,'',0,$otherlen);
				} 
				$content = $safetext;
		}
		*/
    
		return ($text);
	}
	
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/svo_tvplaintext/pi1/class.tx_svotvplaintext_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/svo_tvplaintext/pi1/class.tx_svotvplaintext_pi1.php']);
}

?>