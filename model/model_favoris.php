<?php
    class Favoris
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_favoris;
        private $nom_favoris;
        private $url_favoris;
        private $description_favoris;
        private $img_favoris;
        private $id_utilisateur;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($nom_favoris, $url_favoris)
        {
            $this->nom_favoris = $nom_favoris;
            $this->url_favoris = $url_favoris;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function getIdFavoris():int
        {
            return $this->id_favoris;
        }
        public function getNomFavoris():string
        {
            return $this->nom_favoris;
        }
        public function getUrlFavoris():string
        {
            return $this->url_favoris;
        }
        public function getDescriptionFavoris():string
        {
            return $this->description_favoris;
        }
        public function getImgFavoris():string
        {
            return $this->img_favoris;
        }
        public function getIdUtilisateur():string
        {
            return $this->id_utilisateur;
        }

        public function setIdFavoris($id):void
        {
            $this->id_favoris = $id;
        }
        public function setNomFavoris($nom_favoris):void
        {
            $this->nom_favoris = $nom_favoris;
        }
        public function setUrlFavoris($url_favoris):void
        {
            $this->url_favoris = $url_favoris;
        }
        public function setDescriptionFavoris($description_favoris):void
        {
            $this->description_favoris = $description_favoris;
        }
        public function setImgFavoris($img_favoris):void
        {
            $this->image_favoris = $img_favoris;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
    }

?>