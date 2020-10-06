<?php

namespace App\Views;

class Game
{

    private array $game = [];

    public function __construct()
    {
        $this->game['line1'] = ['div1' => 2, 'div2' => 1, 'div3' => 1];
        $this->game['line2'] = ['div1' => 1, 'div2' => 2, 'div3' => 1];
        $this->game['line3'] = ['div1' => 1, 'div2' => 1, 'div3' => 2];
    }

    public function play()
    {
        $this->game['line1'] = ['div1' => rand(1, 3), 'div2' => rand(1, 3), 'div3' => rand(1, 3)];
        $this->game['line2'] = ['div1' => rand(1, 3), 'div2' => rand(1, 3), 'div3' => rand(1, 3)];
        $this->game['line3'] = ['div1' => rand(1, 3), 'div2' => rand(1, 3), 'div3' => rand(1, 3)];
    }

    public function get(): ?array
    {
        return $this->game;
    }

    public function winMultiply()
    {
        if ($this->winner()) {
            if ($this->game['line2']['div1'] === 1) {
                return 10;
            }
            if ($this->game['line2']['div1'] === 2) {
                return 5;
            }
            if ($this->game['line2']['div1'] === 3) {
                return 3;
            }
        }
    }

    public function winner(): ?bool
    {
        return count(array_unique($this->game['line2'])) === 1;
    }
}