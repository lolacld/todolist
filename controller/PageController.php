<?php

// Class gérant ma page d'affichage qui va recuperer les variables de

class PageController extends Controller
{

    public function indexAction(){

        $data = [
            'title' => 'Bienvenue sur ma todolist !',
            'content' => 'Voici la liste des tâches'
        ];

        return $this->render('page/index', $data);
    }

    public function testAction(){

        $UserModel = new UserModel();
        $users = $UserModel->find();
        $usersList = '';

        foreach ($users as $User){
            $usersList .= $User->toString() . '<br>';
        }

        $data = [
            'title' => 'Bienvenue sur ma page de test',
            'content' => $usersList,
        ];

        return $this->render('page/index', $data);
    }

    // LOGIN
    public function loginAction(){

        $data = [
            'title' => 'Connectez-vous',
            'content' => $form, // affiche le formulaire
        ];

        return $this->render('page/login', $data);
    }
}