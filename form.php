
<?php
/*$mail = new PHPMailer();
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '11c731ac4d4babe';
$mail->Password = '18d0fa0fe09d4ef';
$mail->SMTPSecure = 'tls';
$mail->Port = 2525; */

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($title)) {
        $errors[] = 'Title is empty';
    }
    if (empty($author)) {
        $errors[] = 'Author is empty';
    }


    if (empty($errors)) {
        $toEmail = 'quadratwemimo@gmail.com';
        $emailSubject = 'New email from your request form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Title: {$title}", "Author:", $author];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $_POST["title"], $_POST["author"], $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>