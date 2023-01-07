<html> 
    <head>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>Online voting system - Registratrion</title>
        <marquee direction="right" style="background-color:  #3498db;">Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....</marquee>
        <link rel="stylesheet" href="../css/stylesheet.css">
       
        <style>
       
         fieldset{
            line-height: 13px;
            background-color: whitesmoke;
            width: 40%;
            height : 100%;
            padding: 40%, 40%; 
            border-radius: 5px;
         }
         
        /* body { 
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-position: center;
            /*filter: blur(px);-webkit-filter: blur(8px);
            background-attachment: fixed;
            background-image: url("vote2.jpg");*/

        
        </style>
    </head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <body  style="background-color: white;">

        
        <center>
                    <form action="../api/register.php" class="was-validated" id="form2" method="POST" enctype="multipart/form-data" style="margin-top:30px;">
                    <fieldset><h3>Registration</h3>
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                  
                    <input type="number" name="mob" id="mob" placeholder="Mobile"  style="width:186px;"  required><br><br>
                    <p class="mob-error text-danger"></p>
                 
                    <input type="password" name="pass" id="pass" placeholder="Password" required >&nbsp
                    <p class="pass-error text-danger"></p>
                   
                    <input type="password" name="cpass" placeholder="Confirm Password" required id="eye">
                    <i class="far fa-eye" id="togglePass" style="margin-left: -30px; cursor: pointer;"></i><br><br>

                    <input style="width: 95%" type="text"id="add" name="add" placeholder="Address" required><br><br>
                    <p class="add-error text-danger"></p>
                    <input type="number"id="age" name="age" placeholder="Enter age" required><br><br>
                    <p class="age-error text-danger"></p>
                    <div id="upload" style="width:95% ;">
                    Select your gender:
                        <select name="gender" id="gender" >
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">LGBTQIA+</option>
                        </select>
                    </div><BR>
                    <div id="upload" style="width: 100%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                          
                    
                    <div class="g-recaptcha" data-sitekey="6LflOtYjAAAAAA5h9Q4b0uxir84QAUkk45w1uQBA"></div> <br>
                    <p class="captacha-error text-danger"></p>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a></fieldset>
                </form>
            </center>
            <script>const togglePassword = document.querySelector('#togglePass');
             const password = document.querySelector('#eye');

            togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});</script>
  <script>const togglePassword = document.querySelector('#toggle');
             const password = document.querySelector('#eyes');

            togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});</script>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Login Js file -->
    <script src="./assets/js/register.js"></script>

    </body>
</html>