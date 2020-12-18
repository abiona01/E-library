<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="audioFile"/>
    <input type="submit" value="Upload Audio" name="save_audio"/>
    </form>
</body>
</html> -->


<?php

?> 

<script type="text/javascript" src="file.js">

    const app = document.getElementById()
    const logo = document.createElement()
    logo.src = 'logo.jpeg'

    var request = new XMLHttpRequest();
    request.open('GET', 'https://api.nytimes.com/svc/books/v3/lists.json', true);
    request.onload = function(){
       var data = JSON.parse(this.response);

       if (request.status >= 200 && request.status < 400){
           
       
       data.forEach((music)=> {
           console.log(music.title)
       }) 
    } else {
        console.log('error')
    }
}

    request.send()
</script> 
<?php

?>
