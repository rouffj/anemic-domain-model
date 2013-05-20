<?php

class User
{
    private $uuid;
    private $plan;

    public function __construct(Plan $plan, $uuid)
    {
        $this->plan = $plan;
        $this->uuid = $uuid;
    }
}
