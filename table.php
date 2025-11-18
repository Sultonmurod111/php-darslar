<?php
$talabalar = [
	['ism'=>"Shamshod", 'familiya'=>"Abdullayev",'yoshi'=>16,'bahosi'=>5],
	['ism'=>"Ali", 'familiya'=>"Ozodov",'yoshi'=>15,'bahosi'=>4],
	['ism'=>"Doniyor", 'familiya'=>"Hakimov",'yoshi'=>17,'bahosi'=>5],
	['ism'=>"Asadbek", 'familiya'=>"G'ofurov",'yoshi'=>18,'bahosi'=>4],
	['ism'=>"Jamshid", 'familiya'=>"Olimboyev",'yoshi'=>16,'bahosi'=>3],
	['ism'=>"Abdulloh", 'familiya'=>"Ollanazarov",'yoshi'=>17,'bahosi'=>4]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
  <tr>
    <th>Ism</th>
    <th>Familiya</th>
    <th>Yosh</th>
    <th>Bahosi</th>
  </tr>
  </thead>
  <tbody>
	<?php foreach($talabalar as $key => $item): ?>
		<tr>
			<td><?= $item['ism'] ?></td>
			<td><?= $item['familiya'] ?></td>
			<td><?= $item['yoshi'] ?></td>
			<td><?= $item['bahosi'] ?></td>
		</tr>
		<?php endforeach; ?> 
  </tbody>
</table>
</body>
</html>