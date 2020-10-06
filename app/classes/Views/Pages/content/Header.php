<?php

namespace App\Views\Pages\content;

use Core\View;

class Header extends View
{

    public function render(string $template_path = ROOT . '/app/templates/Header.tpl.php')
    {
        return parent::render($template_path);
    }
}
