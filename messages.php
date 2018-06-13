<?php

$db = new PDO('mysql:host=localhost;dbname=tchat','root', '');


$reponse = $db->query('SELECT * FROM tchatv2');


while ($donnees = $reponse->fetch())
{
    if($donnees['power']=="opacity"){
        $effect_class="shake-opacity shake-constant";
    }
    elseif($donnees['power']=="slow"){
        $effect_class="shake-slow shake-constant";
    }
    elseif($donnees['power']=="horizontal"){
        $effect_class="shake-horizontal shake-constant";
    }
    else{
        $effect_class="";
    }
?>
    <div id="<?php echo $donnees['id']; ?>" class="message-text <?php echo $effect_class; ?>">
    <img src="img/<?php echo $donnees['perso']; ?>.png" alt="">
    <span id="username"><?php echo $donnees['pseudo']; ?></span>
    <span id="message_data" class="txt<?php echo $donnees['bubble']; ?>"><?php echo htmlspecialchars($donnees['message']); ?></span>
    <span id="likes-box"><?php echo $donnees['likes']; ?> &nbsp;
        <i class="fas fa-heart"></i>
    </span>
    <span class="date-message"><?php echo $donnees['date']; ?></span>
</div>
<script>
   $('#<?php echo $donnees['id']; ?> #message_data ').html(function(i,html) {
            return html.replace(/:funny:/g, '<img style="width:22px;height:22px;" src="img/funny.png"/>');
        });
    $('#<?php echo $donnees['id']; ?> #message_data ').html(function(i,html) {
            return html.replace(/:alien:/g, '<img style="width:22px;height:22px;" src="img/alien.png"/>');
        });
        $('#<?php echo $donnees['id']; ?> #message_data ').html(function(i,html) {
            return html.replace(/:robot:/g, '<img style="width:22px;height:22px;" src="img/robot.png"/>');
        });
        $('#<?php echo $donnees['id']; ?> #message_data ').html(function(i,html) {
            return html.replace(/:star:/g, '<img style="width:22px;height:22px;" src="img/star.png"/>');
        });
       
        
</script>
<?php 

}

?>

