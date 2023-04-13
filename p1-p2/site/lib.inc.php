<?php
	
	function getMenu($menu, $vertical=TRUE)
	{
		//if ($vertical) $br = '<br>'; else $br = '';
		$br = ($vertical) ? '<br>' : '';
		
		foreach ($menu as $menu=>$url)
		{
			echo '<a href="'.$url.'">'.$menu.'</a> '.$br;
		}
	}
	
	function getTable($cols=3, $rows=3, $color="yellow")
	{
		echo '<table border="3" cellpading="3" cellspacing="3">'."\n";
		for ($tr=1; $tr<=$rows; $tr++)
		{
			echo "\t<tr>\n";
			for ($td=1; $td<=$cols;$td++)
			{
				if ($tr==1 || $td==1) 
					echo "\t\t<th style='background:".$color.";'>".$tr*$td."</th>\n";
				else 
					echo "\t\t<td>".$tr*$td."</td>\n";
			}
			echo"\t</tr>\n";
		}
		echo "</table>";
	}
?>