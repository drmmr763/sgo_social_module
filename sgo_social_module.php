<?php
/**
 * @package		sgo_social_mod
 * @subpackage	mod_sgo_social
 * @copyright	Copyright (C) 2005 - 2012 s-go consulting, llc
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;


// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$icons = modSgoSocialHelper::getIcons($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


$rollover = $params->get('rollover', 1);

if ($rollover) {
	$doc =& JFactory::getDocument();
	$doc->addScript(JURI::base()."modules/mod_sgo_social/assets/scripts/rollover.js");
}

require JModuleHelper::getLayoutPath('mod_sgo_social');



?>

