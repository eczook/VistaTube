<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>VistaTube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="VistaTube - Broadcast Yourself">
    <meta name="author" content="redst0netech">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="https://redst0ne.xyz/bootstrap.min.css" rel="stylesheet">
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
      
      .video-thumbnail{
    flex: 0 0 120px;
    border: 1px solid var(--colw);
    outline: 1px solid var(--colg);
    background: var(--colbl);
    width: 120px;
    height: 72px;
    padding: 0px;
    display: block;
    margin: auto;
    float: left;
    margin-right: 10px;
}
.video-thumbnail video{
    width: 100%;
    height: 100%;
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
<?php include 'header.php';?>
    <!--<div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand logost" href="#"><strong>RevTube</strong></a>
          <ul class="nav">
            <li class="active"><a href="//redst0ne.xyz">Home</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="channels.php">Channels</a></li>
            <li><a href="community.php">Community</a></li>
          </ul>
          <form action="" class="pull-right">
            <input class="input-small" type="text" placeholder="Username">
            <input class="input-small" type="email" placeholder="Email">
            <input class="input-small" type="password" placeholder="Password">
            <button class="btn" type="submit">login</button>
          </form>
        </div>
      </div>
    </div>-->
    <div class="container">
 <div class="content">
        <div class="page-header">
            <div class="alert-message info">
  <a class="close" href="#">×</a>
  <p><strong>happy new year!</strong> we at vistatube want to wish everyone a happy 2022!</p>
</div>
          <h1>Terms of Service <small>Last updated December 28, 2021</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Uploading Rules</h2>
            <ul class="unstyled">
<li>No NSFW content at all. This includes hardcore porn, softcore porn, Rule 34, hentai and, basically any type of porn.</li>
<br>
<li><strong>NO NSFL CONTENT.</strong> Including all types of gore, propaganda, and child porn (goes with no nsfw aswell).</li>
<br>
<li>Uploading any NSFW/NSFL content can result in: video deletion, account deletion, temporary IP ban, or permanent IP ban.</li>
<br>
<li>Additionally, corrupted video metadata, unless staff can go and change the file name and path in the database to fix it, will result in video deletion.</li>
<br>
            </ul>
            <h2>Commenting Rules</h2>
            <ul class="unstyled">
                <li>Please, don't be a jackass/smartass/"edgy kid". It doesn't help anyone, and it's certainly not needed. Doing so will result in your comment deleted and if you keep it up, we'll delete your account (This can also lead to a IP ban).</li>
                <br>
                <li>Do <strong>NOT</strong> spam comments. All that does is clog the comment section and database, which we do not need.</li>
                </ul>
          </div>
          <div class="span4">
            <h3>What's New</h3>
            <ul class="unstyled">
<li>Hopefully we will be able to replace the shitty 2009 frontend soon</li>
<br>
<li>BT12012 is semi-finished, and will probably be completely finished by 2022</li>
            </ul>
            <!--<input class="input" type="text" placeholder="Username">
            <br>
            <input class="input" type="password" placeholder="Password">
            <br>
            <button class="btn" type="submit">login</button>-->
          </div>
        </div>
      </div>

      <footer>
        <p>&copy;Redst0ne 2012-2022</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>