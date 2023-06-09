<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fantorio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style.css" />
  <link rel="icon" href="/img/emblem.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/scripts/jquery.zoom.js"></script>
  <script src="/scripts/zoomImg.js"></script>
</head>

<body>

  <header class="p-3 bg-brown">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="/img/emblem_wheel.png" class="img-fluid rounded-top" alt="" height="50" width="50" />
        </a>
        <p class="mt-3 mx-2 text-white fs-3" id="headerText">Fantorio</p>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-5">
          <li>
            <a href="../index.php" class="nav-link px-2 text-white">Home</a>
          </li>
          <li>
            <a href="forum.php" class="nav-link px-2 text-white-50">Forum</a>
          </li>
          <li>
            <a href="wiki.php" class="nav-link px-2 text-white">Wiki</a>
          </li>
          <li>
            <a href="about.php" class="nav-link px-2 text-white">API</a>
          </li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">
            Login
          </button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <!-- Main content -->
  <div class="container my-5">
    <div class="card bg-brown">
      <div class="row g-0">
        <div class="col-md-4">
          <span class="zoomable inline-block">
            <img src="/img/refinery.png" class="img-fluid rounded-top" alt="..." />
          </span>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="#" class="link-light">
              <h5 class="card-title fw-bold text-white">
                Does anyone have an optimized blueprint for advanced refining?
              </h5>
            </a>
            <p class="card-text">
              I could not find any well made scalable blueprint for refining
              and I'm honestly too lazy to make my own, because I don't know
              the ratios. I'm sure some of you have a well made one. Thanks in
              advance
            </p>
            <p class="card-text">
              <small class="text-white-50">
                5 replies<br />Last updated 3 mins ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="card bg-brown">
      <div class="row g-0">
        <div class="col-md-4">
          <span class="zoomable inline-block">
            <img src="/img/mods.png" class="img-fluid rounded-top" alt="..." />
          </span>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="#" class="link-light">
              <h5 class="card-title fw-bold text-white">
                Beginner friendly QoL mods
              </h5>
            </a>
            <p class="card-text">
              I'm looking for some beginner friendly QoL mods for my friend who is starting with the game. I'm not
              looking for anything that changes the game too much. Just something that fixes some weird mechanics of the game. Any
              suggestions?
            </p>
            <p class="card-text">
              <small class="text-white-50">
                11 replies<br />Last updated 2 hours ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="card bg-brown">
      <div class="row g-0">
        <div class="col-md-4">
          <span class="zoomable inline-block">
            <img src="/img/bus.png" class="img-fluid rounded-top" alt="..." />
          </span>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="#" class="link-light">
              <h5 class="card-title fw-bold text-white">
                How does a bus work?
              </h5>
            </a>
            <p class="card-text">
              I've seen a lot of people talking about the main bus, secondary busses and so on, but i couldn't find any
              videos about them. Can someone explain?
            </p>
            <p class="card-text">
              <small class="text-white-50">
                9 replies<br />Last updated 15 mins ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="card bg-brown">
      <div class="row g-0">
        <div class="col-md-4">
          <span class="zoomable inline-block">
            <img src="/img/buy.png" class="rounded-top" alt="..." />
          </span>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="#" class="link-light">
              <h5 class="card-title fw-bold text-white">
                Is the game worth it?
              </h5>
            </a>
            <p class="card-text">
              I've been contemplating buying this game for a while, but every time I look at it, I get the feeling it's
              gonna be really repetetive + it's not cheap. Is it worth it?
            </p>
            <p class="card-text">
              <small class="text-white-50">
                32 replies<br />Last updated 2 days ago</small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top fixed-bottom">
    <div class="col-md-4 d-flex align-items-center mx-5">
      <span class="mb-3 mb-md-0 text-white-50">© 2023 Miroslav Kuna</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-5">
      <li class="ms-3"><a href="#"> <img src="/img/discord.png" class="img-fluid rounded-top" alt="" height="24"
            width="24"> </a></li>
      <li class="ms-3"><a href="#"> <img src="/img/reddit.png" class="img-fluid rounded-top" alt="" height="30"
            width="30"> </a></li>
      <li class="ms-3"><a href="#"> <img src="/img/twitter.png" class="img-fluid rounded-top" alt="" height="24"
            width="24"> </a></li>
    </ul>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</html>