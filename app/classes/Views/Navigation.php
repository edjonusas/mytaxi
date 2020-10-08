<?php

namespace App\Views;

use App\App;
use Core\Router;
use Core\View;

class Navigation extends View
{
    public function __construct()
    {
        if (App::$session->getUser()) {
            $nav['left'][] = ['url' => Router::getUrl('index'), 'title' => 'Titulinis'];
            $nav['left'][] = ['url' => Router::getUrl('feedback'), 'title' => 'Atsiliepimai'];
            $nav['right'][] = ['url' => Router::getUrl('logout'), 'title' => 'Atsijungti'];
        } else {
            $nav['left'][] = ['url' => Router::getUrl('index'), 'title' => 'Titulinis'];
            $nav['left'][] = ['url' => Router::getUrl('feedback'), 'title' => 'Atsiliepimai'];
            $nav['right'][] = ['url' => Router::getUrl('register'), 'title' => 'Registruotis'];
            $nav['right'][] = ['url' => Router::getUrl('login'), 'title' => 'Prisijungti'];
        }
        //adds active class to nav link
        foreach ($nav['left'] as $key => $link ) {
            if($link['url'] === $_SERVER['REQUEST_URI']) {
                $nav['left'][$key]['class'] = 'active';
            }
        }

        foreach ($nav['right'] as $key => $link ) {
            if($link['url'] === $_SERVER['REQUEST_URI']) {
                $nav['right'][$key]['class'] = 'active';
            }
        }

        parent::__construct($nav);
    }

    public function render(string $template_path = ROOT . '/app/templates/nav.tpl.php')
    {
        return parent::render($template_path);
    }
}