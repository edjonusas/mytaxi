<?php

namespace App\Views\Pages\content;

use App\App;
use Core\View;

class FeedbackTable extends View
{
    public function __construct()
    {

        $feedbacks['rows'] = App::$db->getRowsWhere('feedback',[]);

        foreach ($feedbacks['rows'] as $key => $feedback) {

            $user = App::$db->getRowById('users',$feedback['user_id']);
            unset($feedbacks['rows'][$key]['user_id']);
            $feedbacks['rows'][$key]['name'] = $user['first_name'];
        }

        parent::__construct($feedbacks);
    }

    public function render(string $template_path = ROOT . '/app/templates/content/FeedbackTable.tpl.php')
    {
        return parent::render($template_path);
    }
}
