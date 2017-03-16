<?php
	require_once "create.logic.php";
	include "../common/header.php";
	include "patientshow.php";
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">Firstname:</label>
			<input type="text" id="firstname" name="firstname">
		</div>
		<div>
			<label for="name">Lastname:</label>
			<input type="text" id="lastname" name="lastname">
		</div>
		<div>
			<label for="name">Telephone:</label>
			<input type="text" id="telephone" name="telephone"></textarea>
		</div>
		<div>
			<label for="name">Address:</label>
			<input type="text" id="address" name="address"></textarea>
		</div>
		<div>
			<label for="name">Patient:</label>
			<br>
			<select>
<?php
	foreach($patients as $patient):
?>
<option value="<?=$patient['name']?>"><?=$patient['name']?><br></option>
<?php
	endforeach;
?>
</select>
		</div>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>