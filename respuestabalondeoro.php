<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados</title>
    <style>
        body{
            margin: 0;
            background-image: url("balondeoro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        #cabecera{
            position: fixed;
            width: 800px;
            height: 350px;
            left: 50%;
            top: 50%;
            margin-top: -150px;
            margin-left: -350px;
            background-color: rgba(12, 12, 12, 0.53);
            border-radius: 20px;
        }
        table{
            position: absolute;
            top: 40px;
            width: 500px;
            height: 200px;
        }
        #ronaldo{
            color: #e6ddcd;
        }
        #messi{
            color: #a8c3d1;
        }
        #griezman{
            color: #de9a92;
        }
        a{
            position: absolute;
            top: 250px;
            left: 200px;
            width: 400px;
            height: 40px;
            border-radius: 10px;
            background-color: #dddddd;
            border-right: 15px;
            text-decoration: none;
            text-align: center;
            color: black;
            padding-top: 25px;
        }

    </style>
</head>
<body>
<div id="cabecera">
    <table>
        <?php
        //registramos las variables
        $messi=$_GET["messi"];
        $ronaldo=$_GET["ronaldo"];
        $griezman=$_GET["griezman"];
        $error=0;
        if (($messi+$ronaldo+$griezman)==100){
            if ($messi>=1 && $ronaldo>=1 && $griezman>=1){
                echo ("<tr id='messi'><td>Messi</td>");
                echo ("<td>");
                for($i=1;$i<=$messi;$i++){
                    echo "º";
                };
                echo("</td></tr>");
                echo ("<tr id='ronaldo'><td>Cristiano Ronaldo</td>");
                echo ("<td>");
                for($j=1;$j<=$ronaldo;$j++){
                    echo "º";
                };
                echo("</td></tr>");
                echo ("<tr id='griezman'><td>Griezmann</td>");
                echo ("<td>");
                for($k=1;$k<=$griezman;$k++){
                    echo "º";
                };
                echo("</td></tr>");
            }
        }elseif (($messi+$ronaldo+$griezman)>100){
            if ($messi<0 || $messi>100){
                $error=$error+1;
            }
            if ($griezman<0 || $griezman>100){
                $error=$error+2;
            }
            if ($ronaldo<0 || $ronaldo>100){
                $error=$error+4;
            }
            $error=$error+8;
            header("Location: balondeoro.php?error=$error&messi=$messi&ronaldo=$ronaldo&griezman=$griezman");
        }
        elseif (($messi+$ronaldo+$griezman)<100) {
            if ($messi<0 || $messi>100){
                $error=$error+1;
            }
            if ($griezman<0 || $griezman>100){
                $error=$error+2;
            }
            if ($ronaldo<0 || $ronaldo>100){
                $error=$error+4;
            }
            $error=$error+16;
            header("Location: balondeoro.php?error=$error&messi=$messi&ronaldo=$ronaldo&griezman=$griezman");
        }
        ?>
    </table>
    <a href="balondeoro.php?messi=<?php echo $messi; ?>&ronaldo=<?php echo $ronaldo; ?>&griezman=<?php echo $griezman;?>">volver</a>
</div>
</body>
</html>