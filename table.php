<?PHP

echo '<table align=center border=1>';

	for ($i = 198; $i <= 213; $i++) {
		echo '<tr>';
		for ($j = 341; $j <= 356; $j++) {
			if ($i * $j % 7 == 0)
				echo '<td bgcolor="Red">' . $i * $j . '</td>';
			else
				echo '<td>' . $i * $j . '</td>';
		}
		echo '</tr>';
	}

echo '</table>';

?>
