<?php 

$array = array(1,1,2,2,2,3,4,4);
$count = array_count_values($array);

foreach ($count as $number => $numberOfRepetitions) {
  echo "El número: ". $number. " se repite ". $numberOfRepetitions . " veces <br>";
}

for($x=1; $x<11; $x++){
  $array[] =$x;
}

//sort($array);
rsort($array);
print_r($array);

//Array Domensional

$cars = array ("Volvo","BMW","Toyota");

$volvo = $cars[0];
$bmv = $cars[1];
$toyota = $cars[2];

//echo "I like " .$volvo. ", " .$bmv. " and " .$toyota;

//echo count($cars);

$arrlength = count($cars);

for($x = 0; $x<$arrlength;$x++){
  echo $cars[$x];
  echo "<br>";
}


$age = array("Peter"=>"100","Ben"=>"37","Joe"=>"43");

//echo "Peter is ".$age['Peter']. "years old.";

foreach($age as $value){
  echo 'Indice:'.$indice. 'Valor: '.$value."<br>";
}

asort($age);
ksort($age);//Ordena por la llave
print_r($age);

$cars = array(
  array("Volvo",22,18),
  array("Bmv",15,13),
  array("Sab",5,2),
  array("Land Rover",17,15),
);

$volvo = $cars [0];

//print_r($cars[0]);
//echo $cars[0][0];

//echo $cars[0][0]."In Stock" .$cars[0][1].", sold". $cars[0][2]."<br>";
//echo $cars[1][0]."In Stock" .$cars[1][1].", sold". $cars[1][2]."<br>";
//echo $cars[2][0]."In Stock" .$cars[2][1].", sold". $cars[2][2]."<br>";
//echo $cars[3][0]."In Stock" .$cars[3][1].", sold". $cars[3][2]."<br>";

for ($roiw =0; $i < 4;$i++){
  for ($y =0; $y < 3;$y++){
    switch($y) {
      case 0: echo $cars[$i][$y]; break;
      case 1: echo ' In stock: ' . $cars[$i][$y]; break;
      case 2: echo ' Sold :' . $cars[$i][$y]; break;
      default: break;
    }
  }
  echo "<br>";
}


// Ordenamiento de arrays
//sort() - ordenar arrays en orden ascendente
//rsort() - ordenar arrays en orden descendente
//asort() - ordenar arrays asociativos en orden ascendente, acorde a su valor
//ksort() - ordenar arrays asociativos en orden ascendente, acorde a su indice
//arsort() - ordenar arrays asociativos en orden descendente, acorde a su valor
//krsort() - ordenar arrays asociativos en orden descendente, acorde a su indice


/**function nameOfFunction($paramen){
    *code to executed
    *return < informacion_a_retornar>
 * }
 * 
 
 * ** */

//$number = 5;

//@TODO documentacion de la funcion
 //@param $primerNumero
 //@param $segundoNumero

 function adicion(int $primerNumero, int $segundoNumero=0){

  return $primerNumero + $segundoNumero;
 }

 echo adicion(5,4);



 class Employee //Definicion de clase
 {
    private $firstName;
    private $lastName;
    private $age;
    

    public function getFirstName()
    {
      return $this->firstName;
    }

    public function __construct($firstName, $lastName, $age){
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->age = $age;
    }

    public function getlastName()
    {
      return $this->lastName;
    }
    public function getAge()
    {
      return $this->age;
    }
  }

$empleado = new Employee('Gustavo', 'Barrera','34');
echo gettype($empleado);
echo $empleado->getFirstName();
echo $empleado->getlastName();
echo $empleado->getAge();

?>