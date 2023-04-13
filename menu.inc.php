<?php
	/*
	TAPŞIRIQ 1
	- Massivin bütün xanalarının qiymətini index.php ilə dəyişin
	- "index.php" dəyişəninə GET parametri ilə olan id parametri verin
	- id parametrinə unikal dəyişənlər verin
	Məs: index.php?id=page1
	*/
	$menu = array(
		"Home"=>"index.php", 
		"Page1"=>"page1.php", 
		"Page2"=>"page2.php", 
		"Page3"=>"page3.php", 
		"Table"=>"table.php");

?>	
<table width="100%">
	<tr>
		<td>
			<p>Menyu</p>
			<?php
				getMenu($menu);
			?>
		</td>
	</tr>
</table>