<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="création d'un formulaire en utilisant des classe">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire via Classe</title>
</head>
<body>
<div class="container">
    <?php
    require 'Class/Form.php';



    $form = new \PDO\Form($_POST);

    echo '<br/';
    echo $form->create('$_POST');
    echo $form->input('username');
    echo $form->select();
    echo $form->checkbox();
    echo $form->btnRadio();
    echo $form->textarea();
    echo $form->submit();
    echo $form->endForm();
    ?>

</div>


</body>
</html>


