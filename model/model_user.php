<?php
    class User
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_user;
        private $login_user;
        private $pass_user;
        private $mail_user;
        private $img_user;
        private $statut_user;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($login_user, $pass_user, $mail_user)
        {
            $this->login_user = $login_user;
            $this->pass_user = $pass_user;
            $this->mail_user = $mail_user;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function getIdUser():int
        {
            return $this->id_user;
        }
        public function getLoginUser():string
        {
            return $this->login_user;
        }
        public function getpassUser():string
        {
            return $this->pass_user;
        }
        public function getMailUser():string
        {
            return $this->mail_user;
        }
        public function getImgUser():string
        {
            return $this->img_user;
        }
        public function getStatutUser():bool 
        {
            return $this->statut_user;
        }

        public function setIdUser($id):void
        {
            $this->id_user = $id;
        }
        public function setLoginUser($login):void
        {
            $this->login_user = $login;
        }
        public function setpassUser($pass):void
        {
            $this->pass_user = $pass;
        }
        public function setMailUser($mail):void
        {
            $this->mail_user = $mail;
        }
        public function setImgUser($img):void
        {
            $this->img_user = $img;
        }
        public function setStatutUser($statut):void 
        {
            $this->statut_user = $statut;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
        //Account creation:
        public function add_user($bdd):void
        {//object instance:
            $login = $this->getLoginUser();
            $pass = $this->getpassUser();
            $mail = $this->getMailUser();
            $img = $this->getImgUser();
            try
            {//SQL request 
                $req = $bdd->prepare('INSERT INTO user(login_user, pass_user, mail_user, img_user) 
                VALUES (:login_user, :pass_user, :mail_user, :img_user)');
                $req -> execute(array(
                    'login_user' => $login,
                    'pass_user' => $pass,
                    'mail_user' => $mail,
                    'img_user' => $img
                ));
            }//Catching and return exception:
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
        //Method to show an user by his mail
        public function show_user_by_mail($bdd)
        {
            try
            {//SQL request
                $req = $bdd->prepare('SELECT * FROM user WHERE mail_user = :mail_user');
                $req -> execute(array(
                    'mail_user' => $this->getMailUser(), 
                ));
                $data = $req -> fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }//Catching and return exception:
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

