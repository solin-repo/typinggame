<?php

include_once("{$CFG->dirroot}/local/soda/class.controller.php");

class word_controller extends controller {
	
    function __construct($mod_name, $mod_instance_id) {
        parent::__construct($mod_name, $mod_instance_id);
        if (!$this->check_capability('manage','')) { print_error('no_right_visit', 'typinggame'); }
    } // function __construct


    function index($record_id = false, $record = false) {
        global $CFG, $DB;
        $records = $DB->get_records_select('typinggame_word', "typinggame_id=" . (int)$this->typinggame_id) ?: array();
        $this->get_view(array('records' => $records,
                              'record_id' => $record_id,
                              'record' => $record) );
    } // function index


    function update($record_id) {
        $record = new word($_POST['record']);
        if (!$record->save($record_id)) return $this->index($record_id, $record);
        $this->redirect_to('index');
    } // function update


    function create() {
        $record = new word($_POST['record']);
        $record->typinggame_id = $this->typinggame_id;
        if (!$record->save()) return $this->index(false, $record);
        $this->redirect_to('index');
    } // function create


    function delete($record_id) {
        $record = new word( array('deleted' => 1, 'id' => $record_id) );
        $record->delete();
        $this->redirect_to('index');               
    } // function delete
	
	
}