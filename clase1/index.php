<?php
$numero = 2;
echo $numero;
var_dump($numero);

$alumnos=array( 
    "Leandro",
    "Juan"
);

$alumnos1=["Leandro", "Juan"];

echo $alumnos;
echo "<br/>";
var_dump($alumnos);
echo "<br/>";
for($i=0;$i<count($alumnos);$i++){
    echo $alumnos[$i];
}
echo"<br/>";

$alumnosAsociativo=array(
    "nombre"=>"Leandro",
    "apellido"=>"Gil",
    "dni"=>"321312"
);
var_dump($alumnosAsociativo);
foreach($alumnosAsociativo as $clave=>$valor){
    echo $clave; echo $valor;
}

?>