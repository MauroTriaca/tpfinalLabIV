<?php  
namespace Models;

    class Company 
    {	
    	private $idCompany;
        private $name;
        private $cuit;
        private $address;
        private $founded;



    /**
     * @return mixed
     */
    public function getIdCompany()
    {
        return $this->idCompany;
    }

    /**
     * @param mixed $idCompany
     *
     * @return self
     */
    public function setIdCompany($idCompany)
    {
        $this->idCompany = $idCompany;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * @param mixed $cuit
     *
     * @return self
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     *
     * @return self
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFounded()
    {
        return $this->founded;
    }

    /**
     * @param mixed $founded
     *
     * @return self
     */
    public function setFounded($founded)
    {
        $this->founded = $founded;

        return $this;
    }
}
?>