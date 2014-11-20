<?php
	$titulo = "GET Y POST";
?>
<!DOCTYPE>
<html>
	<head>
    	<meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    
    <body>
    	<h1><?php echo $titulo; ?></h1>
        
        <?php include_once('menu.php');?>
        
        <h3>PASAR VARIABLE POR GET FUE:</h3>
        
        <?php echo $_GET['id']; ?>     
    </body>
</html>