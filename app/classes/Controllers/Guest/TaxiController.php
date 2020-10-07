<?php

namespace App\Controllers\Guest;

use App\Abstracts\Controller;
use Core\Views\Content;

class TaxiController extends Controller
{

    function index(): ?string
    {

        $content = new Content();
        $this->page->setTitle('Titulinis');

        $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }

    function feedback(): ?string
    {

        $this->page->setTitle('Atsiliepimai');
        // $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }
}