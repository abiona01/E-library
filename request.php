<?php
include("include/header.php");
include("include/config.php");
include("form.php");
?>

<?php echo $alert; ?>

<div class="container">
    <div class="container center">
        <form action="" method="post">
            <h3>Request A Book</h3>
            <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="contacts" name="name" placeholder="Your Name">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" class="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input type="text" class="title" name="title" placeholder="Book Title">
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="author" name="author" placeholder="Book Author">
                        </div>
                        <button class="btn waves-effect waves-light blue-grey darken-1" type="submit" name="submit">Request
                        </button>
        </form>
    </div>
</div>
<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
include("include/footer.php");
?>