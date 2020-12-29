<?php
include("include/header.php");
include("include/config.php");
?>

<?php echo $alert; ?>

<div class="container">
    <div class="container center">
        <form action="form.php">
            <h3>Request A Book</h3>
            <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="contacts" name="name">
                            <label for="Name" class="name">Your Name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" class="email" name="email">
                            <label for="email" class="email">Your Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input type="text" class="title" name="title">
                            <label for="book title" class="book title">Book Title</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="author" name="author">
                            <label for="book author" class="book author">Book Author</label>
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