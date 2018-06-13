<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tchat app</title>
</head>

<body>
    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="js/app.js"></script>
    <div class="how-to">
    <br>
                    <img src="img/howto.png" style="    width: 776px;" alt="">
                    <br><br>
                    <button type="button" class="btn btn-success">D'accord</button>
    </div>
    <div class="notifiate">
    ohh
    </div>
    <div class="tchat-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 left-box">
                    <h1>Identité </h1>
                    <h1>Nom : </h1>
                    <input id="username_input" type="text">
                    <h1>Personnage : </h1>
                    <img id="pers-conan" class="pers0" src="img/conan.png" alt="">
                    <img id="pers-prof" class="pers0" src="img/prof.png" alt="">
                    <img id="pers-erlich" class="pers0" src="img/erlich.png" alt="">
                    <img id="pers-batman" class="pers0" src="img/batman.png" alt="">
                    <img id="pers-bob" class="pers0" src="img/bob.png" alt="">
                    <h1>Bubble : </h1>
                    <img id="bubble-white" class="b3bble" src="img/white.png" alt="">
                    <img id="bubble-pink" class="b3bble" src="img/pink.png" alt="">
                    <img id="bubble-green" class="b3bble" src="img/green.png" alt="">
                    <br>
                    <img id="wizz-tchat" style="margin-top:8px;" src="img/wizz.png" alt="">
                </div>
                <div class="col-10">
                    <div class="bt10">
                     
                    </div>
                   
                    <div class="box-send">
                        <div class="emojis">

                            <span class="tchat-things">Emojis : </span>
                            <img src="img/funny.png" alt=""> :funny:
                            <img src="img/alien.png" alt=""> :alien:
                            <img src="img/robot.png" alt=""> :robot:
                            <img src="img/star.png" alt=""> :star: &nbsp;
                            <span class="tchat-things">Pouvoirs : </span>
                            &nbsp;
                            <span id="pow3er" class="shake-opacity">
                                <img id="powers opa" class="eff3cts" src="img/chat.png" alt=""> Effet 1 
                            </span>
                            &nbsp;
                            <span id="pow3er" class="shake-slow">
                                <img id="powers slo"  class="eff3cts" src="img/chat.png" alt=""> Effet 2
                            </span>
                            &nbsp;
                            <span id="pow3er" class="shake-horizontal">
                                <img id="powers hor"  class="eff3cts" src="img/chat.png" alt=""> Effet 3
                            </span>

                        </div>
                        <div class="text-send">
                            <input type="text" placeholder="Entrez un message ici , tapez le code des emojis pour les envoyer     ">
                            <span class="send-message">Envoyer</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</body>

</html>