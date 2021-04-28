<?php

class Controller
{

    public function render($template, $data){

        $output = $this->loadTemplate($template);

        foreach ($data as $key => $value){
            $output = str_replace('{$' . $key . '}', $value, $output);
        }

        return $output;
    }

    public function loadTemplate($template){
        return file_get_contents('view/' . $template . '.view.html');
    }
}


///