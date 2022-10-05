<html> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <link rel="stylesheet" href="./Style/Style.css">
        
    </head>
    <body>
        <div class="full-screen-container">
            <div class="login-container">
              <h1 class="login-title">Welcome</h1>
              <form id="form">
                <div class="input-group ">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email">
                  <span id="email_msg"></span>
                </div>
        
                <div class="input-group ">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password">
                  <span id="password_msg"></span>
                  <p> don't have an account <a href="signup.php">signup</a></p>
                </div>
     
                <button type="submit" class="login-button">Login</button>

                            <script src="Script\Login.js"></script>


    </body>
    </html>