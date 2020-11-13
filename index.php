<?php 

//Echo es una funcion para imprimir un texto
echo "Mi nombre es Gustavo Barrera García Urrutia";

//Constante
const NOMBRE = "Gustavo";

//Variable
$mainAddress = "Calle Baltazar 345 Miraflores" ;

//Booleans
$variableBoolean = FALSE;
$isTrue = TRUE;


//String
$nombreCompleto = "Gustavo Abelardo ";

$apellidoMaterno = "García Urrutia";

//Nulo 
$variableNula= NULL;
echo $variableNula;

//Numeric
$numeroEntero = 10;


//Double
$numeroDecimalConUnDigito = 10.5;
$numeroDecimalConDosDigitos = 10.54;
$numeroDecimalConTresDigitos = 10.543;

//Arrays

$frutas = ['Manzana','Pera','Platano','Uva'];
$manzana = $frutas[3];

$comidas = [
    0  => 'Papa a la huancaina',
    "1" => 'Lomo saltado',
    1.5 => 'Sopa seca',
    false => "Cau cau"
];

//Expresiones

$primerNumero =3;
$segundoNumero = 5;

$texto = "Hola";
$parrafo = " Mundo";

//Operadores Aritmeticos

$total = $primerNumero + $segundoNumero;
$parrafo =$texto+$parrafo;

$suma = $primerNumero + $segundoNumero;
$resta = $primerNumero - $segundoNumero;
$multiplicacion = $primerNumero * $segundoNumero;
$division = $primerNumero / $segundoNumero;

$modulo = $primerNumero % $segundoNumero;
$potencia = $primerNumero ** $segundoNumero;



//Operadores de Asignaciòn
$tercerNumero = 6;
$tercerNumero +=5;
$tercerNumero -=1;
echo $tercerNumero;

$saludo = "Hola ";
$saludo .=", Buenas Noches";

echo $saludo;

// &&  ->   AND (Proposición Y)
// ||  ->   OR  (Proposición O)

$tercerNumero && false;

?>

<body>
    <h1>Estoy en la clase de php</h1>
    <p><?php echo gettype($frutas); ?></p>

    <?php var_dump ($frutas);?>
    <?php print_r ($frutas);?>

    <?php echo $potencia ;?>
</body>