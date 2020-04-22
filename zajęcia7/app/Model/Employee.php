<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
    var $validate = array(
        'nazwisko' => array('rule' => 'notBlank'),
        'etat' => array('rule' => 'notBlank'),
        'placa_pod' => array(
            'ruleMin' => array(
                'rule' =>array('comparison','>=',0),
                'message' => 'Wartosc min to 0',
            ),
            'ruleMax' => array(
                'rule' =>array('comparison','<=',2000),
                'message' => 'Wartosc max to 2000',
            )
        ),
    );
}
