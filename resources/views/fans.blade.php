<!DOCTYPE html>
<html>
<head>
	<title>Lista de Fans</title>
</head>
<body>

<h1>Estos son los fans Got</h1>
	
	@foreach($listaFans as $fan)
		<h3>{{$fan->nombre}}</h3>
		<br>
		<h2>{{$fan->apellido}}</h2>
		<br><br><br>
	@endforeach

</body>
</html>