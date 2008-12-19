<?php
$title = 'Browsing Code by Package';
$selectedNav = 'code';
include_once($viewsDir . 'common/header.php');
?>
<h1>Browse Code by Class</h1>

<table>
<?php 
$classCount = $classes->count();

$columns = 4;

$perColumn = ceil($classCount / 4);

$i = 0;

for($row = 0 ; $row < $perColumn ; $row++) {
	echo '<tr>';
	for($col = 0 ; $col < $columns ; $col++) {
		$class = isset($classes[$perColumn*$col+$row]) ? $classes[$perColumn*$col+$row] : '';
		echo '<td>', $class->name, '</td>';
	}
	echo '</tr>';
}
?>
</table>
<?php include_once($viewsDir . 'common/footer.php'); ?>