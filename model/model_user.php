<?php
    class Utilisateur
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_utilisateur;
        private $login_utilisateur;
        private $mdp_utilisateur;
        private $mail_utilisateur;
        private $img_utilisateur;
        private $statut_utilisateur;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($login_utilisateur, $mdp_utilisateur, $mail_utilisateur)
        {
            $this->login_utilisateur = $login_utilisateur;
            $this->mdp_utilisateur = $mdp_utilisateur;
            $this->mail_utilisateur = $mail_utilisateur;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function getIdUtilisateur():int
        {
            return $this->id_utilisateur;
        }
        public function getLoginUtilisateur():string
        {
            return $this->login_utilisateur;
        }
        public function getMdpUtilisateur():string
        {
            return $this->mdp_utilisateur;
        }
        public function getMailUtilisateur():string
        {
            return $this->mail_utilisateur;
        }
        public function getImgUtilisateur():string
        {
            return $this->img_utilisateur;
        }
        public function getStatutUtilisateur():bool 
        {
            return $this->statut_utilisateur;
        }

        public function setIdUtilisateur($id):void
        {
            $this->id_utilisateur = $id;
        }
        public function setLoginUtilisateur($login):void
        {
            $this->login_utilisateur = $login;
        }
        public function setMdpUtilisateur($mdp):void
        {
            $this->mdp_utilisateur = $mdp;
        }
        public function setMailUtilisateur($mail):void
        {
            $this->mail_utilisateur = $mail;
        }
        public function setImgUtilisateur($img):void
        {
            $this->img_utilisateur = $img;
        }
        public function setStatutUtilisateur($statut):void 
        {
            $this->statut_utilisateur = $statut;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
        //Account creation:
        public function add_utilisateur($bdd):void
        {//object instance:
            $login = $this->getLoginUtilisateur();
            $mdp = $this->getMdpUtilisateur();
            $mail = $this->getMailUtilisateur();
            $img = $this->getImgUtilisateur();
            try
            {//SQL request 
                $req = $bdd->prepare('INSERT INTO utilisateur(login_utilisateur, mdp_utilisateur, mail_utilisateur, img_utilisateur) 
                VALUES (:login_utilisateur, :mdp_utilisateur, :mail_utilisateur, :img_utilisateur)');
                $req -> execute(array(
                    'login_utilisateur' => $login,
                    'mdp_utilisateur' => $mdp,
                    'mail_utilisateur' => $mail,
                    'img_utilisateur' => $img
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
                $req = $bdd->prepare('SELECT * FROM utilisateur WHERE mail_utilisateur = :mail_utilisateur');
                $req -> execute(array(
                    'mail_utilisateur' => $this->getMailUtilisateur(), 
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

