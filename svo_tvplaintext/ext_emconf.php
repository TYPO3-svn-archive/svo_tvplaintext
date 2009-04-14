<?php

########################################################################
# Extension Manager/Repository config file for ext: "svo_tvplaintext"
#
# Auto generated 07-04-2009 09:24
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Plaintext Library for TemplaVoila!',
	'description' => 'Creates Plaintext-View of TV webpages. Uses html2text class from http://www.chuggnutt.com/html2text.php',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'test',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Sacha Vorbeck',
	'author_email' => 'info@unlimited-vision.net',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"c207";s:10:"README.txt";s:4:"dd69";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"f6f8";s:23:"pi1/class.html2text.inc";s:4:"b003";s:35:"pi1/class.tx_svotvplaintext_pi1.php";s:4:"fc49";s:19:"doc/wizard_form.dat";s:4:"1571";s:20:"doc/wizard_form.html";s:4:"3a01";}',
);

?>