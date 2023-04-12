<html lang="en">
    <body>
        <h1>Pequeno teste Login</h1>
        <h2><a href="protegida.php">Protegida</a></h2>
        <hr/>

        <?php 
            session_start();
            if(isset($_SESSION['usuario'])){
        ?>
        <a href="logout.php"> Logout </a>
        <?php
            }
        ?>
    </body>
</html>