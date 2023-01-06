<?php
                    if(count($_POST)>0) {
                      if(empty($_POST['g-recaptcha-response'])) {
                        echo "Please solve captcha";
                      }
                    }
                    ?>
<html>
    <head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Online voting system \- Home</title>
       <link rel="stylesheet" href="./css/stylesheet.css">
      <marquee  direction="right">Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....</marquee>

    </head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        * {box-sizing: border-box;}

        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
          background-attachment: fixed;
          background-image: url("vote.jpg");
        }
        fieldset{
            background-color: whitesmoke;
            width: 23%;
            height :73%;
      
            
            border-radius: 5px;
        }

        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 0px 0px;
          padding-top : 3px;
          padding - bottom : 100px;
        }

        .header a {
          float: left;
          color: black;
          text-align: center;
          padding: 5px;
          text-decoration: none;
          font-size: small; 
          line-height: 10px;
          border-radius: 4px;
        }

        .header a.logo {
          font-size: 25px;
          font-weight: bold;
        }

        .header a:hover {
          background-color: #ddd;
          color: black;
        }

        .header a.active {
          background-color: dodgerblue;
          color: white;
        }

        .header-right {
          float: right;
          padding: 6px;
          font-size: small;

        
         @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          
        .header-right {
            float: none;
          }
        
        }} 
        

     </style>
    <body style="background-color: white;">
    <div class="header" style="display: flex; justify-content: space-between;">
    <img src="nepallogo.jpg" alt="Nepal Logo" style="width: 40px; height: 35px; padding: 0px;">
      
    <div>
      <h5>VOTE FOR PARTY</h5>
    </div>
    
  <div class="header-right"> 
    <a class="active" href="#home">Home</a>
    <a href="routes/party.php">Party</a>
    <a href="routes/adminlogin.php">Admin</a>
  </div>
  </div>
            <center><br>
            <div id="loginSection">
            
                
                <form action="api/login.php" id="form1" method="POST">
                <fieldset ><h2>Login</h2>
                    <input type="number" id = "mob" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" id = "pass" name="pass" placeholder="Enter password" required id="id_password">
                    <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i><br><br>
                  
<!--<select name="role" style="width: 50%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                    <input type="text" name="role" placeholder="voter">-->
                    <div class="g-recaptcha" data-sitekey="6LflOtYjAAAAAA5h9Q4b0uxir84QAUkk45w1uQBA" important></div>

                    <br><br>                 
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>

                    </fieldset>
                </form>
            </div>

            </center> <br>
            
            <footer style="background-color: red;"><center>&copy; Copyright Government of Nepal, National Information Technology Center(NITC).</center></footer> 
            <script>const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});</script>
       
            

    </body> 
    

</html>