<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainstyle.css">
    <link rel = "stylesheet" href = "fontello.css">
    <script src="JSBoton/main.js"></script>
    <title>Document</title>

</head>
<body style="background-color:#af92ca;">
<header class="header">
	<br><br><br>
	<div class="text-box">
        <a href="index.php" class="btn btn-white btn-animated">Inicio</a>
		<a href="index.php" class="btn btn-white btn-animated">Mision</a>
        <a href="index.php" class="btn btn-white btn-animated">Vision</a>
        <a href="index.php" class="btn btn-white btn-animated">Ubicacion</a>
	</div>
</header>
<div align="center">
    <h2 style="color:black;" class="title">Catalogo</h2>
</div>
    <center>
        <table width="920px" cellspacing="0" border="30" cellpadding="10" bordercolor="black" style="background-color:purple">
                <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        <tr>
        <td><?php echo "1"?></td>
        <td><img src="fotos/babominacion.jpeg"
        height="150" width="150" alt="Imagen"/></td>
        <td><?php echo "Bolso Abominable"?></td>
        <td><?php echo "$300"?></td>
        </tr>

        <tr>
        <td><?php echo "2"?></td>
        <td><img src="fotos/mhooty.jpeg"
        height="150" width="150" alt="Imagen"/></td>
        <td><?php echo "Mochila de Hooty"?></td>
        <td><?php echo "$350"?></td>
        </tr>

        <tr>
        <td><?php echo "3"?></td>
        <td><img src="fotos/pineda.jpeg"
        height="150" width="150" alt="Imagen"/></td>
        <td><?php echo "Pin Eda"?></td>
        <td><?php echo "$60"?></td>
        </tr>

        <tr>
        <td><?php echo "3"?></td>
        <td><img src="fotos/pinking.jpeg"
        height="150" width="150" alt="Imagen"/></td>
        <td><?php echo "Pin King"?></td>
        <td><?php echo "$60"?></td>
        </tr>
        
        </table>
    </center>
    
    <div class="up">
    <span class="icon icon-up-dir"></span>
    </div>
    <footer>
        <center>
    <p><br><br><br>Haydee Esmeralda Jimenez Guevara 5°J</p>
    </center>
</footer>
</body>
</html>