<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	Contenido Email
	<p>Recibiste un Mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }} </p>
	<p><strong>Asunto</strong></p> {{ $msg['subject']}}
	<p><strong>Contenido</strong></p> {{ $msg['content']}}
</body>
</html>