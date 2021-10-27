<html>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="diseñoe.css">
     <title>Document</title>
     </head>
     <body>
<?php
$usuario= $_REQUEST[ID];
$contraseña= $_REQUEST[Clave];
if ($usuario=='3defebrero' && $contraseña== 'estacioneaqui')
{
    echo "<form action 'calcular.php' mehod='post'>
    <div>
    <h1> Determine la cantidad de horas que desee <input type='text' name='horas'>
    </div>

    <imput type='submit' value='enviar'>
    </form>;
}
else echo "el usuario o contraseña que ingreso es incorrecto <br> 
<a href='index.html'> VOLVER </a>"
?>
</body>
</html>