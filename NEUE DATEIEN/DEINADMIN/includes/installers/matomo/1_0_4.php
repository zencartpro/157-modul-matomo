<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.0.4' WHERE configuration_key = 'MATOMO_MODUL_VERSION' LIMIT 1;");