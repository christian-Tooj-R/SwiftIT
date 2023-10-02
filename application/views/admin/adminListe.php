<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste annonce</h1>
    <?php for($i = 0;$i<count($annonce);$i++){ ?>
        <a href="<?php echo site_url("adminController/listeService");?>/<?php echo $annonce[$i]['idannonce']; ?>"><?php echo $annonce[$i]['idannonce']; ?></a>
    <?php } ?>
</body>
</html>