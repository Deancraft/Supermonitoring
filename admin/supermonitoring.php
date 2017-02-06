<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: supermonitoring.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die;

// Added for Joomla 3.0
if(!defined('DS')){
	define('DS',DIRECTORY_SEPARATOR);
}

// require helper files
JLoader::register('SuperMonitoringHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'supermonitoring.php');

// Add JAvaScript file for all pages
$document = JFactory::getDocument();
$document->addScript('components/com_supermonitoring/assets/js/supermonitoring.js');
 
// Get an instance of the controller prefixed by SuperMonitoring
$controller = JControllerLegacy::getInstance('SuperMonitoring');
 
// Perform the Request task and Execute request task
$controller->execute(JFactory::getApplication()->input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();