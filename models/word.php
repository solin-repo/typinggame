<?php

class word extends model {

    public static $table_name = 'typinggame_word';

    function define_validation_rules() {
        $this->add_rule('word',
                        'Words cannot be empty',
                        function($word) {
                            return ( trim($word) != '' );
                        });
    } // function define_validations
    
    function delete() {
        global $DB;
        $DB->delete_records_select(self::$table_name, "id=" . $this->id);
    }


} // class organization 

?>