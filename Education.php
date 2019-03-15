<?php
class Education
{
   private $pic;
   private $degreeType;
   private $major;
   private $year1;
   private $year2;
   private $gpa;

   function __construct($picture, $typeOfDegree, $major, $year1, $year2, $gpa)
   {
       $this->setPic($picture);
       $this->setDegree($typeOfDegree);
       $this->setMajor($major);
       $this->setYear1($year1);
       $this->setYear2($year2);
       $this->setGPA($gpa);
   }

   // Getters

   public function getPicture() { return $this->pic; }
   public function getDegree() { return $this->degreeType; }
   public function getMajor() { return $this->major; }
   public function getYear1() { return $this->year1; }
   public function getYear2() { return $this->year2; }
   public function getGPA() { return $this->gpa; }


   // Setters

   public function setPic($picture)
   {
       $this->pic = $picture;
   }

   public function setDegree($typeOfDegree)
   {
       $this->degreeType = $typeOfDegree;
   }

   public function setMajor($major)
   {
       $this->major = $major;
   }

   public function setYear1($year1) 
   {
       $this->year1 = $year1;
   }

   public function setYear2($year2)
   {
      $this->year2 = $year2;
   }

   public function setGPA($gpa)
   {
       $this->gpa = $gpa;
   }

   public function __toString()
   {
       
       $line = "<div class=\"col-sm\"><div class=\"card\" style=\"width: 18rem;\">";
       $line .= "<img src=\"" . $this->getPicture() . "\" class=\"card-img-top\" alt=\"...\">";
       $line .= "<div class=\"card-body\">";
       $line .= "<h5 class=\"card-title\">" . $this->getDegree() . "</h5>";
       $line .= "<p class=\"card-text\">" . $this->getMajor() . "</p></div>";
       $line .= "<ul class=\"list-group list-group-flush\">";
       $line .= "<li class=\"list-group-item\">" . $this->getYear1() . " - " . $this->getYear2() . "</li>";
       $line .= "<li class=\"list-group-item\">GPA: " . $this->getGPA() . "</li></ul></div></div>";

       return $line;
   }

}

?>