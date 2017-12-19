<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
</head>
<body>
	<p>Hello World!!! 
		@foreach($pruebas as $prueba)
{!! $prueba->nombre.' '.$prueba->apellido !!}
	@endforeach  </p>
</body>
</html>