<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
   
    <?php
//on se connecte à la bdd
$db = new PDO('mysql:host=localhost;dbname=tchat','root', '');
//$db = new PDO(mysql:host=localhost;dbname=basemmi171da08', 'mmi171da08','ueg6');
//send.php?username=Badr&message=slt&perso=conan&bubble=white&power=opacity&likes=0
//on recupère le pseudo et la phrase depuis l'url :
//dire.php?pseudo=totophrase=bonjour...
$id = $_GET['id'];

$likes = $_GET['likes'];



$requete = 'UPDATE tchatv2 SET likes=likes+1 WHERE id=' . $id;

$db->query($requete);
?>
</body>
</html>