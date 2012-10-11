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
    ),
    'mod/typinggame:addinstance' => array(
            'riskbitmask' => RISK_XSS,
            'captype' => 'write',
            'contextlevel' => CONTEXT_COURSE,
            'archetypes' => array(
                'editingteacher' => CAP_ALLOW,
                'manager' => CAP_ALLOW,
                'teacher' => CAP_ALLOW
            ),
            'clonepermissionsfrom' => 'moodle/course:manageactivities'
    ),
);

?>
