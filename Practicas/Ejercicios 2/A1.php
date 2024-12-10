<!DOCTYPE html>
<html>
<head>
	<title>Aviso</title>
	<style type="text/css">
		body{
	    box-sizing: border-box;
		margin: 0;
	    padding: 0 20px;
	    box-sizing: border-box;
}
p{
	text-align: center;
    background: #d31818;
    color: white; 
}
	</style>
</head>
<body>
    <H1> Tu numero es 0, intenta otro numero, porfavor !!</H1>
    <a href="E1.php">Regresar</a>
    <?php 
    session_start();
    session_destroy();
    ?>
</body>
</html>