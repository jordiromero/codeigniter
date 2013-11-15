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
<table id="taula" class="table table-hover table-condensed" border="1">
<thead>
        <tr>
	    <th>id</th>
            <th>Nom</th>
            <th>Data naixement</th>
            <th>Email</th>
	    <th>Opcions</th>	
<?php
if($query->num_rows() > 0)
{
    foreach($query->result() as $row)
    {
    echo "<tr>";
	echo "<td>".$row->id."</td>";
	echo "<td>".$row->nom."</td>";
	echo "<td>".$row->data_naixement."</td>";
	echo "<td>".$row->correu_electronic."</td>";
	echo "<td>".'<a href="modify/id"><input type="button" name="boton" class="btn btn-sm btn-primary" value="Modificar"/></a>&nbsp;'. 
    '<a href="delete/$id"><input type="button" class="btn btn-sm btn-danger" name="boton" value="Eliminar"/></a>'."</td>";
	echo "</tr>";
    
}
}

?>
</table>


<footer>
        <p align="center">&copy; Jordi Romero</p>
      <!--  <p><?php echo $hello;?></p> -->
	</footer>
</body>

</html>
