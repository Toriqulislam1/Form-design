<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
    <style>
body{
    margin: 0;
    padding: 0;
    background-color: black;
}

.first_name{
    background-color: red;
   width: 600px;
   height: 420px; 
    top: 20%;
    left: 30%;
 position: absolute;

    
}

    </style>
</head>
<body>


<div class="first_name"> 
      <h2 style=" text-align:center; color:orange;background-color:#161618;">This is register form </h2>

        <form action="" method="POST">
            <div style=" columns: 200px 6; display:flex; margin-left:100px; column-gap:10px; border-radius:50px 20px; padding:10px;">
        <input  type="text" placeholder="firs name" name="firs_name">
        <input  type="text" placeholder="last name" name="last_name">
        </div>
        <div style=" columns: 200px 6; display:flex; margin-left:100px; column-gap:10px; border-radius:50px 20px; padding:10px;" >
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        </div>
        <div style=" columns: 200px 6; display:flex; margin-left:100px; column-gap:10px; border-radius:50px 20px; padding:10px;" >
        <input type="password" placeholder="conform password" name="conform_password">
        <input type="submit" value="Sing Up ">
        </div>
    </div>
</body>
</html>