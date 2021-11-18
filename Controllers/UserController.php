<?php 
	namespace Controllers;

	use Models\User as User;
	use DAO\UserDAO as UserDAO; 

	class UserController{
		private $userDAO;

		public function __construct(){
			$this->userDAO = new UserDAO(); 
		}

		public function Login($user){
			$listUsers = $this->userDAO->GetAll();
			$listStudents = $this->userDAO->GetAllApi();

			//para session
			$logged = NULL;

			$logged = $this->sessionInicAs($listUsers, $user);

			if ($logged == NULL){
                $logged = $this->sessionInicAs($listStudents, $user);
            }

			if($logged !=NULL && $logged->getActive() == true){
				if($logged->getRol == "Student"){
					$_SESSION["logged"] = logged;
					$this->ShowStudentProfileView();
				}
				else{
					$_SESSION["logged"] = $logged;
					require_once(VIEWS_PATH."admin-profile.php");
				}
			
			}else{
				require_once(VIEWS_PATH."home.php");
			}
		}

		private function sessionInicAs($list, $user)
        {
            $logged = NULL;

            foreach ($list as $key => $value) {
                if($user == $value->getEmail()){
                    $logged = $value;
                }
            }
            return $logged;
        }
  

		public function Logout(){
			session_destroy();
			require_once(VIEWS_PATH."home.php");
		}

		public function ShowAddView(){
			require_once(VIEWS_PATH."add-user.php");
		}

		public function ShowAdminProfileView()
        {
            require_once(VIEWS_PATH."admin-profile.php");
        }

		 public function ShowStudentProfileView()
        {
            require_once(VIEWS_PATH."student-profile.php");
        }

         public function Add($name, $lastName, $email, $telephone, $gender, $birthDate, $cellphone, $dni, $rol)
        {
            $user = new User();
            $user->setFirstName($name);
            $user->setLastName($lastName);
            $user->setDni($dni);
            $user->setEmail($email);
            $user->setFileNumber($telephone);
            $user->setGender($gender);
            $user->setBirthDate($birthDate);
            $user->setPhoneNumber($cellphone);
            $user->setActive('active');
            $user->setRol($rol);

            $this->userDAO->Add($user);
            $this->ShowAddView();
        }

	}
?>