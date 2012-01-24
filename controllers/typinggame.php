<?php

include_once("{$CFG->dirroot}/local/soda/class.controller.php");
#include_once(dirname(__FILE__) . "/../models/family.php");

class typinggame_controller extends controller {
	
	function index() {
        global $USER;
        $this->start();
	}	
	
    function start() {
        global $COURSE;
        $this->previous_button = false;
        $this->next_button = false;
        # $activities = planner_activity::load_all();
        $this->get_view( 
			array(
				'message' => 'The module seems to be working!',
			), 'index');
    } // function start
    
    function get_words() {
        global $DB;
        $records = $DB->get_records_select('typinggame_word', "typinggame_id=" . (int)$this->typinggame_id) ?: array();
        
        $result = array();
        foreach ($records as $record) {
            $result[] = $record->word;
        }
        return $result ? '"' . join('", "', $result) . '"' : '"No words in database"';
    }

	
}