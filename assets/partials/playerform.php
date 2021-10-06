<?php 

    include "mysql/db.php";
    Connection();

    if(isset($_POST["submit"])){
        Create();
    }

?>

<article class="formular animate__animated animate__backInLeft">
    <form id="playerform" action="csgo.php" method="POST">

    <input type="text" id="playername" placeholder="Username" name="name">
    <button type="submit" id="submitform" class="btn-default"  name="submit">Ok</button>

        <h3>Logged</h3> 

    <div class="players">

        <?php 
             Read();
        ?>

    </div>

    </form>

</article>