<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
  </head>
  <body>
    <body>
  <!-- 1. Crear una variable n y validar que sea un número positivo. -->
  <?php
  $n = 1;
  if ($n>0) {
      echo "n n es un número positivo";
  }else {
    echo "no es un número positivo";
  }
  ?>
  <br><hr>
<!-- 2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10. -->
  <?php
  $n1=2;
  $n2=9;
  if (($n1>1) & ($n2<10)) {
     echo "n es un número mayor a 1 y menor a 10";
  } else {
    echo "n no es un número mayor a 1 y menor a 10";
  }
  ?>
  <br><hr>
<!-- 3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2 -->

  <?php
    $n1=11;
    $n2=1;
    if (($n1>10) or ($n2<2)) {
          echo "n es un número mayor a 10 o menor a 2";
    }else {
          echo "n no es un número mayor a 10 o menor a 2";
    }
  ?>
  <br><hr>
<!-- 4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.  -->
<?php
// 4.1  Si numero1 > numero2, muestre la suma sola. Si es menor, que muestre la resta sola.
$numero1=2;
$numero2=1;
if ($numero1>$numero2) {
     echo "la suma es igual a "  . ($numero1 + $numero2);
}else {
    echo "la resta es igual a "  . ($numero1 - $numero2);
}
 ?>
 <br><hr>
 <?php
 // si numero1 > numero2, muestre la resta sola.
 if ($numero1>$numero2) {
      echo "la resta es igual a "  . ($numero1 - $numero2);
 }
 <br><hr>
 <?php
 // 4.2 si numero2 > numero1, muestre la multiplicación, la división entera y el resto de la división.
 $numero1=2;
 $numero2=10;
 if ($numero2>$numero1) {
  echo "la multiplicacion es igual a "  . ($numero1*$numero2);
}else {
  echo "la multiplicacion es igual a"  . ($numero2*$numero1);
}
  ?>

 <br><hr>
<?php
$numero1=2;
$numero2=10;
$div1=(floor($numero2/$numero1));
if ($numero2>$numero1){
    echo "la división entera es igual a ".$div1;
}

?>

 <br><hr>
<?php
$numero1=2;
$numero2=10;
$resto= fmod($numero2,$numero1);
if ($numero2>$numero1){
    echo "el resto es igual a  " . $resto;
}

?>

 <br><hr>
 <?php
 // Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
 $numero1=2;
 $numero2=2;
 if ($numero1==$numero2) {
      echo "Los números ingresados son iguales";
 }
 ?>

  </body>

  </html>
