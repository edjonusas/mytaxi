<?php

namespace App\Controllers\Guest;

use App\Abstracts\Controller;
use App\Views\Navigation;
use Core\Views\Content;

class TaxiController extends Controller
{

    function index(): ?string
    {

        $header_content = new Content([
            'header' => 'Titulinis'
        ]);


        $this->page->setTitle('Titulinis');
        $this->page->setHeader($header_content->render('Header.tpl.php'));
        // $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }

    function feedback(): ?string
    {

        $header_content = new Content([
            'header' => 'Atsiliepimai'
        ]);


        $this->page->setTitle('Atsiliepimai');
        $this->page->setHeader($header_content->render('Header.tpl.php'));
        // $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }
}