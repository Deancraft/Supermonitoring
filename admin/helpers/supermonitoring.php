<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: supermonitoring.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Eoc component helper.
 */
abstract class SuperMonitoringHelper {

    public static function getServiceDomainByLang() {
        $lang = JFactory::getLanguage();
        switch ($lang->getTag()) {
            case "pl-PL":
                return 'http://www.supermonitoring.pl/';
            case "es-ES":
                return 'http://www.monitoreo-sitios.com/';
            default:
                return 'http://www.supermonitoring.com/';
        }
    }

}
