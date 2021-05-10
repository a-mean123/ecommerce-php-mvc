<?php

require_once("model.php");

class ModelBlog extends Model{
    private $id= NULL;
    private $titre;
    private $description;
    private $image;
    private $date;
   
    protected static $table = 'blog';
    protected static $primary = 'id';


    public function __construct( $titre = NULL, $description = NULL , $image = NULL , $date = NULL)
    {
        if (!is_null($titre) && !is_null($description) && !is_null($image) && !is_null($date)) {
            $this->titre = $titre;
            $this->description = $description;
            $this->image = $image;
            $this->date = $date;

           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;

    }
    public function getDescription(){
        return $this->description;

    }
    public function getImage(){
        return $this->image;

    }
    public function getDate(){
        return $this->date;

    }


}


?>