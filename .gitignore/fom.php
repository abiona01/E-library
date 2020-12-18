<?php
    if(isset($_POST["submit"])){
        echo $_POST["name"];
        echo $_POST["email"];
        echo $_POST["message"];
        

        if(empty($_POST["name"])){
            echo "Your name is required <br />";
        } else {
            echo htmlspecialchars($_POST["name"]);
        }
        if(empty($_POST["email"])){
            echo "Your email is required <br />";
        } else {
            echo htmlspecialchars($_POST["email"]);
        }
        if(empty($_POST["message"])){
            echo "Input a message <br />";
        } else {
            echo htmlspecialchars($_POST["message"]);
        }
        
?>
<form action="" class="action">
    <div class="input-field">
        <i class="material-icons prefix">contacts</i>
        <input type="text" class="contacts">
        <label for="Name" class="name">Your Name</label>
    </div>
    <div class="input-field">
        <i class="material-icons prefix">email</i>
        <input type="email" class="email">
        <label for="email" class="email">Your Email</label>
    </div>
    <div class="input-field">
        <i class="material-icons prefix">Message</i>
        <textarea id="message" name="materialize-textarea" cols="30" rows="10"></textarea>
        <label for="your message" class="your message">What do you think</label>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    </button>
</form>