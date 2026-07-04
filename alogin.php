<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>vistaTube - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="red's site built in bootstrap 1.4.0">
    <meta name="author" content="redst0netech, thewinapi">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="https://redst0ne.xyz/bootstrap.min.css" rel="stylesheet">
    <link href="https://s.imon.fr/css3-youtube-buttons/yt-buttons.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }
      
      .logost {
                font-family: 'Red Hat Display', sans-serif;
      }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="../assets/ico/bootstrap-apple-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/ico/bootstrap-apple-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/ico/bootstrap-apple-114x114.png">
  </head>

  <body>
<?php include 'db.php';?>
    <?php include("header.php");?>
    <div class="container-flex"> 
        <div class="col-1-2">
            <br>
            <br>
            <br>
            <br>
            <center><h3>User Login</h3>
            <br>
            <div class="card blue">
                <form method="post" action="alogin.php">
                    <div class="input-group">
                      <!--  <label for="username">Username: </label>-->
                        <input type="text" name="name" pattern="[^()/><\][\\\x22,;|]+" placeholder="Channel Name" required>
                    </div>
                    <br>
                    <div class="input-group">
                   <!--    <label class="labelcenter" for="email">Email: </label>-->
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <!--<label for="password">Password: </label>-->
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                        <div></div>
                        <br>
                        <div><button type="submit" class="yt-button" name="reg_user" class="button">Login to Channel</button></div>
                    </div>
                    <br>
                    <a class="yt-button danger" onclick="alert(' ')">Forgot your password?</a></center>
                    <div class="input-group">
                        <div></div>
                        <div class="red">
                            <?php
                                if(!empty($_POST)){
                                    $username = htmlspecialchars($_POST['name']);
                                    $statement = $mysqli->prepare("SELECT `password` FROM `users` WHERE `username` = ? LIMIT 1");
                                    $statement->bind_param("s", $username);
                                    $statement->execute();
                                    $result = $statement->get_result();
                                    if($result->num_rows !== 0){
                                    while($row = $result->fetch_assoc()){
                                            $hash = $row['password'];
                                            if(password_verify($_POST['password'], $hash)){
                                                session_start();
                                                $_SESSION["profileuser3"] = htmlspecialchars($_POST['name']);
                                                header("Location: .");
                                            }
                                            else {
                                                echo 'Username and password combo do not match our records.';
                                            }
                                        }
                                    }
                                    else{
                                        echo 'Username and password combo do not match our records.';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--<div class="col-1-2">
            <h2>Welcome to RevTube!</h2>
        </div>-->
    </div>
    <hr>
    <?php include("footer.php") ?>
</body>
</html>
<?php $mysqli->close();?>