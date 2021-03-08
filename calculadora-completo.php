
<?php
    $a = $_REQUEST['n1'];
    $b = $_REQUEST['n2'];
    $operation = $_REQUEST['op'];

    

    $result = 0;
    $error = false;
    switch($operation){
        case 1:
            $result = $a + $b;
        break;
        case 2:
            $result = $a - $b;
        break;
        case 3:
            $result = $a * $b;
        break;
        case 4: {        
            if($b == 0){
                $result = "El denominador no puede ser cero";
                $error = true;
            }
            else{
                $result = $a / $b;
            }           
        }
        break;        

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>This is the title</title>
    </head>
    <body>
        <form action="calculadora-completo.php" method="POST">
            Página 2 PHP<br/>
            N1:<input name="n1" value="<?php echo $a; ?>" /> <br/>
            N2:<input name="n2" value="<?php echo $b; ?>"/> <br/>
            <select name="op">
                <option value="1">Sumar</option>
                <option value="2">Restar</option>
                <option value="3">Multiplicar</option>
                <option value="4">Dividir</option>
            </select>
                <br/>
                
                <?php
                    if($error == true){
                ?>
                <div style="color:red; font-size:50px;">
                <?php echo $result ?>
                </div> 
                <?php
                    }
                    else{
                ?>  
                Resultado:<input value="<?php echo $result ?>" /> <br/>
                <?php
                    }
                ?>            

            <input type="submit" value="Calcular"/>
        </form>
        
    </body>
</html>