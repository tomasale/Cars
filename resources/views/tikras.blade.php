<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
     integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
      crossorigin="anonymous">

    <!-- fa CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tikras.css') }}" />

    <!-- gallery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('image') }}">Image</a>
        </li>
    </ul>

     <section id = "main">
        <div class = "container">
            <div class = "row fill-viewport align-items-center">
                <div class = "col-12 col-md-6">
                  <h1 class="text-white">Welcome to Cars website</h1>
                  <p class="lead text-white-70">This will be your new hobby</p>
                  <a class="btn btn-dark" href="#" role="button">Learn More</a>
                </div>
            </div>
        </div>
     </section>

     <section id = "info">
         <div class = "container">
             <div class = "row pt-5 pb-5 align-items-center">
                 <div class = "col d-none d-md-block align-self-end">
                     <img src="https://i.imgur.com/sqxxjRT.jpg" class="img-fluid">
                 </div>

                 <div class = "col">
                     <h5 class = "text-uppercase text-black-40">
                         Cars Forum
                     </h5>
                     <h2>Register Now for Free</h2>
                     <p>Enjoy the content and participate. Available on ALL devices.</p>
                     <a class="btn btn-dark" href="#" role="button">Learn More</a>
                 </div>
             </div>
         </div>
     </section>

    <!-- <video width="400" controls>
        <source src="http://cars.dev/uploads/testvideo.mp4" type="video/mp4">
    </video> -->
    
    <section id = "gallery">
        <div class="container-fluid pb-5">
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
            <div class="col-xs-6 col-md-4 p-1"><img src="http://cars.dev/uploads/L_miura.jpg" class="img-fluid"></div>
        </div>
    </section>

     <section id = "social" class = "bg-dark">
         <div class = "container">
             <div class = "row py-3 text-center text-white">
                 <div class = "col-12">
                    <i class="fa fa-3x fa-paypal my-3 mx-4" 
                        aria-hidden="true"></i>
                    <i class="fa fa-3x fa-facebook my-3 mx-4" 
                        aria-hidden="true"></i>
                    <i class="fa fa-3x fa-twitter my-3 mx-4" 
                        aria-hidden="true"></i>
                    <i class="fa fa-3x fa-youtube my-3 mx-5" 
                        aria-hidden="true"></i>
                    <i class="fa fa-3x fa-deviantart my-3 mx-5" 
                        aria-hidden="true"></i>
                    <i class="fa fa-3x fa-free-code-camp my-3 mx-5" 
                        aria-hidden="true"></i>
                 </div>
             </div>
         </div>
     </section>

  </body>

</html>