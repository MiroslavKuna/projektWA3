<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantorio</title>
</head>
<body>
    
    <header class="p-3 bg-brown">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
              <img src="/img/emblem_wheel.png" class="img-fluid rounded-top" alt="" height="50" width="50">
            </a>
            <p class="mt-3 mx-2 text-white fs-3" id="headerText">Fantorio</p>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-5">
              <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="forum.php" class="nav-link px-2 text-white-50">Forum</a></li>
              <li><a href="wiki.php" class="nav-link px-2 text-white">Wiki</a></li>
              <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
            </ul>
  
    
            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Login</button>
              <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
          </div>
        </div>
      </header>

    <main class="form-signin w-100 m-auto">
        <form lmoid="0">
          <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" lmoid="ui-encourage-0-0" autocomplete="off">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" lmoid="ui-encourage-0-1" autocomplete="off">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
        </form>
      </main>

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
</html>