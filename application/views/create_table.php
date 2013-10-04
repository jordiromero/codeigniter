<!DOCTYPE html>
<html>
<head>
<title>Creaci&oacute; d'usuaris</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="/datatables/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="/datatables/bootstrap/js/bootstrap.min.js"></script>

	
	
	</head>
	
	<body>
		<form action= "../user/" method="post">
	<table id="exemple" class="table table-striped"  width="100%">
	<thead>	

	<tr>
	<th> Nom </th>
	<th> Cognom 1 </th>
	<th> Cognom 2</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td> Usuari </td>
	<td> 1 </td>
	<td> 2</td>
	<td><input type="submit" value="Modifica" ></td>
	<td><input type="submit" value="Eliminar"></td>
	</tr>
	<tr>
	<td> Usuari</td>
	<td> 3 </td>
	<td> 4</td>
	<td><input type="submit" value="Modifica"></td>
	<td><input type="submit" value="Eliminar"></td>
	</tr>
	<tr>
	<td> Usuari </td>
	<td> 5 </td>
	<td> 6</td>
	<td><input type="submit" value="Modifica"></td>
	<td><input type="submit" value="Eliminar"></td>
	</tr>
	<tr>
	<td><input type="submit" value="Crea" id="create"></td>
	</tr>
	</tbody>
</table>
</form>
	
	</body>
</html>
