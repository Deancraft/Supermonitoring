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
class SuperMonitoringViewSuperMonitoring extends JViewLegacy {

    protected $form;
    
    /**
     * SuperMonitoring view display method
     * @return void
     */
    function display($tpl = null) {
        
        $jinput = JFactory::getApplication()->input;
        $token = $jinput->get('jform', NULL, 'ARRAY');
        $isCorrect = $this->getApiResponse($token['token']);
        
        if ($isCorrect == '0') { 
            $this->setRedirect('index.php?option=com_supermonitoring&id=1','Nieprawidłowy token. Token znajdziejsz w swoich Ustawieniach Konta w serwisie <a href=\"http://www.supermonitoring.pl/\" target=\"_blank\">www.supermonitoring.pl</a>','error');
        }
        
        $id = $jinput->get('id', NULL, 'STRING');
        if(empty($id)) {
            $mainframe = &JFactory::getApplication();
            $mainframe->redirect('index.php?option=com_supermonitoring&id=1');
        }
        
        $this->form = $this->get('Form');

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
        JToolBarHelper::title(JText::_('COM_SUPERMONITORING_MANAGER_SUPERMONITORING'));
        JToolbarHelper::apply('supermonitoring.apply');
    }

    function getApiResponse($token) {
        $api = 'http://www.supermonitoring.pl/API/';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        $string = 'f=wp_token&token=' . $token;
        curl_setopt($curl, CURLOPT_POSTFIELDS, $string);
        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }
}
