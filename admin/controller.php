<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: controller.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die;

/**
 * General Controller of SuperMonitoring component
 */
class SuperMonitoringController extends JControllerLegacy {

    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false) {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'SuperMonitoring'));

        // call parent behavior
        parent::display($cachable);
    }

}
