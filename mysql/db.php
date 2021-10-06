<?php 

function Connection() {
     global $connection;

     $connection = mysqli_connect("localhost","root","","dojdeshrat");

     if(!$connection){
         die("oh fuck");
     }
 
}



function Create() {
    global $connection;

    $username= $_POST["name"];
    $query = "INSERT INTO players(username) 
    VALUES('$username')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("ERROR!");
    }
}

function Read() {
    global $connection;
    global $result;

    $query= "SELECT username FROM players";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("ERROR!");
    }

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){

            echo '<p>'.$row["username"].'</p>';
        }
    }
}

function Update() {
    global $connection;
    $username = $_POST("name");

    $query = "UPDATE players SET username='$username'";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("ERROR!");
    }
}

function Delete() {
    global $connection;
    $username = $_POST["name"];
    $id = $_POST['id'];

    $query = "DELETE FROM players WHERE id = ";

    $result=mysqli_query($connection,$query);
    if(!$result){
        die("ERROR!");
    }
}

function ConnectionUser() {
    global $connection;

    $connection = mysqli_connect("localhost","root","","dojdeshrat");

    if(!$connection){
        die("oh fuck");
    }

}

function CreateUser() {
    global $connection;

    $username= $_POST["username"];
    $password= $_POST["password"];
    $email= $_POST["email"];

    
    // INPUT ESCAPE
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    //PASSWORD HASH
    $hashFormat = "$2y$10";
    $salt = "0lgRq6jZľBGFIhte54h3u";
    $hashFormat_salt = $hashFormat.$salt;
    $password = password_hash( $password, PASSWORD_BCRYPT);

    // DATA TO DATABASE
    $query = "INSERT INTO users(username,password,email) VALUES('$username', '$password', '$email')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("ERROR!");
    }
}

?>