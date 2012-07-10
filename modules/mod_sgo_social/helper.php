<?php
/**
 * @package		sgo_social_mod
 * @subpackage	mod_sgo_social
 * @copyright	Copyright (C) 2005 - 2012 s-go consulting, llc
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modSgoSocialHelper
{

	static function &getIcons($params)
	{	
		$theme		=	$params->get('theme', "extra");
		$size		=	$params->get('size', "39x40");
		
		$i = 0;
		
		// check twitter
		if ($params->get('twitter')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "twitter.png";
			$icons->$i->url = $params->get('twitter_url');
			$i++;
		}
		
		// check Facebook
		if ($params->get('Facebook')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "facebook.png";
			$icons->$i->url = $params->get('facebook_url');
			$i++;
		}
		
		// check flickr
		if ($params->get('flickr')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "flickr.png";
			$icons->$i->url = $params->get('flickr_url');
			$i++;
		}
		
		// check google plus
		if ($params->get('google_plus')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "google_plus.png";
			$icons->$i->url = $params->get('google_plus_url');
			$i++;
		}
		
		// check linked in
		if ($params->get('linked_in')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "linkedin.png";
			$icons->$i->url = $params->get('linked_in_url');
			$i++;
		}
		
		// check youtube
		if ($params->get('youtube')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "youtube.png";
			$icons->$i->url = $params->get('youtube_url');
			$i++;
		}
		
		// check pinterest
		if ($params->get('pinterest')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "pinterest.png";
			$icons->$i->url = $params->get('pinterest_url');
			$i++;
		}
		
		// check rss
		if ($params->get('rss')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . "rss.png";
			$icons->$i->url = $params->get('rss_url');
			$i++;
		}
		
		// check custom 1
		if ($params->get('custom1')) {
			$icons->$i->icon = $params->get('custom1_src');
			$icons->$i->url = $params->get('custom1_url');
			$i++;
		}
		
		// check custom 2
		if ($params->get('custom2')) {
			$icons->$i->icon = $theme . "/" . $size . "/" . $params->get('custom2_src');
			$icons->$i->url = $params->get('custom2_url');
		}
		
		
		return $icons;
	}
}