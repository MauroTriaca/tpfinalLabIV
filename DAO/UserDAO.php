<?php
    namespace DAO;
    use DAO\IUserDAO as IUserDAO; 
    use Models\User as User;


    class UserDAO implements IUserDAO{
        private $UserList = array();

        public function Add(User $user)
        {
            $this->RetrieveDataApi();
            
        }

        private function RetrieveDataApi()
        {
            
        }



    }
?>