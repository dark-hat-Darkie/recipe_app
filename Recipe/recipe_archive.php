<?php
    require_once "pdo.php";
    require_once "header.php";
    require_once "functions.php";


    
    $search_msg = "";
    
    if(isset($_GET['search'])){
        $search_msg = "You searched for: ".$_GET['search'];
        
        $query = "SELECT * FROM recipe WHERE name LIKE :search";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ':search' => "%".$_GET['search']."%"
        ));
    }

    else {
        $query = "SELECT * FROM recipe";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

?>

<section class="recipes">
    <div class="container">
        <h2 class="category"><?php if($search_msg) echo $search_msg; else echo "All Recipes"; ?></h2>
    </div>
    <div class="container">
        
        <?php
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
            <a href="<?php echo "recipe_single.php?"."id=".$row['id']; ?>">
                <div class="recipe" style="background: url('./img/<?php echo $row['img']; ?>') no-repeat center center/cover;">
                        <div class="rating"><p><span class="rate"><?php echo $row['rating']; ?></span> <span class="by">/</span><span class="total">10</span></p> </div>
                        <h3 class="name"><?php echo $row['name']; ?></h3>
                        <p class="desc"><?php echo limit_text($row['description'], 15); ?></p>
                </div>
            </a>
        <?php } ?>


    </div>

</section>


<?php require_once "footer.php"; ?>