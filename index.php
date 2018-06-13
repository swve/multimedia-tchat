<!DOCTYPE html>
<html lang="en">
<!-- 

// Interactive Tchat + Bootstrap 
// Ver 1.00
//fully created by Badr 
// Mdr wallay c moi qui l'a fait de 0 :'(
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iziToast.min.css">
    <link rel="stylesheet" type="text/css" href="css/csshake.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <title>Exo Boostrap</title>
</head>

<body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/iziToast.min.js" type="text/javascript"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bootstrap TP Final</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="" id="navbarColor02">

                <div class="my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#actus">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tchat">Tchat</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="home" >
        <video style="opacity:0.5;" loop="" autoplay="autoplay" muted >
            <source src="video/video.mp4" type="video/mp4" />
            <source src="video/Slow_Typer.webm" type="video/webm" />
            <source src="video/Slow_Typer.ogv" type="video/ogg" />
        </video>
        <div id="zoneintro">
            <p id="textintro">Bienvenue sur le site TP Boostrap</p>
           
        </div>
    </div>

<div>
    <div class="container" id="actus" style="height:800px;">
        <br><br><br><br>
        <div class="row">
            <div class="col-6">
                <h2>Premier titre </h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis, 
                </p>
            </div>
            <div class="col-6">
                <video src="video/mac.mp4" controls ></video>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-6">
            <video src="video/run.mp4" controls ></video>
               
            </div>
            <div class="col-6">
            <h2>Deuxième titre </h2>
                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam illo soluta ipsum vero perspiciatis,  
                </p>
            </div>
        </div>
    </div>
    </div>
    <br>
  
</div>



    <div id="tchat" style="height: 700px;padding:20px;">
    <br><br>
    <center>
    <h1>Tchat</h1> <span class="tchat-things">Couleur de tchat : </span> <span id="color1" class="tchat-things">1 </span> <span id="color2" class="tchat-things">2</span><br> <br>
        <?php include 'tchat.php';?>
        
        </center>
    </div>
    



    <div style="height: 700px;">
        <!-- Formulaire -->

	 <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
   <br><br>
                    <h1>Contact</h1><br>
   
                   <form id="form">
                       <div class="form-group row">
                           <label for="email" class="col-lg-2">Adresse Email :</label>
                           <div class="col-lg-9">
                               <input type="email" class="form-control" placeholder="exemple@mail.fr" id="email">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nom" class="col-lg-2">Nom :</label>
                           <div class="col-lg-9">
                               <input type="text" class="form-control" id="nom">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="prenom" class="col-lg-2">Prénom :</label>
                           <div class="col-lg-9">
                               <input type="text" class="form-control" id="prenom">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="date" class="col-lg-2">Date :</label>
                           <div class="col-lg-9">
                               <input type="date" class="form-control" id="date">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="commentaire" class="col-lg-2">Commentaire :</label>
                           <div class="col-lg-9">
                               <textarea class="form-control" id="commentaire" placeholder="Votre commentaire" style="min-height: 200px"></textarea>
                           </div>
                       </div>
                       <button type="submit" class="btn btn-primary">Envoyer</button>
                   </form>
   
                   </div>
               </div>
            </div>
        </div>
   
   <!-- / Formulaire -->
    </div>
</body>

</html>