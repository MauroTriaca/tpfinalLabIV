<?php
    namespace Models;

    class JobOffer
    {
        private $jobOfferId;
        private $jobPositionId;
        private $cuitCompany;
        private $datePublished;
        private $remote;
        private $salary;
        private $skills;
        private $projectDescription;
        private $active;

        
    
    /**
     * @return mixed
     */
    public function getJobOfferId()
    {
        return $this->jobOfferId;
    }

    /**
     * @param mixed $jobOfferId
     *
     * @return self
     */
    public function setJobOfferId($jobOfferId)
    {
        $this->jobOfferId = $jobOfferId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobPositionId()
    {
        return $this->jobPositionId;
    }

    /**
     * @param mixed $jobPositionId
     *
     * @return self
     */
    public function setJobPositionId($jobPositionId)
    {
        $this->jobPositionId = $jobPositionId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuitCompany()
    {
        return $this->cuitCompany;
    }

    /**
     * @param mixed $cuitCompany
     *
     * @return self
     */
    public function setCuitCompany($cuitCompany)
    {
        $this->cuitCompany = $cuitCompany;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param mixed $datePublished
     *
     * @return self
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * @param mixed $remote
     *
     * @return self
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     *
     * @return self
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     *
     * @return self
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * @param mixed $projectDescription
     *
     * @return self
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
?> 