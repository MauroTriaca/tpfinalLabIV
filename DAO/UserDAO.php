<?php
    namespace DAO;
    use DAO\IUserDAO as IUserDAO; 
    use Models\User as User;


    class UserDAO implements IUserDAO{
        private $listUsers = array();

        public function Add(User $user)
        {
            $this->RetrieveData();
            array_push($listUsers, $user);
            $this->SaveData();
        }

        public function GetAll()
        {
            $this->RetrieveData();

            return $this->listUsers;
        }


        //Recuperar Datos
        private function RetrieveData()
        {
            $this->listUsers = array();

            if(file_exists("Data\Users.json")){
                //file_get_contents convierte el contenido de un archivo
                //a un String
                $jsonContent = file_get_contents("Data\Users.json");
                ///arreglo para decodificar
                $arrayToDecode = ($jsonContent) ? 
                json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray){
                    $user = new User();
                    $user->setStudentId($valuesArray["studentId"]);
                    $user->setCareerId($valuesArray["careerId"]);
                    $user->setFirstName($valuesArray["firstName"]);
                    $user->setLastName($valuesArray["lastName"]);
                    $user->setDni($valuesArray["dni"]);
                    $user->setFileNumber($valuesArray["fileNumber"]);
                    $user->setGender($valuesArray["gender"]);
                    $user->setBirthDate($valuesArray["birthDate"]);
                    $user->setEmail($valuesArray["email"]);
                    $user->setPhoneNumber($valuesArray["phoneNumber"]);
                    $user->setActive($valuesArray["active"]);
                    $user->setRol($valuesArray["rol"]);
                    $user->setPassword($valuesArray["password"]);

                    array_push($listUsers, $user);
                }

            }
        }

        private function SaveData(){
            $arrayToEncode = array();

            foreach($this->listUsers as $user){
                
                $valuesArray["studentId"] = $user->getStudentId();
                $valuesArray["careerId"] = $user->getCareerId();
                $valuesArray["firstName"] = $user->getFirstName();
                $valuesArray["lastName"] = $user->getLastName();
                $valuesArray["dni"] = $user->getDni();
                $valuesArray["fileNumber"] = $user->getFileNumber();
                $valuesArray["gender"] = $user->getGender();
                $valuesArray["birthDate"] = $user->getBirthDate();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["phoneNumber"] = $user->getPhoneNumber();
                $valuesArray["active"] = $user->getActive();
                $valuesArray["rol"] = $user->getRol();
                $valuesArray["password"] = $user->getPassword();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            ///escribe una cadena en un archivo
            file_put_contents("Data\Users.json", $jsonContent);
        }

        public function RetrieveDataApi(){
             try {
                $ch = curl_init();

                if ($ch === false) {
                    throw new Exception('failed to initialize');
                }

                curl_setopt($ch, CURLOPT_URL, 'https://utn-students-api.herokuapp.com/api/Student');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-api-key:4f3bceed-50ba-4461-a910-518598664c08'));
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $content = curl_exec($ch);
                $toJson = json_decode($content, true);

                if ($content === false) {
                    throw new Exception(curl_error($ch), curl_errno($ch));
                }
                $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            } catch(Exception $e) {         
                trigger_error(sprintf(
                    'Curl failed with error #%d: %s',
                    $e->getCode(), $e->getMessage()),
                    E_USER_ERROR);
            }
            return $toJson;
        } 

         public function GetAllApi()
        {
            $jsonApi = $this->RetrieveDataApi();
            $listUsers = array();

            foreach($jsonApi as $value){
                $user = new User ();
                $user->setStudentId($value['studentId']);
                $user->setCareerId($value['careerId']);
                $user->setFirstName($value['firstName']);
                $user->setLastName($value['lastName']);
                $user->setDni($value['dni']);
                $user->setFileNumber($value['fileNumber']);
                $user->setGender($value['gender']);
                $user->setBirthDate($value['birthDate']);
                $user->setEmail($value['email']);
                $user->setPhoneNumber($value['phoneNumber']);
                $user->setActive($value['active']);
                $user->setRol('Student');
                $user->setPassword($value["password"]);

                array_push($listUsers,$user);
            }
            return $listUsers;
        }       

    }
?>