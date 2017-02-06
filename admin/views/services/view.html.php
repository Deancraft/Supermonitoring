<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: view.html.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * SuperMonitoring View
 */
class SuperMonitoringViewServices extends JViewLegacy {

    /**
     * SuperMonitoring view display method
     * @return void
     */
    function display($tpl = null) {
        
        $model = JModelLegacy::getInstance('tabs', 'SuperMonitoringModel');
        $token = $model->getToken();
        $this->token = $token->token;
        $this->serviceDomain = SuperMonitoringHelper::getServiceDomainByLang();

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }

        // Set the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
    }

    /**
     * Setting the toolbar
     */
    protected function addToolBar() {
        JToolBarHelper::title(JText::_('COM_SUPERMONITORING_TAB_SERVICES'));
    }
}
