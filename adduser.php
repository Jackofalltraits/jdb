<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    </head>
    <body>

    <?php

        include 'dbconnect.php';

        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone_num = $_POST['phonenumber'];
            $groups = $_POST['groups'];
       
            $sql = "INSERT INTO users(fname,lname,email,phonenumber,groups) VALUES('$fname','$lname','$email','$phone_num','$groups')";

            if(mysqli_query($connect,$sql)){
                // echo "<button onclick='myFunction()'>done</button>";
                // echo "<script>alert('alldone')</script>";
                echo "<script>toastr.success('User created successfully! Congrats!');</script>";

            }
            mysqli_close($connect);
        }
    ?>

    <form action="adduser.php" method="post">
        <div class="login-box">
            <h1>Log into your portal</h1>
            <input class="name" type="text" name="fname" placeholder="first name">
            <br>
            <br>
            <input class="name" type="text" name="lname" placeholder="Last name">
            <br><br>
            <input class="name" type="email" name="email" placeholder="Email">
            <br><br>
            <input class="name" type="text" name="phonenumber" placeholder="Phone #">
            <br><br>
            <input class="name" type="text" name="groups" placeholder="group">
            <br><br>
            <button class="submit" type="submit" name="submit">Submit</button>
        </div> 
    </form>


    <div class="toast">
        <!-- <script>
            
            toastr.success('User created successfully! Congrats!');

        </script> -->

    </div>

<div id="snackbar">User created successfully! Congrats!</div>
    <script>
        function myFunction() {
        var x = document.getElementById("snackbar");
         x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
    </script>
    
        <style>
            .toast{
                position:fixed;
                top:5%;
                left:40%;
            }
            .name{
                height:7%;
                width:70%;
                border-radius: 7px 7px 7px 7px;
                position:relative;
                left:2%;

            }
            .login-box{
                position:fixed;
                width:30%;
                height:70%;
                color:white;
                padding-left:10%;
                background-color: #000B72;
                position: absolute;
                left:31%;
                top:20%;
                border-radius: 3% 3% 3% 3%;
                
            }
            .submit{
                height:10%;
                width: 45%;
               border-radius: 8px 8px 8px 8px;  
               position: relative;
               left:14%;
            }

        
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #000B72;
  color: white;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 48%;
  top: 5%;
  font-size: 20px;
  border-radius:12px 12px 12px 12px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {top: 30px; opacity: 1;} 
  to {top: 0; opacity: 0;}
}

@keyframes fadeout {
  from {top: 30px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
        </style>
    </body>
</html>