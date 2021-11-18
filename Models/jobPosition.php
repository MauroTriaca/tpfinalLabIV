<?php
    namespace Models;

    class JobPosition 
    {
        private $jobPositionId;
        private $careerId;
        private $description;

        
    
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
    public function getCareerId()
    {
        return $this->careerId;
    }

    /**
     * @param mixed $careerId
     *
     * @return self
     */
    public function setCareerId($careerId)
    {
        $this->careerId = $careerId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
?>