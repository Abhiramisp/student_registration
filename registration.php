<!doctype html>
<html lang="en">
<head>
     <title>Registration form</title>
     <style>
h3
{
	color:blue;
}
#p1
{
	color:yellow;
}
#name,#num, #mail, #pass1
  {
  border-radius: 10px;
  border-color: black;
  padding: 10px; 
  width: 300px;
  height: 15px; 
}
    </style> 
</head>
<body>
    <form action="reg.php" class="splash-container" method="post">
        <div class="card">
        <center> 
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p id="p1">Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="name" name="name" required placeholder="Name" autocomplete="off">
                </div>
              
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="num" name="phone_number" required placeholder="Phone Number" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" id="mail" name="email" required placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1"  type="password" name="pass1" required placeholder="Password">
                </div>
              
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Sign in</button>
                </div>
                </center>     
            </div>
        </div>
    </form>
</body>
</html>