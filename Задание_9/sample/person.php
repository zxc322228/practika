<?php
	$person = array(
		'id_personnel' => 1, 
		'surname' => 'Бородина', 
		'name' => 'Ксения', 
		'patronymic' => 'Алексеевна', 
		'post' => 'Преподаватель', 
		'main_post' => '', 
		'level_edu' => 'Высшее профессиональное ', 
		'experience_total' => 21.3, 
		'experience_college' => 14.5, 
		'email' => '', 
		'site' => '', 
		'unit' => 'Преподаватели', 
		'note' => '', 
		'actual' => 1, 
		'hidden' => 0
	);

	if(!array_key_exists('category', $person)) {
		$person['category'] = "Соответствие занимаемой должности";
	}

	echo $person['category'] . "<br>";

	var_dump($person);
?>