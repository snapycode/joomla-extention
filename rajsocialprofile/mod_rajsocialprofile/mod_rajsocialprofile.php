<?php

/**
 * @package		mod_rajsocialshare
 * @subpackage	Module
 * @copyright	Copyright (C)2012  - All Rights Reserved.
 * @author		Raj Kumar Das
 * @version		1
 * @license		GNU/GPL, see LICENSE
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 *
 * This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See LICENSE for more details.
 */


//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$modulePath = JURI::base() . 'modules/mod_rajsocialprofile/';
$moduleclass_sfx 	= $params->get('moduleclass_sfx','');

$facebook = $params->get('facebook');
$linkedin = $params->get('linkedin');
$twitter = $params->get('twitter');
$google = $params->get('google');
$youtube = $params->get('youtube');

$pretext = $params->get('pre_text');
?>

<?php //print_r($params->get('facebook')) ?>

<div id="rajsocialprofile<?php echo $module->id; ?>" class="rajsocialprofile<?php if($moduleclass_sfx) echo ' '.$moduleclass_sfx; ?>">

<?php if($module->showtitle == 1): ?>
<?php echo '<h3>'.$module->title.'</h3><br/>'; ?>
<?php endif; ?>

<?php if(isset($pretext) && !empty($pretext)):?>
<?php echo '<p>'.$pretext.'</p><br/>'; ?>
<?php endif; ?>
<div class="icon">
<?php if($facebook == 1):?>
<a href="http://www.facebook.com/<?php echo $params->get('facebook_profile', 'snapycode'); ?>" target="_blank"><img src="<?php echo $modulePath; ?>icons/facebook.png" width="56" height="56"  alt=""/></a>
<?php endif; ?>

<?php if($twitter == 1):?>
<a href="http://www.twitter.com/<?php echo $params->get('twitter_profile', 'snapycode'); ?>" target="_blank"><img src="<?php echo $modulePath; ?>icons/twt.png" width="56" height="56"  alt=""/></a>
<?php endif; ?>

<?php if($google == 1):?>
<a href="http://www.plus.google.com/<?php echo $params->get('google_profile', 'snapycode'); ?>" target="_blank"><img src="<?php echo $modulePath; ?>icons/googleplus.jpeg" width="56" height="56"  alt=""/></a>
<?php endif; ?>

<?php if($linkedin == 1):?>
<a href="http://linkedin.com/<?php echo $params->get('linkedin_profile', 'snapycode'); ?>" target="_blank"><img src="<?php echo $modulePath; ?>icons/linkedin.png" width="56" height="56"  alt=""/></a>
<?php endif; ?>

<?php if($youtube == 1):?>
<a href="http://www.youtube.com/user/<?php echo $params->get('youtube_profile', 'snapycode'); ?>" target="_blank"><img src="<?php echo $modulePath; ?>icons/youtube.png" width="56" height="56"  alt=""/></a>
<?php endif; ?>
</div>

</div>