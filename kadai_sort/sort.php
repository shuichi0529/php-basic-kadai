<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  function sort_2way(array $nums) {
    echo "昇順にソートします。<br>";
    sort($nums);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }

    echo "降順にソートします。<br>";
    rsort($nums);
    foreach ($nums as $num) {
      echo $num . "<br>";
    }
  }

  $nums = [15, 4, 18, 23, 10];

  sort_2way($nums);

  ?>
</p>
</body>
</html>

