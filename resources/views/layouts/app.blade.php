<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
          min-height: 100vh; /* Set the minimum height of the body to fill the entire viewport */
          display: flex;
          flex-direction: column;
          position: relative;
        }
    
        main {
          flex: 1; /* Allow the main content area to grow and fill the available space */
        }
    
        .footer {
          background-color: #343a40;
          bottom: 0;
          color: #fff;
          padding: 20px 0;
        }

        img {
          width:100%;
          height:auto;
        }
        .categories-bg{
          position: absolute;
          z-index: 1;
          background-color: #eee;
          text-decoration: none;
          color: #333;
        }

        .categories-bg a {
          width: 176px;
          text-decoration: none;
          color: #333;
        }

        .categories-bg a:hover {
          text-decoration: none;
          color: #0d6efd;
        }
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
        <div class="container-fluid d-flex justify-content-between">
          <a class="navbar-brand flex-fill" href="#">myblogs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 d-flex gap-4">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/posts">Posts</a>
              </li>
              <li class="nav-item d-inline">
                <a class="nav-link bg-primary text-white rounded" href="#">Subscribe for updates</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <div class="container">
            @yield('content')
        </div>
      </main>
    

    {{-- Footer --}}
    <footer class="bg-dark text-white py-5 footer">
        <div class="container">
              <h4 class="text-center">Stay in touch with the latest posts</h4>
              <p class="text-center">Promise to keep the inbox clean. No spam.</p>
              <div class="d-flex justify-content-center">
              <form action="" class="w-50">
                <div class="d-flex">
                    <input type="text" class="form-control">
                    <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                </div>
              </form>
              </div>  
        </div>
      </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>