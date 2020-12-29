<?php
include("form2.php");
?>
<?php echo $alert; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alert-success{
        z-index: 1;
        background: #D4EDDA;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #3AD66E;
        border-radius: 4px;
      }

      .alert-error{
        z-index: 1;
        background: #FFF3CD;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #FFA502;
        border-radius: 4px;
      }
    </style>
</head>
<body>
    
</body>
</html>
<footer class="page-footer blue-grey darken-2">
        <section class="section container center-align" id="Let Me Know What You Feel">
            <div class="row">
                <div>
                    <h4>Let Us Know What You Feel</h4>
                    <form action="" class="action" method="post">
                        <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="contacts" name="name" placeholder="Your Name">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" class="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">Message</i>
                            <textarea id="message" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn waves-effect waves-light blue-grey darken-1" type="submit" name="action">Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="container center-align"><i class="material-icons prefix">copyright</i>stream 1 team 3</div>
                
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="materialize/js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script> -->
    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>
</html>