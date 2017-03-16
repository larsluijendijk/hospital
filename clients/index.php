<?php
	require_once "index.logic.php";
	include "../common/header.php";
	include "patientshow.php";
?>
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Telephone</th>
				<th>Address</th>
				<th>Patient</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $client):
?>
			<tr>
				<td><?=$client['firstname']?></td>
				<td><?=$client['lastname']?></td>
				<td><?=$client['telephone']?></td>
				<td><?=$client['address']?></td>
				<td><?=$client['patient_id']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			    
				
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>