<?php

class Work
{
    private $pic;
    private $company;
    private $positions;
    private $date1;
    private $date2;
    private $responsibilities;

    function __construct ($pic, $comp, $postition, $date1, $date2, $respon)
    {
        $this->setPic($pic);
        $this->setComp($comp);
        $this->setPos($postition);
        $this->setDate1($date1);
        $this->setDate2($date2);
        $this->setResp($respon);
    }

    // Getters
    public function getPicture() { return $this->pic; }
    public function getComp() { return $this->company; }
    public function getPos() { return $this->positions; }
    public function getDate1() { return $this->date1; }
    public function getDate2() { return $this->date2; }
    public function getResp() { return $this->responsibilities; }

    // Setters
    public function setPic($picture)
    {
       $this->pic = $picture;
    }

    public function setComp($compa)
    {
        $this->company = $compa;
    }

    public function setPos($pos)
    {
        $this->positions = $pos;
    }

    public function setDate1($dat1)
    {
        $this->date1 = $dat1;
    }

    public function setDate2($dat2)
    {
        $this->date2 = $dat2;
    }

    public function setResp($res)
    {
        $this->responsibilities = $res;
    }

    public function __toString()
    {
       
       $line = "<div class=\"col-sm\"><div class=\"card\" style=\"width: 18rem;\">";
       $line .= "<img src=\"" . $this->getPicture() . "\" class=\"card-img-top\" alt=\"...\">";
       $line .= "<div class=\"card-body\">";
       $line .= "<h5 class=\"card-title\">" . $this->getComp() . "</h5>";
       $line .= "<p class=\"card-text\"><b>Position:</b> " . $this->getPos() . "</p></div>";
       $line .= "<ul class=\"list-group list-group-flush\">";
       $line .= "<li class=\"list-group-item\">" . $this->getDate1() . " - " . $this->getDate2() . "</li>";
       $line .= "<li class=\"list-group-item\"><b>Responsibilities:</b> " . $this->getResp() . "</li></ul></div></div>";

       return $line;
    }
}

?>