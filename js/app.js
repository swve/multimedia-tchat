// Interactive Tchat 
// Ver 1.00
//fully created by Badr BENNASRI
// Mdr wallay c moi qui l'a fait de 0 

$(document).ready(function(){

  
    
   /* Audio */
   var macSound = document.createElement('audio');
   var suspensSound = document.createElement('audio');
   macSound.setAttribute('src', 'sound/mac.mp3');
   suspensSound.setAttribute('src', 'sound/suspens.mp3');

    var Bubble_color="";
    var Bubble_effect="";
    var Pers_name="User";
    
    /* Users Characters */
    $('#pers-conan').click(function() { Pers_name="conan"; $('.pers0').css("opacity","1"); $(this).css("opacity","0.5"); });
    $('#pers-prof').click(function() { Pers_name="prof"; $('.pers0').css("opacity","1"); $(this).css("opacity","0.5"); });
    $('#pers-erlich').click(function() { Pers_name="erlich"; $('.pers0').css("opacity","1"); $(this).css("opacity","0.5"); });
    $('#pers-batman').click(function() { Pers_name="batman"; $('.pers0').css("opacity","1"); $(this).css("opacity","0.5"); });
    $('#pers-bob').click(function() { Pers_name="bob"; $('.pers0').css("opacity","1"); $(this).css("opacity","0.5"); });
     /* Users Characters */

      /* Bubble colors */
      $('#bubble-white').click(function() { Bubble_color="white"; $('.b3bble').css("opacity","1"); $(this).css("opacity","0.5"); });
      $('#bubble-pink').click(function() { Bubble_color="pink";  $('.b3bble').css("opacity","1"); $(this).css("opacity","0.5"); });
      $('#bubble-green').click(function() { Bubble_color="green";  $('.b3bble').css("opacity","1"); $(this).css("opacity","0.5"); });
      /* Bubble colors */

        /* Bubble effects */
        $('.shake-opacity').click(function() { Bubble_effect="opacity";  $('.emojis span').css("opacity","1"); $('.shake-opacity').css("opacity","0.5");  });
        $('.shake-slow').click(function() { Bubble_effect="slow";  $('.emojis span').css("opacity","1"); $('.shake-slow').css("opacity","0.5");  });
        $('.shake-horizontal').click(function() { Bubble_effect="horizontal";  $('.emojis span').css("opacity","1"); $('.shake-horizontal').css("opacity","0.5");  });
        /* Bubble effects */

        $('img#wizz-tchat').click(function() { $('.tchat-box').addClass("shake-crazy"); });

        
        
        // Affichage 
        setInterval(function(){
            $.ajax({
                url:'messages.php',
                success:function(html){
                    $('.bt10').html(html);
                }
            });
        },500);
        

        $(document).on('click','.message-text span#likes-box',function () {
            var message_id = $(this).closest('div').attr('id');
           

           $.ajax({
            url : 'likes.php', // La ressource ciblée
            type : 'GET', // Le type de la requête HTTP.
            data : 'id='+message_id
         });

         iziToast.success({
            title: 'Message liké ! ',
            
        });

        });
        
        $('#message_data').html(function(i,html) {
                 return html.replace(/:funny:/g, '<img src="img/funny.png"/>');
             });
     
             $('span#color1').click(function() {
                $('div.tchat-box').css('background-image','linear-gradient(to top, #3F51B5 0%, #009688 100%)');
             });
             $('span#color2').click(function() {
                
                $('div.tchat-box').css('background-image','linear-gradient(to top, #E91E63 0%, #35282c 100%)');
             });

            

    $('.send-message').click(function() {
	

		var User_name=$('#username_input').val();
        var Message_txt = $('.text-send input').val();
        iziToast.success({
            title: 'Message envoyé ! ',
            message: Message_txt ,
        });

        /* Envoyer les données */
        
         // Audio 
         var ifmac = Message_txt.includes(":mac:");
         var ifsuspens = Message_txt.includes(":suspens:");
         if(ifmac==true){
             macSound.play();
         }
         else if (ifsuspens==true){
             suspensSound.play();
         }
         /////Audio

		$.ajax({
            url : 'send.php', // La ressource ciblée
            type : 'GET', // Le type de la requête HTTP.
            data : 'username=' + User_name + '&message=' + Message_txt + '&perso='+ Pers_name +'&bubble='+ Bubble_color +'&power='+ Bubble_effect +'&likes=0'
         });


    });
  

    $('button').click(function() {

        $('.how-to').slideUp('1');
        


    });

    $(document).keypress(function(e) {
        if(e.which == 13) {
            
		var User_name=$('#username_input').val();
        var Message_txt = $('.text-send input').val();
        iziToast.success({
            title: 'Message envoyé ! ',
            message: Message_txt ,
        });
        /* Envoyer les données */


         // Audio 
         var ifmac = Message_txt.includes(":mac:");
         var ifsuspens = Message_txt.includes(":suspens:");
         if(ifmac==true){
             macSound.play();
         }
         else if (ifsuspens==true){
             suspensSound.play();
         }
         /////Audio

		$.ajax({
            url : 'send.php', // La ressource ciblée
            type : 'GET', // Le type de la requête HTTP.
            data : 'username=' + User_name + '&message=' + Message_txt + '&perso='+ Pers_name +'&bubble='+ Bubble_color +'&power='+ Bubble_effect +'&likes=0'
         });

        
        }
    });
    
});