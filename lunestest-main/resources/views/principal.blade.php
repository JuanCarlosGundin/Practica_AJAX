<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD AJAX</title>
    <script src="js/ajax.js"></script>
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">
</head>
<body>
    <input type="text" onkeyup="leerJS()" id="filtro">
    <hr>
    <table id="main">
    </table>
    <hr>
    <form onsubmit="insertarJS(); return false;">
        <input type="text" id="nombre">
        <input type="file" id="foto">
        <input type="submit">
    </form>
    <hr>
    <p id="mensaje"></p>
    <hr>
</body>
</html>