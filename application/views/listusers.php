<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Llista Usuaris</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="create">Registrat</a></li>
            <li><a href="create">Canvia contrasenya</a></li>
            <li><a href="modify">Modifica l'usuari</a></li>
            <li><a href="/codeigniterhelloworld/application/views/inici.php">Menu Principal</a></li>
          </ul>
        </div>
      </div>
      </div>
<div>
</div>
</br>
</br>
</br>
</br>
Crea el teu usuari aqu&iacute; <a href="create"><input type="button" class="btn btn-sm btn-success"  name="boton" value="Registrat"/></a></br>

foreach ($query->result() as $user)
{
   echo $user->title;
   echo $user->name;
   echo $user->body;
}
<!--<table id="taula" class="table table-hover table-condensed" border="1">
<thead>
        <tr>
	    <th>id</th>
            <th>Usuari</th>
            <th>Email</th>
            <th>Data naixement</th>
	    <th>Opcions</th>
	
        </tr>
    </thead>
    <tbody>
        <tr>
	    <td>1</td>
            <td>Francesc Sampere</td>
            <td>fsampere_4545@hotmail.com</td>
            <td>19/05/1973</td>
   	    <td><a href="modify/1"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="delete/1"><input type="button" class="btn btn-sm btn-danger" name="boton" value="Eliminar"/></td></a>	
        </tr>
        <tr>
	    <td>2</td>
            <td>Federico Torres </td>
            <td>fedtor@gmail.com</td>
            <td>01/01/1963</td>
	    <td><a href="modify/2"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="delete/2"><input type="button" name="boton" class="btn btn-sm btn-danger" value="Eliminar"/></td></a>
        </tr>
        <tr>
	    <td>3</td>
	    <td>Samanta Villar</td>
	    <td>sv77@yahoo.com</td>
	    <td>25/03/1977</td>
	    <td><a href="modify/3"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>
	    <a href="delete/3"><input type="button" name="boton" class="btn btn-sm btn-danger" value="Eliminar"/></td></a>
        </tr>
    </tbody>
</table>-->


<footer>
        <p align="center">&copy; Jordi Romero</p>
      <!--  <p><?php echo $hello;?></p> -->
	</footer>
</body>

</html>
