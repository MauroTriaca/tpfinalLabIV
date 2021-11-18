<?php
namespace Models;

    class Admin extends User{
        
        function __construct()
        {
            $this->setRol("admin");
        }
    }
?>