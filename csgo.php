<?php
include "assets/partials/head.php";
?>

<body class="home">

<?php 

    include "assets/partials/uppermenu.php";

    include "assets/partials/loginicons.php";

    include "assets/partials/loginpage.php";

    include "assets/partials/regpage.php";

    include "assets/partials/logo.php";

    include "assets/partials/gamemenu.php";
?>


<main>

    <section>

<?php 
    include "assets/partials/playerform.php"
?>

        <article class="info animate__animated animate__fadeIn">
                <h3> CSGO</h3>
            <div class="gallery">
                <a href="../random1/img/csgo.png">
                 <img src="../random1/img/csgo.png" alt="../random1/img/csgo.png">
                </a>
            </div>
        </article>

    </section>
</main>

 <?php 

include "assets/partials/footer.php";

?>
