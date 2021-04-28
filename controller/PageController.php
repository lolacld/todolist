<?php

//require_once 'Controller.php';

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
}