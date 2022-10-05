<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Style/Style.css">
        <script src="https://kit.fontawesome.com/ff2917b3c1.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="signup_full-screen-container">
        <div class="signup-container">
          <h1 class="signup-title">Welcome</h1>
          <form  id="form">

                 <!-- name field  -->

                <div class="input-group" >
                <label for="firstname">First name </label>
                <input type="text" name="firstname" id="firstname">
                <div id="firstname_msg"></div>
</div>
                 <!-- name field  -->

                <div class="input-group" >
                <label for="middle">Middle name </label>
                <input type="text" name="middlename" id="middlename">
                <div id="middlename_msg"></div>
</div>
              
                 <!-- name field  -->

                <div class="input-group" >
                <label for="familyname">Family name </label>
                <input type="text" name="familyname" id="familyname">
                <div id="familyname_msg"></div>
</div>

<!-- Mobile Number field    -->


<div class="input-group">
              <label for="signup_MobileNum">Mobile </label>
              <input type="tel" name="Mobile" id="Mobile"  >
              <div id="Mobile_msg"></div>
            </div>
            <!-- email field    -->


            <div class="input-group">
              <label for="signup_email">Email</label>
              <input type="email" name="signup_email" id="signup_email">
              <div id="email_msg"></div>
            </div>
            <!-- Date of Birth    -->


            <div class="input-group">
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"> 
           <div id="birthday_msg"></div>
            </div>
    

                  <!-- password field  -->


            <div class="input-group">
              <label for="signup_password">Password</label>
              <input type="password" name="signup_password" id="signup_password">
     
              <div id="password_msg"></div>
            </div>

  
                   <!-- confirm pasword  -->
 
 <div class="input-group">   
             <label for="signup2_password">Confirm Password</label>
              <input type="password" name="signup_password2" id="signup_password2">
              <div class="password2_msg"></div>
`

            </div><button type="submit" class="signup-button" id="signup-button">Sign Up</button>
<button  type="button" onclick="window.open('login.php')" class="login_button" >Already have an account ? Log in </button>
</div>
            <script src="Script\Signup.js"></script>
          </form>
        </div>
      </div>


          </form>
        </div>
      </div>
</body>
</html>