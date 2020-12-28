<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--Import Google Icon Font-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
   <div class="wrapper">
       <div class="nav">
       <div class="title">Chat with us 
        <a href="index.php" ><button class="btn right" >Home</button></a></li>
       </div>  
        </div>
       <div class="form">
           <div class="bot-inbox inbox">
               <div class="icon">
                   <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there</p>
                </div>
            </div>    
        </div>
       <div class="typing-field">
           <div class="input-data">
               <input id="data" type="text" placeholder="Type something here..." required>
            </div>
        </div>
        
        <button class= "btn right" id="send-btn" style="">Send <i class="send"></i></button>
        
            
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click",function(){
                $value = $("#data").val();
                $msg =  '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';    
                $(".form").append($msg);
                $('#data').val('');

                $.ajax({
                   url: 'message.php',
                   type: 'POST',
                   data: 'text='+$value,
                   success: function(result){
                       $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                })
            });
        });
    </script>
</body>
</html>