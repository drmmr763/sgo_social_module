<?php
/**
 * @package		sgo_social_mod
 * @subpackage	mod_sgo_social
 * @copyright	Copyright (C) 2005 - 2012 s-go consulting, llc
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// iterator
$i			= 0;
$path 		= JURI::base() . "modules/mod_sgo_social/assets/images/themes/";

$icons_css 	= $params->get('icons_css', "float:left;width:400px;");
$icon_css 	= $params->get('icon_css', "float:left;width:77px;");
?>

<div class="icons" style="<?php echo $icons_css; ?>">

	<?php foreach ($icons as $icon) : ?>
		<div class="icon_<?php echo $i++ ?>" style="<?php echo $icon_css; ?>">
			<a href="<?php echo $icon->url; ?>" target="_blank"><img src="<?php echo $path . $icon->icon; ?>" /></a>
		</div>
	<?php endforeach; ?>

</div>