<?php

namespace App\Users;

use Core\DataHolder\DataHolder;

class User extends DataHolder
{
    protected array $properties =
        [
            'first_name',
            'last_name',
            'email',
            'password',
            'phone',
            'address',
        ];

    public function setFirstName(?string $user_first_name)
    {
        $this->data['first_name'] = $user_first_name;
    }

    public function getFirstName(): ?string
    {
        return $this->data['first_name'] ?? null;
    }

    public function setLastName(?string $user_last_name)
    {
        $this->data['last_name'] = $user_last_name;
    }

    public function getLastName(): ?string
    {
        return $this->data['last_name'] ?? null;
    }

    public function setEmail(?string $user_email)
    {
        $this->data['email'] = $user_email;
    }

    public function getEmail(): ?string
    {
        return $this->data['email'] ?? null;
    }

    public function setPassword(?string $password)
    {
        $this->data['password'] = $password;
    }

    public function getPassword(): ?string
    {
        return $this->data['password'] ?? null;
    }

    public function setPhone(?string $user_phone)
    {
        $this->data['phone'] = $user_phone;
    }

    public function getPhone(): ?string
    {
        return $this->data['phone'] ?? null;
    }

    public function setAddress(?string $user_address)
    {
        $this->data['address'] = $user_address;
    }

    public function getAddress(): ?string
    {
        return $this->data['address'] ?? null;
    }
}