var firstname = document.getElementById("firstname");
var middlename = document.getElementById("middlename");
var lastname = document.getElementById("lastname");
var familyname = document.getElementById("familyname");
var mobileNumber = document.getElementById("Mobile");
var age = document.getElementById("birthday");
var email = document.getElementById("signup_email");
var password = document.getElementById("signup_password");
var confirmp = document.getElementById("signup_password2");


   form.addEventListener("submit", () => {
    event.preventDefault();
   
    

     if (firstname.value == "") {
        document.getElementById("firstname_msg").innerHTML =
          "The name field is required.";
      }
     
     if (middlename.value == "") {
        document.getElementById("middlename_msg").innerHTML =
          "The name field is required.";
      }
     
     if (lastname.value == "") {
        document.getElementById("lastname_msg").innerHTML =
          "The name field is required.";
      }
     
     if (familyname.value == "") {
        document.getElementById("familyname_msg").innerHTML =
          "The name field is required.";
      }
     
     
        if (email.value == "") {
        document.getElementById("email_msg").innerHTML =
          "The email field is required.";
      }

      if (
        /^[A-ZA-z0-9._-]+@(hotmail|gmail|yahoo|icloud).com$/.test(email.value) ==
        false &&
        email.value !== ""
      ) {
        document.getElementById("emailError").innerHTML =
          "The email must be a valid email address.";

        window.localStorage.setItem("email", email.value);
      }

        if (password.value == "") {
        document.getElementById("password_msg").innerHTML =
          "The password field is required.";
      }

       if (confirmp.value !== password.value) {
          document.getElementById("password_msg").innerHTML =
            "Passwords does not match.";
       }

     
       {
        var mobileNumber = /^\d{14}$/;
        if((inputtxt.value.match(mobileNumber))
              {
            return true;
              }
            else
              {
              alert("message");
              return false;
              }
      } 






      if ( familyname !== "" && lastname !== "" && middlename !== "" &&  firstname !== "" && email.value !== "" && password.value !== "") {
        var data = window.localStorage.getItem("data");

        if (data) {
          //  i used Josn.parse to convet string to array to make push with new data from new user

          data = JSON.parse(data);

          //  i used array for not overwrriting old data

          data.push([firstname.value,email.value, password.value]);
        } else {
          var data = [];
          data.push([firstname.value,email.value, password.value]);
        }

        //  i use JSON.stringify to convert array to string
        window.localStorage.setItem("data", JSON.stringify(data));
        window.open("login.php") ;

      }
    })
    function underAgeValidate(birthday){
        // it will accept two types of format yyyy-mm-dd and yyyy/mm/dd
        var optimizedBirthday = birthday.replace(/-/g, "/");
    
        //set date based on birthday at 01:00:00 hours GMT+0100 (CET)
        var myBirthday = new Date(optimizedBirthday);
    
        // set current day on 01:00:00 hours GMT+0100 (CET)
        var currentDate = new Date().toJSON().slice(0,10)+' 01:00:00';
    
        // calculate age comparing current date and borthday
        var myAge = ~~((Date.now(currentDate) - myBirthday) / (31557600000));
    
        if(myAge < 16) {
                 return false;
            }else{
            return true;
        }
    
    } 