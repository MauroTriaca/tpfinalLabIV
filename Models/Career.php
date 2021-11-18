<?php
    namespace Models;

    class Career 
    {
        private $careerId;
        private $description;
        private $active;

       
    
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