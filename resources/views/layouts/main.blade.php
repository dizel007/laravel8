<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
 
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Main</a>
              <a class="nav-link" href="{{ route('post.index') }}">Post</a>
              <a class="nav-link" href="{{ route('about.index') }}">About</a>
              <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
      </nav>
 

    </div>
    <div>
      @yield('content')
    </div>
  </div>


</body>
</html>
