<?php
class Movies {
    public $title;
    public $movieDirector;
    public $year;
    public $cast;
    public $genre;
    public $oscar;

    function __construct($_title, $_movieDirector, $_year, $_cast, $_genre, $_oscar)
    {
        $this->title =$_title;
        $this->movieDirector =$_movieDirector;
        $this->year =$_year;
        $this->cast =$_cast;
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