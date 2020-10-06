<?php

namespace App\Accounts;

use App\App;
use Core\DataHolder\DataHolder;

class Account extends DataHolder
{
    protected array $properties = ['money', 'user_name'];

    public function getMoney(): ?int
    {
        return $this->data['money'] ?? null;
    }

    public function getName(): ?string
    {
        return $this->data['user_name'] ?? null;
    }

    /**
     * add or remove money from user account
     *
     * @param int $money
     * @param string $action
     * @return int|null
     */
    public function addMoney(int $money, string $action): ?int
    {
        $user = App::$db->getRowWhere('accounts', ['user_name' => $this->data['user_name']]);

        if ($action === 'add') return $this->data['money'] = $user['money'] + $money;
        if ($action === 'remove' || $action === 'bid') return $this->data['money'] = $user['money'] - $money;
    }

    /**
     * create user account data - name and money
     */
    public function setNewUserData(): void
    {
        $user_name = App::$session->getUser()['user_name'];
        $this->setName($user_name);

        $user_acc = App::$db->getRowWhere('accounts', ['user_name' => $user_name]);

        // creat user acc for new user
        if (!isset($user_acc)) {
            $this->setMoney(0);
            App::$db->insertRow('accounts', $this->_getData());
        }
    }

    public function setName(?string $name)
    {
        $this->data['user_name'] = $name;
    }

    public function setMoney(?int $Money)
    {
        $this->data['money'] = $Money;
    }

}