<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: supermonitoring.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

class SuperMonitoringModelSuperMonitoring extends JModelAdmin {

  /**
   * The type alias for this content type.
   *
   * @var      string
   * @since    3.2
   */
  public $typeAlias = 'com_supermonitoring.supermonitoring';

  /**
   * The prefix to use with controller messages.
   *
   * @var    string
   * @since  1.6
   */
  protected $text_prefix = 'COM_SUPERMONITORING';

  function getTable($name = 'SuperMonitoring', $prefix = 'SuperMonitoringTable', $options = array()) {
    return parent::getTable($name, $prefix, $options);
  }

  //przypisanie danych do formularza
  protected function loadFormData() {
    $data = JFactory::getApplication()->getUserState('com_supermonitoring.edit.supermonitoring.data', array());

    if (empty($data)) {
      $data = $this->getItem();
    }

    $this->preprocessData('com_supermonitoring.supermonitoring', $data);
    
    return $data;
  }

  //Dla załadowania formularza edit
  function getForm($data = array(), $loadData = TRUE) {
    $form = $this->loadForm(
            'com_supermonitoring.supermonitoring', 'supermonitoring', array(
              'control' => 'jform',
              'load_data' => $loadData
            )
    );

    return $form;
  }

}
