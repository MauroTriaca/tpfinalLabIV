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

			foreach ($listUsers as $key => $value) {
				if($user == $value->getEmail()){
					$logged = $value; 
				}
			}

			foreach ($listStudents as $key => $value) {
				if($user == $value->getEmail()){
					$logged = $value; 
				}
			}

			if($logged !=NULL && $logged->getActive() == true){
				if($logged->getRol == "Student"){
					echo "Estudiante Logueado";
				}
				else{
					$_SESSION["logged"] = $logged;
					require_once(VIEWS_PATH."add-company.php");
				}
			
			}else{
				require_once(VIEWS_PATH."home.php");
			}
		}

		public function Logout(){
			session_destroy();
			require_once(VIEWS_PATH."home.php");
		}

		public function ShowAddView(){
			require_once(VIEWS_PATH."add-user.php");
		}


	}
?>