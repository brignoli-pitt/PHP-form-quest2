
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire thanks</title>
</head>
<body>

    <p>Merci <?= $_POST['firstname'] . " " . $_POST['lastname']; ?> de nous avoir contacté à propos de "<?= $_POST['subject']; ?>".
Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['email']; ?> ou par téléphone au <?= $_POST['phone']; ?> dans les plus brefs délais pour traiter votre demande : 
<?= $_POST['message']; ?></p>
</body>
</html>