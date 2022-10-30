<?php
    class Bookmark
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_bookmark;
        private $nom_bookmark;
        private $url_bookmark;
        private $description_bookmark;
        private $img_bookmark;
        private $id_user;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($nom_bookmark, $url_bookmark)
        {
            $this->nom_bookmark = $nom_bookmark;
            $this->url_bookmark = $url_bookmark;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function getIdbookmark():int
        {
            return $this->id_bookmark;
        }
        public function getNombookmark():string
        {
            return $this->nom_bookmark;
        }
        public function getUrlbookmark():string
        {
            return $this->url_bookmark;
        }
        public function getDescriptionbookmark():string
        {
            return $this->description_bookmark;
        }
        public function getImgbookmark():string
        {
            return $this->img_bookmark;
        }
        public function getIdUser():string
        {
            return $this->id_user;
        }

        public function setIdbookmark($id):void
        {
            $this->id_bookmark = $id;
        }
        public function setNombookmark($nom_bookmark):void
        {
            $this->nom_bookmark = $nom_bookmark;
        }
        public function setUrlbookmark($url_bookmark):void
        {
            $this->url_bookmark = $url_bookmark;
        }
        public function setDescriptionbookmark($description_bookmark):void
        {
            $this->description_bookmark = $description_bookmark;
        }
        public function setImgbookmark($img_bookmark):void
        {
            $this->image_bookmark = $img_bookmark;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
    }

?>