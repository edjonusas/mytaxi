<?php

namespace App\Views\Pages;

use App\Views\Navigation;
use Core\View;
use Core\Views\Content;

class BasePage extends \Core\Views\Page
{

    /**
     * Čia galėsime nustatyti
     * $data['title'], $data['css'], $data['Content']...
     * extend'inę šią klasę pvz.: App\Views\Pages\BasePage.php
     *
     * BasePage bus atsakinga už pagrindinius dalykus, tai
     * css, js, header ir footer
     *
     * Po to galėsime extendinti BasePage su App\Views\Pages\LoginPage.php,
     * kur nustatysime title ir Content.
     */
    public function __construct()
    {
        $nav = new Navigation();

        $footer = new View();
        $this->setTitle('unknown page');
        $this->addCSS('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
        $this->addCSS('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap');
        $this->addCss('/css/style.css');
        $this->addJS('assets/js/script.js');
        $this->setNav($nav->render());
        $this->setFooter($footer->render(ROOT.'/app/templates/content/Footer.tpl.php'));
        parent::__construct();
    }
}