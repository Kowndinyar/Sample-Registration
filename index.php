<!DOCTYPE Html>
<head>
<title>Registration Form</title>
</head>
<body>
    <div align="center">
        <h1> Registration Form</h1>
<form method="post"  name="Registration Form" action="register.php">

<div class="container">

<br>
<input type="text" placeholder="Enter First name" name="Fn" required>
<br>
<input type="text" placeholder="Enter Last name" name="Ln" required>
<br>
<input type="email" placeholder="Enter Email" name="username" required>
<br>
<input type="password" placeholder="Enter Password" name="psw" id="psw" required>


<br><button type="submit" class="registerbtn">Register</button>

</p>
</div>


</form>

    </div>
 
</body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 6px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 25%;
  padding: 15px;
  margin: 8px 0px ;
  display: inline-block;
  border: none;
  background-color: #F0F0F0;
  border-radius:8px;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: coral;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
  border-radius:8px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</html>

