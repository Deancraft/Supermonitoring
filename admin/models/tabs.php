<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: tabs.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelItem');

/**
 * Catalysts Model
 */
class SuperMonitoringModelTabs extends JModelLegacy {

  public function getToken() {

    $dbo = $this->getDbo();
    $query = $dbo->getQuery(TRUE);

    $user = JFactory::getUser();
    $user_id = $user->id;

    $query->select('token');
    $query->from('#__supermonitoring');
    $query->where('id = 1');

    $dbo->setQuery($query);

    $row = $dbo->loadObject();

    return $row;
  }
}
