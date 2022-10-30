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
        public function __construct($name_bookmark, $url_bookmark)
        {
            $this->name_bookmark = $name_bookmark;
            $this->url_bookmark = $url_bookmark;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
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
        public function getIdUser():string
        {
            return $this->id_user;
        }

        public function setIdbookmark($id):void
        {
            $this->id_bookmark = $id;
        }
        public function setNamebookmark($name_bookmark):void
        {
            $this->name_bookmark = $name_bookmark;
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
    }

?>