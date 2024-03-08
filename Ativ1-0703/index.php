<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pw</title>
</head>
<body>
    <?php
        if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['operacao'])){
        
        if($_GET['operacao']=="adicao"){
            echo $_GET['x'] + $_GET['y'];
        }else if($_GET['operacao']=="subtracao"){
            echo $_GET['x'] - $_GET['y'];
        }else if($_GET['operacao']=="multiplicacao"){
            echo $_GET['x'] * $_GET['y'];
        }else if($_GET['operacao']=="divisao"){
            echo $_GET['x'] / $_GET['y'];
        }
    }
    ?>
</body>
</html>