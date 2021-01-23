<?php

include 'parser.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP проект</title>
</head>
<body>

<h1 style="text-align: center;">
<?php
echo Parse($string, '<div class="card__price">', '</div>');
?>
</h1>

    
</body>
</html>