<?php
// app/Model/User.php
App::uses('AppModel', 'Model');

class User extends AppModel {
    public $name = 'User';
    public $tablePrefix = 'pp_';
    public $displayField = 'email';
    public $validate = array(
        'pseudo' => array(
            'rule'       => 'isUnique',
            'required'   => true,
            'allowEmpty' => false,
            'message'    => 'Ce Pseudo est déjà utilisé'
        ),
        'password' => array(
            'rule' => array('minLength', 8),
            'required'   => true,
            'allowEmpty' => false,
            'message' => 'Le mot de passe doit comporter au moins 8 caractères'
                
        ),
        'email' => array(
            'rule' => 'email' 
            ),
        'nom' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un nom d\'utilisateur est requis'
            )
        ),
        'prenom' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Un prénom d\'utilisateur est requis'
            )
        ),
        'genre' => array(
            'choixAutorise' => array(
             'rule'    => array('inList', array('H', 'F')),
             'message' => 'Choisisez entre Airsofteur ou Airsoteuse.'
         )
        )
    );
}

?>