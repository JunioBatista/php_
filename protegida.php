<?php   
    session_start();
    if(!isset($_SESSION['usuario']))
        header ("location: form_login.php", true, 301)
    else {
>?
<html>
    <body>
        <h1>Olá <php echo($_SESSION['usuario']) ?></h1>
        <h2><a href="session.php"> Retornar</h2>
    </body>
</html>
<?php
    }
?>