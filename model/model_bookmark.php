<?php
    class Bookmark
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        private $id_bookmark;
        private $name_bookmark;
        private $url_bookmark;
        private $description_bookmark;
        private $img_bookmark;
        private $id_user;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($url_bookmark)
        {
            $this->url_bookmark = $url_bookmark;
        }
        /*---------------------------------------------
                        GETTERS
        ---------------------------------------------*/
        public function getIdBookmark():int
        {
            return $this->id_bookmark;
        }
        public function getNameBookmark():string
        {
            return $this->name_bookmark;
        }
        public function getUrlBookmark():string
        {
            return $this->url_bookmark;
        }
        public function getDescriptionBookmark():string
        {
            return $this->description_bookmark;
        }
        public function getImgBookmark():string
        {
            return $this->img_bookmark;
        }
        public function getIdUser():int
        {
            return $this->id_user;
        }
        /*---------------------------------------------
                        SETTERS
        ---------------------------------------------*/
        public function setIdBookmark($id):void
        {
            $this->id_bookmark = $id;
        }
        public function setNameBookmark($name_bookmark):void
        {
            $this->name_bookmark = $name_bookmark;
        }
        public function setUrlBookmark($url_bookmark):void
        {
            $this->url_bookmark = $url_bookmark;
        }
        public function setDescriptionBookmark($description_bookmark):void
        {
            $this->description_bookmark = $description_bookmark;
        }
        public function setImgBookmark($img_bookmark):void
        {
            $this->img_bookmark = $img_bookmark;
        }
        public function setIdUser($id_user):void
        {
            $this->id_user = $id_user;
        }
    }

?>