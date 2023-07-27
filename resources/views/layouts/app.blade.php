<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
          /* position: absolute; */
          bottom: 0;
          color: #fff;
          padding: 20px 0;
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
                <a class="nav-link" aria-current="page" href="#">Home</a>
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
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum ea optio minima voluptates 
            veniam debitis esse animi molestias, cumque officiis error rerum aperiam iusto. Cumque veritatis 
            consectetur iste dignissimos adipisci quae porro voluptates sit iure similique, qui dicta pariatur 
            doloribus quo labore repellat, dolorum ex omnis accusamus. Autem natus dignissimos vero possimus cum 
            maxime animi at rem facilis vel voluptate ad accusamus, vitae adipisci illum asperiores neque incidunt 
            officia ullam a ipsam fugiat sunt doloremque nemo? Libero dicta unde, nihil veniam quas officiis, 
            praesentium aliquam expedita perferendis sunt velit voluptatibus minima maxime voluptate vero 
            consequatur cumque enim explicabo. Nam quas, veniam nesciunt officiis impedit culpa at unde ex velit 
            quidem eos tempore nulla, officia consequuntur voluptates quos veritatis totam. Libero similique delectus 
            quas, cupiditate totam temporibus amet ea corrupti dolor reprehenderit magni voluptate soluta ut, sed 
            quasi excepturi ipsa exercitationem explicabo saepe praesentium! Dolore ex veritatis assumenda illo 
            recusandae, vero culpa, ipsam molestiae quasi nisi et aperiam! Reprehenderit, commodi blanditiis harum 
            totam consequatur vitae provident iste placeat, laborum suscipit explicabo impedit! Earum sapiente eum, 
            dolore optio modi nulla recusandae vero repellendus laborum ipsum facere doloribus asperiores et odio 
            blanditiis fuga officiis minus impedit illum! Magni quaerat maiores repellendus eos?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum ea optio minima voluptates 
            veniam debitis esse animi molestias, cumque officiis error rerum aperiam iusto. Cumque veritatis 
            consectetur iste dignissimos adipisci quae porro voluptates sit iure similique, qui dicta pariatur 
            doloribus quo labore repellat, dolorum ex omnis accusamus. Autem natus dignissimos vero possimus cum 
            maxime animi at rem facilis vel voluptate ad accusamus, vitae adipisci illum asperiores neque incidunt 
            officia ullam a ipsam fugiat sunt doloremque nemo? Libero dicta unde, nihil veniam quas officiis, 
            praesentium aliquam expedita perferendis sunt velit voluptatibus minima maxime voluptate vero 
            consequatur cumque enim explicabo. Nam quas, veniam nesciunt officiis impedit culpa at unde ex velit 
            quidem eos tempore nulla, officia consequuntur voluptates quos veritatis totam. Libero similique delectus 
            quas, cupiditate totam temporibus amet ea corrupti dolor reprehenderit magni voluptate soluta ut, sed 
            quasi excepturi ipsa exercitationem explicabo saepe praesentium! Dolore ex veritatis assumenda illo 
            recusandae, vero culpa, ipsam molestiae quasi nisi et aperiam! Reprehenderit, commodi blanditiis harum 
            totam consequatur vitae provident iste placeat, laborum suscipit explicabo impedit! Earum sapiente eum, 
            dolore optio modi nulla recusandae vero repellendus laborum ipsum facere doloribus asperiores et odio 
            blanditiis fuga officiis minus impedit illum! Magni quaerat maiores repellendus eos?
        </p>
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