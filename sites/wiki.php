<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fantorio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style.css" />
    <link rel="icon" href="/img/emblem.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
  </head>

  <body>
    <header class="p-3 bg-brown">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
            <img src="/img/emblem_wheel.png" class="img-fluid rounded-top" alt="" height="50" width="50">
            <p class="mt-3 mx-2 text-white fs-3" id="headerText">Fantorio</p>
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-5">
            <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="forum.php" class="nav-link px-2 text-white">Forum</a></li>
            <li><a href="wiki.php" class="nav-link px-2 text-white-50">Wiki</a></li>
            <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
          </ul>


  
          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
          </div>
        </div>
      </div>
    </header>

    <!-- Main content -->
    <div class="container my-5">
      <h1>Welcome to the Factorio Fan Forum</h1>
      <p>
        Join the discussion about the popular game Factorio, share your tips and
        tricks, and connect with other players from around the world.
      </p>
      <div class="row mt-5">
        <div class="col-md-6">
          <h2>Latest Forum Posts</h2>
          <ul class="list-group">
            <li class="list-group-item list-group-item-warning">
              How to optimize oil refinery production
            </li>
            <li class="list-group-item list-group-item-warning">Favorite mods for multiplayer</li>
            <li class="list-group-item list-group-item-warning">
              Tips for launching rockets efficiently
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2>Featured Wiki Articles</h2>
          <ul class="list-group">
            <li class="list-group-item list-group-item-warning">Beginner's Guide to Factorio</li>
            <li class="list-group-item list-group-item-warning">
              How to automate production with robots
            </li>
            <li class="list-group-item list-group-item-warning">Guide to advanced circuit networks</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top fixed-bottom">
        <div class="col-md-4 d-flex align-items-center mx-5">
          <span class="mb-3 mb-md-0 text-white-50">© 2023 Miroslav Kuna</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-5">
          <li class="ms-3"><a href="#"> <img src="/img/discord.png" class="img-fluid rounded-top" alt="" height="24" width="24"> </a></li>
          <li class="ms-3"><a href="#"> <img src="/img/reddit.png" class="img-fluid rounded-top" alt="" height="30" width="30"> </a></li>
          <li class="ms-3"><a href="#"> <img src="/img/twitter.png" class="img-fluid rounded-top" alt="" height="24" width="24"> </a></li>
        </ul>
      </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  </body>
</html>