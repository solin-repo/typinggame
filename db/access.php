<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'mod/typinggame:manage' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    )
);

?>