<?php

class User
{
    private $uuid;
    private $plan;

    public function __construct()
    {
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    public function setPlan(Plan $plan)
    {
        $this->plan = $plan;
    }
}
