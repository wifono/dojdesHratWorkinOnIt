<?php 


if(isset($_POST["signin"])){
    CreateUser();
};
?>


<div class="regcont">
<div class="regpage formular">
    <p class="closebut">x</p>
    <h2>Registration</h2>

    <form action="index.php" method="post" id="regform">
        <input type="text" id="username" placeholder="Username" name="username" required><br>
        <input type="text" id="email" placeholder="email" name="email" required><br>
        <input type="text" id="password" placeholder="Password" name="password" required><br>
        <input type="text" id="repassword" placeholder="re-Password" name="repassword" required><br>

        <input type="submit" id="signin" name="signin" value="Register"> <br>       
    </form>

</div>
</div>
</div>