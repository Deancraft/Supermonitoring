<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: default.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) 2015 SITEIMPULSE (http://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<iframe id="frame" width="100%" frameborder="0" src="<?= $this->serviceDomain ?>index.php?wp_token=<?= $this->token ?>&amp;cms=joomla"></iframe>

<script type="text/javascript">
    resizeIframe();
	
	document.getElementById('frame').onload = resizeIframe;
	window.onresize = resizeIframe;
</script>