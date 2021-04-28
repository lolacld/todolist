<?php

// GESTION FORMULAIRE DE CONTACT

// construct prend en parametre les donnees
class FormLogin extends Controller {

    protected $data;


    // fonctions
    public function __construct($data) {
        $this->data = $data;
    }

    // Fonctions recuperant les champs de mon formulaire
    public function getFormFields() {
        
    }
}
