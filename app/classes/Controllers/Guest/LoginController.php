<?php

namespace App\Controllers\Guest;

use App\Abstracts\Controller;
use App\App;
use App\Views\Forms\LoginForm;
use App\Views\Navigation;
use Core\Views\Content;

class LoginController extends Controller
{

    /**
     * This method builds or sets
     * current $page Content
     * renders it and returns HTML
     *
     * So if we have ex.: ProductsController,
     * it can have methods responsible for
     * index() (main page, usualy a list),
     * view() (preview single),
     * create() (form for creating),
     * edit() (form for editing)
     * delete()
     *
     * These methods can then be called on each page accordingly, ex.:
     * add.php:
     * $controller = new PixelsController();
     * print $controller->add();
     *
     *
     * my.php:
     * $controller = new ProductsController();
     * print $controller->my();
     *
     * @return string|null
     */
    function index(): ?string
    {


        if (App::$session->getUser()) {
            header('Location: index');
        }

        $login = new LoginForm();

        if ($login->isSubmitted()) {
            if ($login->validate()) {
                if (App::$session->login($login->getSubmitData()['email'], $login->getSubmitData()['password'])) {
                    header('Location: index');
                }
            }
        }

        $this->page->setTitle('Login');
        $this->page->setContent($login->render());
        return $this->page->render();
    }
}