<?php
	require_once "edit.logic.php";
	include "../common/header.php";
	include "patientshow.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Firstname:</label>
			<input type="text" id="firstname" name="firstname" value="<?=$client['firstname']?>">
		</div>
		<div>
			<label for="name">Lastname:</label>
			<input type="text" id="lastname" name="lastname" value="<?=$client['lastname']?>">
		</div>
		<div>
			<label for="name">Telephone:</label>
			<input type="text" id="telephone" name="telephone" value="<?=$client['telephone']?>">
		</div>
		<div>
			<label for="name">address:</label>
			<input type="text" id="address" name="address" value="<?=$client['address']?>">
		</div>
		<label for="name">patient:</label>
<select id="select" name="select">
	<?php
		foreach($patients as $patient):
	?>
		<option value="<?=$patient['name']?>"><?=$patient['name']?></option>
	<?php
		endforeach;
	?>
</select>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>