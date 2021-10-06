<?php 

    include "mysql/db.php";
    include "mysql/cookie.php";
    Cookie();
    Connection();

    if(isset($_POST["submit"])){
        Create();
    }

?>

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

        <article class="info welcome animate__animated animate__backInUp">
            <h2>Vitajte</h2>
            <p>Vitajte na platforme Dojdeš Hrať? <br>
             Platforma je určená pre ľudí, ktorí sa chcú spojiť so svojimi spoluhráčmi, prípadne s náhodnými ľuďmi, a zahrať si spolu nejaké tie hry.</p>
        </article>

        <article class="info animate__animated animate__backInUp">
            <h2>Upozornenie</h2>
            <p>Stránka je stále vo vývoji, preto vás prosíme o trpezlivosť.</p>
        </article>
    
        <article class="info welcome animate__animated animate__backInUp">
            <h2>FAQ</h2>
            <p>V prípade akýchkoľvek otázok nás neváhajte kontaktovať. Kontaktný formulár nájdete na podstránke <a href="FAQ.php">FAQ</a>.</p>
        </article>

        <article class="info animate__animated animate__backInUp">
            <h2>About us</h2>
            <p>Informácie o ľuďoch, ktorí pracujú na tomto projekte.</p>
        </article>

        <article class="info animate__animated animate__backInUp">
            <h2>Team</h2>
            <p>Založ, alebo nájdi team s ktorým budeš hrávať.</p>
        </article>

   
    </section>

</main>

<?php 
    include "assets/partials/footer.php";
?>
