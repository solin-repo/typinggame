<?php
  
      // FILENAME: mod/planner/view.php
      
      require_once("../../config.php");
      $id = required_param('id', PARAM_INT);
      header("Location: {$CFG->wwwroot}/mod/typinggame/index.php?id=$id");
      exit;

?>