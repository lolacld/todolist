<?php

// construct prend en parametre les donnees
class Form extends Controller {

    protected $data;


    // fonctions
    public function __construct($data) {
        $this->data = $data;
    }

    // Fonctions recuperant les champs de mon formulaire
    public function getNom() {
        return '<p>
        <label class="lab">Nom : </label>
        <input type="text" name="nom">
        </p>';
    }
    public function getEmail() {
        return '<p>
        <label class="lab2">Email : </label>
        <input type="text" name="email">
        </p>';
    }
    public function getMsg() {
        return '<p>
        <label class="lab3">Message : </label>
        <input type="text" name="msg">';
    }

    // bouton
    public function submit() {
        return '<button type="submit">Envoyer</button>';
    }
}
