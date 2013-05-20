<?php

class User
{
    private $uuid;
    private $plan;
    private $firstName;
    private $lastName;
    private $email;
    private $username;

    public function __construct(Plan $plan, $uuid)
    {
        $this->plan = $plan;
        $this->uuid = $uuid;
    }

    public function updatePersonalInfo($firstName, $lastName, $username, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->email = $email;
    }
}
