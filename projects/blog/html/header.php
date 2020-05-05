<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <meta name="description" content="This is my First Blog">

        <link rel="stylesheet" href="css/bootstrap.css">
       
        <title>Blog</title>
        
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">Packet Prep</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="album.php">Album</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="blog.php">Blogs</a>
            </li>
                <?php
                    if(!empty($_SESSION['username'])){
                        if($_SESSION['username'] == 'admin'){

                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                
                <?php }}?>
                
            <?php if(empty($_SESSION['username'])){ ?>
                
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
              </li>
                
            <?php }?>
                
            <?php if(!empty($_SESSION['username'])){?>
            <li class="nav-item">
                <form method="POST">
                     <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                </form> 
              </li>
            <?php }?>
                
                
            </ul>
          </div>
    </nav>
