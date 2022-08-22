

<!DOCTYPE html>
<html>
<head>
     <title>Register Here</title>
     <link rel="stylesheet" href="../CSS/register.css">
     
</head>
<body>
     <div class="information">
          <form name="myform" autocomplete="off" action="connection.php" method="POST" onsubmit="return validate()" class="login"; >
            
               <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Here</p>
               
               <div class="registration">
               <table>
               <tr>
                    <td>Name</td>
                    <td> :</td>
                    <td>
                         <input class="name" type="name" placeholder="Username" id="name" name="name" >
                         <br/><span id="namee"></span>
                    </td>
               </tr>
               <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input class="email" type="email" placeholder="Email" id="email" name="email" >
                    <br/><span id="emaill"></span>
               </td>
               </tr>
               <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input class="password" type="password" placeholder="Password" id="password" name="password"  >
                    <br/><span id="passwordd"></span>       
               </td>
               </tr>
               
               <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input class="cpassword" type="password" placeholder="Confirm Password" id="cpassword" name="cpassword"  >
                    <br/><span id="cpasswordd"></span>
               </td>
               </tr>
               
               <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                         <input class="radio" type="radio" name="gender"  value="Male" > &nbsp;Male
                         <input class="radio" type="radio" name="gender"  value="Female"> &nbsp;Female
                         <input class="radio" type="radio" name="gender"  value="Others"> &nbsp;Others
                         <br/><span id="genderr"></span>
                    </td>
               </tr>
               
               <tr>
                         <td>Login As</td>
                         <td>:</td>
                         <td>
                         
                              <select class="loginuser" id="selection" name="user">
                              <option >Select One</option>
                              <option >Customer</option>
                              <option >Manager-Train</option>
                              <option >Manager-Bus</option>
                              <option >Manager-Air</option>
                              <br/><span id="selectionn"></span>
                         </td>
               </tr>
                    <tr>
                         <td><input class="btn" type="submit" value="Submit" name="submit"></td>
                    </tr>
               </table>
               
               
               
               <p class="login-register-text">Already Have an Account? <a href="index.php"></br>Login Here</a>.</p> 
          </form>
          <script>
                         function validate(){
                              var username=document.getElementById("name").value;
                              var email=document.getElementById("email").value;
                              var password=document.getElementById("password").value;
                              var confirmpassword=document.getElementById("cpassword").value;
                              
                              //gender
                              var valid =false;
                              var checkgender=document.myform.gender;

                              for(var loop=0; loop<checkgender.length;loop++)
                              {
                                   if(checkgender[loop].checked)
                                   {
                                        valid =true;
                                        break;
                                   }
                              }
                              var selectuser=document.getElementById("selection").value;

                              if(username.trim() =="")
                              {
                                   document.getElementById("namee").innerHTML="**You must fill up your name**";
                                   return false;
                              }
                              if(username.length<3)
                              {
                                   document.getElementById("namee").innerHTML="**You must fill up with a suitable name**";
                                   return false;
                              }
                              else{
                                   document.getElementById("namee").innerHTML="";
                              }

                              if(email.trim() =="")
                              {
                                   document.getElementById("emaill").innerHTML="**You must fill up your email**";
                                   return false;
                              }
                              if(email.indexOf('@')<=0)
                              {
                                   document.getElementById("emaill").innerHTML= "**Invalid Email**";
                                   return false;
                              }
                              else{
                                   document.getElementById("emaill").innerHTML="";
                              }

                               if(password.trim() =="")
                              {
                                   
                                   document.getElementById("passwordd").innerHTML="**You must give a password**";
                                   return false;
                              }
                              if(password.length<6)
                              {
                                   document.getElementById("passwordd").innerHTML="**Password should be more than 6 characters**";
                                   return false;
                              }
                              else{
                                   document.getElementById("passwordd").innerHTML="";
                              }
                               if(confirmpassword.trim() =="")
                              {
                                   document.getElementById("cpasswordd").innerHTML="**You must confirm your password**";
                                   return false;
                              }
                              if(confirmpassword != password)
                              {
                                   document.getElementById("cpasswordd").innerHTML="**Password not matched**";
                                   return false;
                              }
                              else{
                                   document.getElementById("cpasswordd").innerHTML="";
                              }
                              
                               if (!valid)
                              {         
                                   
                                   document.getElementById("genderr").innerHTML="**Select your gender";
                                   return false; 
                              }
                              else{
                                   document.getElementById("genderr").innerHTML="";
                              }
                               if(selectuser.trim() =="SO")
                              {
                                   alert("YOU HAVE TO SELECT ONE USER MODE!");
                                   return false;
                              }    
                              else{
                                   return true;
                              }
                         }
               </script>
     </div>
     </div>
</body>
</html>

