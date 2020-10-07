<?php

namespace App\Controllers\Guest;

use App\Abstracts\Controller;
use App\App;
use App\Feedbacks\Feedback;
use App\Views\Forms\FeedbackForm;
use App\Views\Pages\content\FeedbackTable;
use Core\Router;
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
        $form = new FeedbackForm();

        if (App::$session->getUser()) {

            if ($form->isSubmitted()) {
                if ($form->validate()) {
                    $feedback = new Feedback($form->getSubmitData());
                    $user_id = key(App::$db->getRowsWhere('users', ['email' => App::$session->getUser()['email']]));
                    date_default_timezone_set('Europe/Vilnius');
                    $feedback->setUserId($user_id);
                    $feedback->setDate(date('Y m d H:i'));
                    $feedback->setText($form->getSubmitData()['text']);
                    App::$db->insertRow('feedback', $feedback->_getData());
                }
            }
        } else {
            $message = [
                'text' => 'Norite parašyti komentarą? Užsiregistruokite',
                'link' => Router::getUrl('register')
            ];
        }

        $feedback_table = new FeedbackTable();

        if (App::$session->getUser()) {
            $content = new Content([
                'table' => $feedback_table->render(),
                'form' => $form->render() ?? null,
            ]);
        } else {
            $content = new Content([
                'table' => $feedback_table->render(),
                'message' => $message ?? null
            ]);
        }

        $this->page->setTitle('Atsiliepimai');
        $this->page->setTitle('Login');
        $this->page->setContent($content->render('FeedbackPage.tpl.php'));

        return $this->page->render();
    }
}