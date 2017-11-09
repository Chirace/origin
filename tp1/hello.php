<?php

class Movie
{
    private $name = null;
    private $description = "une description";
    private $duration = 120;
    private $year;
    
    public $message = "Je suis un film\n";
   
    public function __construct($name = "", $year = "")
    {
        $this->name = $name;
        $this->year = $year;
    }
   
    public function getName()
    {
        return $this->name;
    }
   
    public function setName(String $name = "")
    {
        $this->name = $name;
    }
   
    public function myEcho()
    {
        print "\nNom du film : $this->name, Durée : $this->duration, Année de sortie : $this->year";
    }
   
    public function hello()
    {
        
        print "Hello !\n$this->message";
    }
}

$movie = new Movie;
echo $movie->message;
$movie->hello();
//$movie->myEcho();
$movie->setName("Godzilla");
echo $movie->getName();
$movie->myEcho();
$movie2 = new Movie("Gladiator", 2004);
$movie2->myEcho();