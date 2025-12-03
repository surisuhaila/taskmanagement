<!DOCTYPE html>
<html>
<head>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #E8E3DA;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 850px;
            height: 559px;
            background: #F5F1EB;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
            box-shadow: 0 0 25px rgba(0,0,0,0.12);
        }

        .left-box {
            width: 50%;
            padding: 40px;
            text-align: center; 
        }

        h1 {
            margin-bottom: 5px;
            color: ##3A3A3A;
            font-weight: 600;
            letter-spacing: 1px;
        }

        p {
            color: #6A6A6A;
            font-size: 14px;
            margin-bottom: 20px;
        }

        label {
            color: #3A3A3A;
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
            text-align: center;
            font-weight: 500; 
        }

        .form-control {
            width: 80%;
            margin: 0 auto;
            padding: 10px;
            border-radius: 6px; 
            border: 1px solid #D8D2C7;
            font-size: 14px;
        }

        .btn {
            width: 80%; 
            padding: 12px;
            border: none;
            background: #CBBFA6;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            margin: 10px auto;
            display: block;
            transition: 0.2 ease;
        }

        .right-box {
            width: 50%;
            height: 100;
            background: linear-gradient(to bottom right, #597958ff, #597958ff); 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0;
}

a {
    text-decoration: none;
    color: inherit;
}


    </style>
</head>

<body>

<a href="register.php" title="Register"></a>
<a href="navigation.php" title="login"></a>

<div class="container">
    <div class="left-box">

        <h1><b>LOG IN</b></h1>
        <p><b>Please enter your details</b></p>

        <form action="navigation.php" method="post">

            <label><b>Username</b></label>
            <input type="text" class="form-control" required>
            <br>

            
            <label><b>Password</b></label>
            <input type="password" class="form-control" required>
            <br>
            
            <button class="btn" type="submit"><b>LOG IN</b></button>

            <button class="btn" type="button" onclick="window.location.href='register.php'"><b>REGISTER</b></button>


        </form>

    </div>

    <div class="right-box">
     <img src="3.jpg" class="img-fluid">
        
    </div>
</div>

</body>
</html>
