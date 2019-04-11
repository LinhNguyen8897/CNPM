<?php
$User_course = $_GET["User_course"];
<fieldset>
	<label>Mã khóa học:</label>
	<select style="margin-left: 1.8em;width: 20em;height: 2em;" name="User_course">
	<?php foreach ($rows3 as $key => $value) 
	{
		echo '<option value="'.$value["User_course"].'" >'.$value["User_course"].'</option>';
	}
	?> 
</select>
</fieldset>
?>