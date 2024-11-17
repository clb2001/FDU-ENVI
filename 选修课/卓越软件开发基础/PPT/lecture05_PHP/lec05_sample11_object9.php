<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class Artist {
		  const EARLIEST_DATE = 'January 1, 1200';
		  private static $artistCount = 0;
		  private $firstName;
		  private $lastName;
		  private $birthDate;
		  private $deathDate;
		  private $birthCity;
		  // notice constructor is using setters instead
		  // of accessing properties
		  function __construct($firstName, $lastName, $birthCity, $birthDate,
							   $deathDate) {
			$this->setFirstName($firstName);
			$this->setLastName($lastName);
			$this->setBirthCity($birthCity);
			$this->setBirthDate($birthDate);
			$this->setDeathDate($deathDate);
			self::$artistCount++;
		  }
		  // saving book space by putting each getter on single line
		  public function getFirstName() { return $this->firstName; }
		  public function getLastName() { return $this->lastName; }
		  public function getBirthCity() { return $this->birthCity; }
		  public function getBirthDate() { return $this->birthDate; }
		  public function getDeathDate() { return $this->deathDate; }
		  public static function getArtistCount() { return self::$artistCount; }
		  public function getEarliestAllowedDate () {
			return date_create(self::EARLIEST_DATE);
		  }
		  public function setLastName($lastName)
		  { $this->lastName = $lastName; }
		  public function setFirstName($firstName)
		  { $this->firstName = $firstName; }
		  public function setBirthCity($birthCity)
		  { $this->birthCity = $birthCity; }
		  public function setBirthDate($birthdate) {
			// set variable only if passed a valid date string
			$date = date_create($birthdate);
			if ( ! $date ) {
			  $this->birthDate = $this->getEarliestAllowedDate();
			}
			else {
			  // if very early date then change it to earliest allowed date
			  if ( $date < $this->getEarliestAllowedDate() ) {
				$date = $this->getEarliestAllowedDate();
			  }
			  $this->birthDate = $date;
			}
		  }
		  public function setDeathDate($deathdate) {
			// set variable only if passed a valid date string
			$date = date_create($deathdate);
			if ( ! $date ) {
			  $this->deathDate = $this->getEarliestAllowedDate();
			}
			else {
			  // set variable only if later than birth date
			  if ($date > $this->getBirthDate()) {
				$this->deathDate = $date;
			  }
			  else {
				$this->deathDate = $this->getBirthDate();
			  }
			}
		  }
		  public function outputAsTable() {
			$table = "<table>";
			$table .= "<tr><th colspan='2'>";
			$table .= $this->firstName . " " . $this->lastName;
			$table .= "</th></tr>";
			$table .= "<tr><td>Birth:</td>";
			$table .= "<td>" . date_format($this->birthDate,'d M Y');;
			$table .= "(" . $this->birthCity . ")</td></tr>";
			$table .= "<tr><td>Death:</td>";
			$table .= "<td>" . date_format($this->deathDate,'d M Y') . "</td></tr>";
			$table .= "</table>";
			return $table;
		  }
		 
		}

		class Art {
		  private $name;
		  private $artist;
		  private $yearCreated;
		  function __construct($year, $artist, $name) {
			$this->setYear($year);
			$this->setArtist($artist);
			$this->setName($name);
		  }
		  public function getYear() { return $this->yearCreated; }
		  public function getArtist() { return $this->artist; }
		  public function getName() { return $this->name; }
		  
		  public function setYear($year) {
			if (is_numeric($year))
			  $this->yearCreated = $year;
		  }
		  public function setArtist($artist) {
			if ((is_object($artist)) && ($artist instanceof Artist))
			  $this->artist = $artist;
		  }
		  public function setName($name) {
			$this->name = $name;
		  }
		  public function __toString() {
			$line = "Year:" . $this->getYear();
			$line .= ", Name: " .$this->getName();
			$line .= ", Artist: " . $this->getArtist()->getFirstName() . ' ';
			$line .= $this->getArtist()->getLastName();
			return $line;
		  }
		}
		class Painting extends Art {
		  private $medium;
		  function __construct($year, $artist, $name, $medium) {
			parent::__construct($year, $artist, $name);
			$this->setMedium($medium);
		  }
		  public function getMedium() { return $this->medium; }
		  public function setMedium($medium) {
			$this->medium = $medium;
		  }
		  public function __toString() {
			return parent::__toString() . ", Medium: " . $this->getMedium();
		  }
		}
		class Sculpture extends Art {
		  private $weight;
		  function __construct($year, $artist, $name, $weight) {
			parent::__construct($year, $artist, $name);
			$this->setWeight($weight);
		  }
		  public function getWeight() { return $this->weight; }
		  public function setWeight($weight) {
			if (is_numeric($weight))
			  $this->weight = $weight;
		  }
		  public function __toString() {
			return parent::__toString() . ", Weight: " . $this->getWeight()
			  ."kg";
		  }
		}
		class ArtPrint extends Painting {
		  private $printNumber;
		  function __construct($year, $artist, $name, $medium, $printNumber) {
			parent::__construct($year, $artist, $name, $medium);
			$this->setPrintNumber($printNumber);
		  }
		  public function getPrintNumber() { return $this->printNumber; }
		  public function setPrintNumber($printNumber) {
			if (is_numeric($printNumber))
			  $this->printNumber = $printNumber;
		  }
		  public function __toString() {
			return parent::__toString() . ", Print Number: "
			  .$this->getPrintNumber();
		  }
		}

		$picasso = new Artist("Pablo","Picasso","Malaga","Oct 25, 1881",
					  "Apr 8, 1973");
		// create the paintings
		$guernica = new Painting("1937",$picasso,"Guernica","Oil on canvas");
		$chicago = new Sculpture("1967",$picasso,"Chicago", 454);

		// create an array of art
		$works = array();
		$works[0] = $guernica;
		$works[1] = $chicago;
		// to test polymorphism, loop through art array
		foreach ($works as $art)
		  {
			// the beauty of polymorphism:
			// the appropriate __toString() method will be called!
			echo $art."<br>";
		  }

	?>
  </body>
</html>
