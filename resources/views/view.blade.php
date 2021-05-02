<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{ $post->auther}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{ $post->created_at->format('d-M-Y') }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="/upload/{{ $post->images[0]}}" width="700px">

        <hr>

        <!-- Post Content -->
        <p class="lead">{{ $post->description}}</p>



        <!-- Comments Form -->

        <!-- Single Comment -->
        <div class="media mb-4">

        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">

          <div class="media-body">


            <div class="media mt-4">

              <div class="media-body">

              </div>
            </div>

            <div class="media mt-4">

              <div class="media-body">

              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->


        <!-- Categories Widget -->


        <!-- Side Widget -->

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor2/jquery/jquery.min.js"></script>
  <script src="/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
