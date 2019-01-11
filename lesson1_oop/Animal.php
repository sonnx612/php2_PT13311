<?php
// Dinh nghia doi tuong 
class Animal{
	// dinh nghia thuoc tinh
	// var $name; // gia tri mac dinh = null
	// var $hairColor;
	// var $age;

	static $CODE = 'something';


	function runaway(){
		echo $this->name . ' is running!';
		$this->x()
	}

	function x(){}
}
class Duck{
	// dinh nghia thuoc tinh
	// var $name; // gia tri mac dinh = null
	// var $hairColor;
	// var $age;

	static $CODE = 'mot con vit xoe ra 2 cai canh';

}
// tao ra 1 thuc the moi thuoc kieu du lieu (doi tuong) Animal
$dog = new Animal();
$dog->name = 'Rex'; // gan gia tri cho thuoc tinh cua thuc the
// $dog->gender  = 'female';
// $dog->name = 'Alex';
$cat = new Animal();
$cat->name = 'Tom Cruise';
// $dog->name; // lay ra gia tri cua thuoc tinh
// var_dump($dog);
// echo "<br>";
// var_dump($cat);
// echo Animal::$CODE;

// Animal::$CODE = 1000;
// echo "<br>";
// echo Animal::$CODE;
// echo "<br>";
// echo Duck::$CODE;
$dog->runaway();
 
echo "<br>";
$cat->runaway();
 
 
 
 
 ?>