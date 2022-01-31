<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD AJAX</title>
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
    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span id="cerrar" class="close">&times;</span>
      <p id="Aqui"></p>
    </div>
  
  </div>
  
    <script src="js/ajax.js"></script>
</body>
</html>