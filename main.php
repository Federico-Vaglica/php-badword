<?php
    $name = $_GET['name'];
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ex earum facilis autem et aliquid debitis harum, vel temporibus neque quo quia quasi eum doloremque molestiae alias quam fugit inventore!';
    $newText = str_replace($name,'***',$text,$counter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>La badword e':</h4> <p><?php echo $name; ?></p>
    <h4>Il testo Originale e' : </h4> <p><?php echo $text; ?></p>
    <h4>Questo e' il testo modificato : </h4> <p><?php echo $newText; ?></p>
    <h4>Questo e' il contatore delle parole modificate:</h4> <p><?php echo $counter; ?></p>
    
</body>
</html>