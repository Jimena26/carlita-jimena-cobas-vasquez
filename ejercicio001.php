<html>
<head>
     <title>title</title>
</head>
<body>
<h1>CATEGORIAS</h1>
<?php
require 'conexion.php';

$query = "SELECT * FROM  categoria";
$result = mysql_query($query)
or die("hubo un erroe al hacer la consulta" . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
        {
?>
<h2><?php echo $line['id']
        .'.-'. $line['nombre'] ?></h2>

<table border="1">
	    <tr>
	    	<th>id</th>
	    	<th>nombre</th>
	    	<th>stock</th>
	    	<th>categoria</th>
	    	<th>igv</th>
	    	<th>sexo</th>

</table>
  
         <?php }?>

    </body>
</html>





