<?php

class User
{
    private $uuid;
    private $plan;
    private $firstName;
    private $lastName;
    private $email;
    private $username;
    private $importFailed;

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

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setProjects(array $projects)
    {
        $this->projects = $projects;
    }

    public function setImportFailed($failed)
    {
        $this->importFailed = $failed;
    }
}


$ids = array(1, 2, 3);
$projects = array();
foreach ($user->projects as $i => $project) {
    if ($ids[$i] === $project->getId()) {
        $projects[] = $project->setStatus('hidden');
        foreach ($project->getAnalyses() as $analysis) {
            $analysis->setStatus('hidden');
        }
    }
}
$user->setProjects($projects);
