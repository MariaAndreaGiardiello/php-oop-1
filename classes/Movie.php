<?php
class Movie {
    public $title;
    public $movieDirector;
    public $year;
    public $producer;
    public $genre;
    public $oscar;

    function __construct($_title, $_movieDirector, $_year, $_producer, $_genre, $_oscar)
    {
        $this->title =$_title;
        $this->movieDirector =$_movieDirector;
        $this->year =$_year;
        $this->producer =$_producer;
        $this->genre =$_genre;
        $this->oscar =$_oscar;
    }

    public function getOscar() {
        if($this->oscar == true) {
            return $this->oscar = 'Vincitore premio Oscar';
        }
        return 'No Oscar';
    }
}
?>