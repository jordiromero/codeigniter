<div class="container">
	

	Crea el teu usuari aqu&iacute; <a href="<?php echo base_url();?>index.php/users/createUser"><input type="button" class="btn btn-sm btn-success"  name="boton" value="Registrat"/></a></br></br>
	<table cellpadding="3" cellspacing="3" border="1" class="display table table-hover table-condensed" id="example">
		<thead>
        	<tr >
	   			<th>ID</th>
        		<th>Nom</th>
        		<th>Data naixement</th>
        		<th>Email</th>
	    		<th>Opcions</th>
	    	</tr>
	    </thead>
	    <tbody>	
			
			
    	<?php	foreach($query->result() as $row){?>
    		<tr class="odd_gradeX">
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->nom;?></td>
			<td><?php echo $row->data_naixement;?></td>
			<td><?php echo $row->correu_electronic;?></td>
			<td><a href='#/<?php echo $row->id;?>'><button class="btn btn-primary" type="button">Modificar</button></a>
				<a href='<?php echo base_url();?>index.php/users/deleteUser/<?php echo $row->id; ?>'><button class="btn btn-danger" type="button">Eliminar</button></a></td>
			<?php echo "</tr>"; } ?>
				
			
		</tbody>	
	</table>
	

	<script type="text/javascript">
			$(document).ready( function () {
			var oTable = $('#example').dataTable( {
				"sDom": 'RC<"clear">lfrtip',
				"aoColumnDefs": [
				{ "bVisible": true, "aTargets": [ 1 ] }
						]
				} );
			} );
	</script>


</div>
