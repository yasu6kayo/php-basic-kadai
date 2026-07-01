<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $item = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($item as $index => $value) {
      echo "{$index}:{$value}<br>";
    }
    ?>
  </p>
  
</body>
</html>