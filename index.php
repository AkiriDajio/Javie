<?php

$connection = mysqli_connect('127.0.0.1', 'mysql', '', 'database');

if ( $connection == false )
{
	echo 'Не удалось Подключиться к базе данных!<br>';
	echo mysqli_connect_error();
	exit();
}

$result = mysqli_query($connection, "SELECT * FROM `articles_categorie`");
?>

<ul>
	<?php
		while ( ($cat = mysqli_fetch_assoc($result)) )
		{
			echo '<li>' . $cat['namecat'] . '</li>';
		}
	?>
</ul>



