<!-- <?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
if(!empty($email) && !empty($name)){
    $sql="INSERT INTO `logdata`(`username`, `email`, `phone`) VALUES ('$name','$email','$phone')";
    $result=mysqli_query($con,$sql);
    echo "registertion has been succesfull";
}
else{echo "plz enter some valid information";}

}
?> -->
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Roboto Mono', monospace;
        }

        .container {
            background-color: rgb(214, 246, 246);
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            width: 800px;
            height: 420px;
            gap: 35px;
            border-radius: 25px;

        }

        form {
            padding: 24px;
        }

        .title {
            text-align: center;
            margin: 18px 2px;
            text-align: center;
            margin: 18px 2px;
            font-weight: bolder;
            text-transform: capitalize;
            font-family: 'Ubuntu', sans-serif;
        }

        input {
            margin: 10px 2px;
            padding: 9px 20px;
            border-radius: 8px;
            font-size: 18px;
            border: none;
            background-color: rgb(239, 236, 236);
        }

        span {
            flex-direction: column;
            display: flex;
            align-items: center;
        }

        input[type=submit] {
            width: 60%;
            background-color: rgb(187, 9, 9);
            color: white;
            transition: all 2s;

        }

        input[type=submit]:hover {
            background-color: rgb(244, 11, 11);
            box-shadow: 2px 2px 12px black;
            color: white;
            font-size: 19px;
        }

        .sec {
            background: linear-gradient(90deg, rgba(89, 0, 140, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(19, 2, 70, 1) 100%);
            height: 94%;
            width: 418px;
            border-top-left-radius: 30%;
            border-bottom-left-radius: 30%;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            color: white;
            font-family: 'Ubuntu', sans-serif;
            padding: 12px;
            flex-wrap: wrap;
        }

        .sub-sec {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .sub-sec>p {
            margin: 30px 2px;
            text-align: center
        }

        .a {
            border: 2px solid white;
            border-radius: 8px;
            padding: 8px 25px;
            color: white;
            text-decoration: none;
            margin: 12px 2px;
            transition: all 2s;
            animation: an 2s linear infinite;
        }

        .a:hover {
            border: 4px solid aqua;
            transform: scale(1.2);
        }

        @keyframes an {
            50% {
                filter: hue-rotate(350deg);
            }
        }
        input[type=submit]:hover{
            animation: an 2s linear infinite;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main">
            <form action="" method="post">
                <h1 class="title">sign in </h1>
                <input type="text" name="name" placeholder="username"><br>
                <input type="text" name="email" placeholder="email"><br>
                <input type="text" name="phone" placeholder="phone"><br>
                <span> <input type="submit">
                </span>
            </form>
            <div class="sec">
                <div class="sub-sec">
                    <h2>
                        <pre>welcome to Netflix</pre>
                    </h2>
                    <p>Going back to your Netflix-side to view all movies & anime</p>
                    <a class="a" href="index.php">Go back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>