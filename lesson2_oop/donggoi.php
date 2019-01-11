<?php
// class LopCha{
//     public $ten;
//     protected $tuoi;
//     private $quequan;

    
// }

// class LopCon extends LopCha{
//     public function setQueQuan($val){
//         $this->quequan = $val;
//     }

//     public function getQueQuan(){
//         return $this->quequan;
//     }

//     public function setTuoi($val){
//         $this->tuoi = $val;
//     }
//     public function getTuoi(){
//         return $this->tuoi;
//     }
// }

// $cha = new LopCon();
// // $cha->setQueQuan('Hanoi');
// // echo $cha->getQueQuan();
// // echo "<br>";
// $cha->setTuoi(50);
// echo $cha->getTuoi();
// var_dump($cha);
class Person{
	function __construct(){
		echo "new star is born";
	}
}
class Women extends Person{
	function gotMarried(){
		echo "Call me Mrs. ";
	}
}
$jean = new Women();
echo $jean->gotMarried();



?>