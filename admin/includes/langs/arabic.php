<?php
    function lang($phrase){
        static $lang = array(
            'MESSAGE' => 'أهلا محمد',
            'FOR' => 'ملك العالم'
        );
        return $lang[$phrase];
    }
?>