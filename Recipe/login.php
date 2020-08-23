<?php
require_once "pdo.php";
require_once "header.php";

$error = "";

if(isset($_POST['submit'])){
    $sql = "SELECT * FROM user WHERE email= :email AND pass= :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':email' => $_POST['email'],
        ':pass' => $_POST['pass']
    ));
    
    $logged_in = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($logged_in){
        header("Location: recipe_archive.php");
    }
    else{
        $error = "Invalid Email and Pass combination";
    }
}
?>



<section class="container">
    <form class="container-form" method="post">
        <div class="wrapper2">
            <h2>Login to Continue</h2>
            <p class="noti" style="color:red"><?php echo($error); $error=""; ?></p> 
            <div class="field">
                <label for="email">Email</label>
                <input class="email" type="email" name="email">
            </div>
            <div class="field">
                <label for="pass">Password</label>
                <input class="pass" type="password" name="pass">
            </div>
            <div class="field">
                <input class="btn" type="submit" name="submit" value="Login">
            </div>

        </div>
    </form>
</section>


<?php require_once "footer.php"; ?>