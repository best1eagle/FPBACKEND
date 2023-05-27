
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>UPDATE INFORMATION</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.html"> AHMED DAHALAN</a></p>
        </div>

        <div class="right-links">
            <a href="#">UPDATE INFORMATION</a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
         
            <header>UPDATE INFORMATION</header>
            <form action="includes/edit.inc.php" method="post">

                <div class="field input">
                    <label for="id">id</label>
                    <input type="number" name="id" id="id" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">passowrd</label>
                    <input type="passowrd" name="passowrd" id="passowrd" value="" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="role">role</label>
                    <input type="number" name="role" id="role" value="" autocomplete="off" required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
            </form>
        </div>
      
      </div>
</body>
</html>