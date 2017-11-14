<html>

<head>

<title>{{ $post->title }}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

</head>

<body>

  <div class = "container">

    <h1>
      {{ $post->title }}
    </h1>

    <h5>
      {{ $post->published_at->diffForHumans() }}
    </h5>

      <!-- sugalvot kaip i posta idet nuotrauka pagal ID-->
      <img class="img-fluid" src="http://cars.dev/uploads/L_miura.jpg">

    <hr>
      {!! nl2br(e($post->content)) !!}
    <hr>

        <!-- <form>
          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </form> -->

    <br>
    <div class="pull-left">
        <a class="btn btn-primary" href="{{ url('/blog') }}">
            Back
        </a>
    </div>
    <br>

  </div>
    
</body>

</html>