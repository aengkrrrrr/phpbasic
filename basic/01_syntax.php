<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php basic</title>
</head>
<body>
  <h1>This is the title</h1>
  <?php 
    # echo 'hello world';
  ?>
  <h2>변수</h2>
  <?php
    $name = '김동주';
    echo $name.'님 반갑습니다.';
    echo $name1;
  ?>
  <hr>
  <?php
    $name = '김동주';
    // echo "$name 님 반갑습니다.";  //김동주님 반갑습니다
    echo '$name 님 반갑습니다.';  //$name 님 반갑습니다.
    echo `$name 님 반갑습니다.`;  //불가
  ?>
</body>
</html>