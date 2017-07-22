<!DOCTYPE html>
<html>
<head>
	<title>Registro de fans</title>
</head>
<body>

{!!Form::open(['route'=>'registro','method'=>'post'])!!}
	
	<label>NOmbre:</label>
	<input type="text" name="nombre">

	<label>Apellido:</label>
	<input type="text" name="apellido">

	<button>Registrar</button>

{!!Form::close()!!}


</body>
</html>