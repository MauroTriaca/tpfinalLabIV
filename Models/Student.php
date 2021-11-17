<?php
namespace Models;

    class Student extends User{
        private $studentId;
        private $careerId;

        
        
    
    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     *
     * @return self
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

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
}
?>