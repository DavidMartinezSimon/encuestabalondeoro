<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 4</title>
    <style>
        body{
            margin: 0;
            background-image: url("balondeoro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial;
            color: white;
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
        h1{
            background-color: #737373;
            height: 50px;
            margin-top: -21px;
            text-align: center;
            color: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        table{
            position: absolute;
            top: 80px;
            left: 150px;
            width: 450px;
            height: 200px;


        }
        input{
            background-color: transparent;
            width: 80%;
            height: 100%;
            color: white;
            text-align: right;
        }
        input:focus{
            background-color: white;
            color: black;
        }
        label{
            margin: 0;
            padding: 0px 0px 0px 60px;
            color: white;
        }
        .error{
            height: 100%;
            background-color: red;
            margin: 0;
            text-align: center;
        }
        td:last-of-type{
            margin: auto;
            text-align: center;
        }

    </style>
</head>
<body>

<p class='error'>La suma de porcentajes es menor a 100%</p>    <div id="cabecera">
    <form action="respuestabalondeoro.php" method="get">
        <h1>Resultados encuesta de fútbol, balon de oro</h1>
        <table>
            <tr>
                <td><label for="messi">Messi</label></td>
                <td><input type="number" id="messi" name="messi"> %</td>
            </tr>
            <tr>
                <td><label for="ronaldo">Cristiano ronaldo</label></td>
                <td><input type="number" id="ronaldo" name="ronaldo"> %</td>
            </tr>
            <tr>
                <td><label for="griezman">Griezmann</label></td>
                <td><input type="number" id="griezman" name="griezman"> %</td>
            </tr>
            <tr>
                <td colspan="3"><button>Enviar</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>