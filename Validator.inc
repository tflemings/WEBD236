<?php
class Validator {
    
    function __construct() {
        
    }
    
    function filterInteger($value) {
        return filter_var($value, FILTER_VALIDATE_INT);
    }
}
?>
