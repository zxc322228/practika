<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		th, td {
			border: 1px solid #000;
			padding: 8px;
			text-align: left;
			vertical-align: top;
		}
		th {
			background-color: deeppink;
		}
	</style>
</head>
<body>	
	<?php
		// подключаем функцию fnGetData()
		require 'function.php';	
		// получаем возвращаемый функцией массив
		$data = fnGetData();
		
		// забираем данные по категории
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		function getPersonData($person) {
			$out = '<p><h1><strong>' . $person['surname'] . ' ' . $person['name'] . ' ' . $person['patronymic'] . '</strong></h1></p>';
			$out .= '<p><strong>Категория:</strong> ' . $person['category'] . '</p>';
			return $out;
		};
		
		function getPersonEdu($educations) {
			$out = '<h3>Образование:</h3>';
			$out .= '<table>';
			$out .= '<tr><th>Обучение</th><th>Институт</th><th>Квалификация</th><th>Специализация</th></tr>';
			foreach ($educations as $edu) {
				$out .= '<tr>';
				$out .= '<td>' . $edu['year_receipts'] . ' - ' . $edu['year_release'] . '</td>';
				$out .= '<td>' . $edu['institution'] . '</td>';
				$out .= '<td>' . $edu['qualification'] . '</td>';
				$out .= '<td>' . $edu['specialty'] . '</td>';
				$out .= '</tr>';
			}
			$out .= '</table>';
			return $out;
		};
		
		function getPersonCours($courses) {
			$out = '<h3>Курсы:</h3>';
			$out .= '<table>';
			$out .= '<tr><th>Наименование</th><th>Продолжительность</th><th>Цена</th></tr>';
			foreach ($courses as $course) {
				$out .= '<tr>';
				$out .= '<td>' . $course['name'] . '</td>';
				$out .= '<td>' . $course['duration'] . '</td>';
				$out .= '<td>' . $course['price'] . '</td>';
				$out .= '</tr>';
			}
			$out .= '</table>';
			return $out;
		}
		
		// выводим персональные данные
		echo getPersonData($person);
		// выводим данные об образовании
		echo getPersonEdu($educations);
		// выводим данные о курсах
		echo getPersonCours($courses);
	?>
	
</body>
</html>