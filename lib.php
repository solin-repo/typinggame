<?php

// FILENAME: lib.php
require_once("class.typinggame.php");
$typinggame_instance = new typinggame();



#
# This is a hack to trick the Register New Plugin script on moodle.org
# The functions below are provided by the Soda plugin, so we don't
# have to create the clumsy namespaced functions anymore...
#


if (!function_exists('typinggame_add_instance')) {
    function typinggame_add_instance() {
        return;
    }
}

if (!function_exists('typinggame_update_instance')) {
    function typinggame_update_instance() {
        return;
    }
}

?>