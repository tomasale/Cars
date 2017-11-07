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

        <button class = "btn btn-primary" onclick = "history.go(-1)">
          « Back
        </button>

    </div>
</body>

</html>