<?php
class LopCha{
    var $ten;
    protected $tuoi;
    private $quequan;

    
}

class LopCon extends LopCha{
    public function setQueQuan($val){
        $this->quequan = $val;
    }

    public function getQueQuan(){
        return $this->quequan;
    }

    public function setTuoi($val){
        $this->tuoi = $val;
    }
    public function getTuoi(){
        return $this->tuoi;
    }
}

$cha = new LopCon();
// $cha->setQueQuan('Hanoi');
// echo $cha->getQueQuan();
// echo "<br>";
$cha->setTuoi(50);
echo $cha->getTuoi();
var_dump($cha);




?>