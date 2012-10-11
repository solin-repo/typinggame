<?php
  // example contents for version.php
  defined('MOODLE_INTERNAL') || die();

  $module->version   = 2012101101;       // The current module version (Date: YYYYMMDDXX)
  $module->requires  = 2011112900;       // Requires this Moodle version
  $module->component = 'mod_typinggame';     // Full name of the plugin (used for diagnostics)
  $module->cron      = 0;
  $module->release   = 'v0.1';

?>
