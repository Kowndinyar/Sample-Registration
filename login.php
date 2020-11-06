<!DOCTYPE Html>
<head>
<title>Login page</title>
</head>
<body> 
  <div align="center">
    <center> <h1> Login Form </h1> </center>   
    <form method='get' name='login form' action='authentication.php'>  
        <div class="container">   
           
            <input type="email" placeholder="Enter Email" name="username" required> <br> 
               
            <input type="password" placeholder="Enter Password" name="psw" required>  
          <br><button type="submit">Login</button>   
        </div> 
    </form>
   </div>  
</body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password],input[type=email] {
  background-color: #F0F0F0;
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: none;
  box-sizing: border-box;
  border-radius:8px;
  
}

button {
  background-color: coral;
  color:white ;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  border-radius:8px;

}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
 </html>
 