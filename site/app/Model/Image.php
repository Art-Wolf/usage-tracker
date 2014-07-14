<?php

class Image extends AppModel {

    public $validate = array(
        'location' => array(
            'rule' => 'notEmpty'
        ),
        'tab' => array(
            'rule' => 'notEmpty'
        )
    );

}

?>
