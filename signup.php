<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER ['REQUEST_METHOD'] == "POST")
    {
        //POST CHECK
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $cellphone_number = $_POST['cellphone_number'];
        $address_1 = $_POST['address_1'];    
        $address_2 = $_POST['address_2'];    
        $city = $_POST['city']; 
        $postal_code = $_POST['postal_code'];       

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($cellphone_number) && !empty($address_1) && !empty($address_2) && !empty($city) && !empty($postal_code))
        {

            //save to db
            $user_id = random_num(20);
            $query = "insert into user_accounts (user_id,user_name,password,first_name,last_name,email,cellphone_number,address_1,address_2,city,postal_code) values ('$user_id','$user_name','$password','$first_name','$last_name','$email','$cellphone_number','$address_1','$address_2','$city','$postal_code')";
            
            mysqli_query($con, $query);

            header("Location: login_customer.php");
            die;
        }else
        {
            echo "Please enter a valid username";
        }
        
    }
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Welcome to fishify</title>
    <h1>Welcome to Fishify</h1>
</head>
<body>
    <style type="text/css">
        
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: red;
            border: none;
        }

        #box{
            background-color: grey;
            margin: auto;
            width: 400px;
            padding: 20px;
        }
        </style>
    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px;">Sign up</div>
            
            <label for=first_name>First Name</label>
            <input type="text" name="first_name"><br></br>

            <label for=last_name>Last Name</label>
            <input type="text" name="last_name"><br></br>

            <label for=user_name>Username</label>
            <input type="text" name="user_name"><br></br>

            <label for=password>Password</label>
            <input type="password" name="password"><br></br>

            <label for=email>Email</label>
            <input type="email" name="email"><br></br>

            <label for=cellphone_number>Cellphone Number</label>
            <input type="cellphone_number" name="cellphone_number"><br></br>

            <label for=address_1>Address 1</label>
            <input type="address_1" name="address_1"><br></br>

            <label for=address_2>Address 2</label>
            <input type="address_2" name="address_2"><br></br>

            <label for=city>City</label>
            <input type="city" name="city"><br></br>

            <label for=postal_code>Postal code</label>
            <input type="postal_code" name="postal_code"><br></br>

            <input type="submit" value="Sign up"><br></br>

            <p>already have an account?</p>
            <a href="login.php">Login here</a><br></br>
        </form>
    </div>
</body>
</html>