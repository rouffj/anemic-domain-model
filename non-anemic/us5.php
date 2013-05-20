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

    public function importProjects(ProjectImporterInterface $importer, array $ids)
    {
        try {
            $this->projects = $importer->findAll();
        } catch (ProjectImporterException $e) {
            $this->importFailed = true;
        }
    }

    public function ignoreProjects(array $ids)
    {
        foreach ($this->projects as $i => $project) {
            if ($ids[$i] === $project->getId()) {
                $project->hide();
            }
        }
    }
}
