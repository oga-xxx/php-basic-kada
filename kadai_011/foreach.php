<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題11</title>
</head>
<body>
  <?php
  $personal_data = ['名前' => 'たまねぎ', '値段' => 200, '産地' => '北海道'];

  foreach ($personal_data as $key => $value) {
    echo "{$key}:{$value}<br>";
  }
  ?>
</body>
</html>