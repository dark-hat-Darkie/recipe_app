<?php 
    require_once "pdo.php";
    require_once "header.php";

    if(isset($_GET['id'])){
        $query = "SELECT * FROM recipe WHERE id=:id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ':id' => $_GET['id']
        ));
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$row){
            die("Invalid Recipe ID");
        }
    }



?>


<section class="container">
    <div class="recipe-s">
        <div class="recipe-single">
            <h2><?php echo $row['name']; ?></h2>
            <div class="content">
                <div class="recipe-cover" style="background: url('./img/<?php echo $row['img']; ?>') no-repeat center center/cover;">
                    <div class="rating"><p><span class="rate"><?php echo $row['rating']; ?></span> <span class="by">/</span><span class="total">10</span></p> </div>
                    <form class="rating-html">
                        <label>
                          <input type="radio" name="stars" value="1" />
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="2" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="3" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>   
                        </label>
                        <label>
                          <input type="radio" name="stars" value="4" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                        <label>
                          <input type="radio" name="stars" value="5" />
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                          <span class="icon">★</span>
                        </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                        <label>
                            <input type="radio" name="stars" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                      </form>
                </div>
                    <p><?php echo $row['description']; ?></p>
            </div>
        </div>
        <div class="sidebar">
            <h2>Categories</h2>
            <ul>
                <li>Category 1</li>
                <li>Category 1</li>
                <li>Category 1</li>
            </ul>
        </div>
    </div>    
</section>

<div class="clr"></div>

<section class="container">
    <div class="recipe-details">
        <div class="ingredient">
            <h2>Ingredients</h2>
            
              
            <?php
                $ingredients = explode(",", $row['ingredient']);
            ?>  
            
               
            <ul>
                <?php foreach($ingredients as $item) { ?>
                <li><?php echo $item ?></li>
                <?php } ?>
            </ul>
        </div>

        <div class="sidebar"></div>

    </div>
</section>


<?php require_once "footer.php"; ?>