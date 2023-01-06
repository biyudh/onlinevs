<html>
    <head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>Online voting system -Party Registratrion</title>
        <marquee behavior="slide" direction="right" style="background-color:  #3498db;">Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....Please Vote The Right Candidate....</marquee>
        <a href="../"><button id="back-button"> Back</button></a>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
       
         fieldset{
            background-color: whitesmoke;
            width: fit-content;
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
    <script src='https://www.google.com/recaptcha/api.js'></script><br><br><br>
    <body  style="background-color: white;">

        
        <center> 
                    <form action="../api/party.php" method="POST" enctype="multipart/form-data">
                    <fieldset><h3>Party-Registration</h3>
                    <input type="text" name="name" placeholder="Party-Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required >&nbsp
                    
                    <input type="password" name="cpass" placeholder="Confirm Password" required class="eye">
                    <i class="far fa-eye" id="togglepasss" style="margin-left: -30px; cursor: pointer;"></i><br><br>
                    <input style="width: 95%" type="text" name="est" placeholder="Established-Date" required><br><br>
                    
                
                   <div id="upload" style="width: 95%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                   <!-- <div id="upload" style="width: 95%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>-->
                    <div class="g-recaptcha" data-sitekey="6LflOtYjAAAAAA5h9Q4b0uxir84QAUkk45w1uQBA"></div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                   <!-- Already user? <a href="../">Login here</a></fieldset>-->
                </form>
            </center>
            <script>const togglePassword = document.querySelector('#togglepasss');
             const password = document.querySelector('.eye');

            togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
       </script>    

           
    </body>
</html>