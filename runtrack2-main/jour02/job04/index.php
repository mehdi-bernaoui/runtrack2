<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) { 
            print "FizzBuzz<br>"; 
        } 
        else if ($i % 3 === 0) { 
            print "Fizz<br>"; 
        } 
        else if ($i % 5 === 0) { 
            print "Buzz<br>"; 
        } 
        else { 
            print $i . "<br>"; 
        } 
      }
    ?>
</body>
</html>