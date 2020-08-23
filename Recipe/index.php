<?php
    session_start();
    require_once "pdo.php";
    require_once "header.php";


    if(isset($_GET['search'])){
        header("Location: recipe_archive.php?"."search=".$_REQUEST['search']);
    }
?>

<section class="cover">
    <div class="cover-overlay">
        <div class="container">
            <div class="cover-text">
                <h2>Search Millions of Recipes in one place!</h2>

                <form method="get">
                    <input type="text" placeholder="&#xF002; Search recipes here" name="search">
                </form>

            </div>
        </div>
    </div>
</section>


<?php require_once "footer.php"; ?>