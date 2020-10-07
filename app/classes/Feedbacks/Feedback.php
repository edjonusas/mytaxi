<?php

namespace App\Feedbacks;

use Core\DataHolder\DataHolder;

class Feedback extends DataHolder
{
    protected array $properties =
        [
            'user_id',
            'date',
            'text'
        ];

    public function getUserId(): ?int
    {
        return $this->data['user_id'] ?? null;
    }

    public function setUserId(?int $user_id)
    {
        $this->data['user_id'] = $user_id;
    }

    public function getDate(): ?string
    {
        return $this->data['date'] ?? null;
    }

    public function setDate(?string $date)
    {
        $this->data['date'] = $date;
    }

    public function getText(): ?string
    {
        return $this->data['text'] ?? null;
    }

    public function setText(?string $text)
    {
        $this->data['text'] = $text;
    }
}