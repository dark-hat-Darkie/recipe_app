<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/6791e28b0a.js" crossorigin="anonymous"></script>
    <title>RecipeMan : Your recipe guide</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h2>RecipeMan</h2>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recipe_archive.php">Recipes</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a class="current" href="#">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="container">
        <form class="container-form" action="">
            <div class="wrapper2">
                <h2>Register to RecipeMan!</h2>
                
                <div class="field">
                    <label for="name">Name</label>
                    <input class="name" type="text" name="name">
                </div>
                
                <div class="field">
                    <label for="email">Email</label>
                    <input class="email" type="email" name="email">
                </div>
                <div class="field">
                    <label for="pass">Password</label>
                    <input class="pass" type="password" name="pass">
                </div>
                <div class="field">
                    <input class="btn" type="submit" name="pass" value="Register">
                </div>

            </div>
        </form>
    </section>

    <footer>
        <div class="container">
            <p>RecipeMan&TRADE; &copy; 2020 | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>