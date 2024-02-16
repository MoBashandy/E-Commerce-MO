<?php
    function lang($phrase){
        static $lang = array(
            'MESSAGE' => 'Welcome Mohamed',
            'FOR' => 'King Of THE World'
        );
        return $lang[$phrase];
    }
?>