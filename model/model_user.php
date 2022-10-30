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
        public function getPassUser():string
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
        public function setPassUser($pass):void
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
    }
?>

