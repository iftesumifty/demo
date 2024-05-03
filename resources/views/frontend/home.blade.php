<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

    
  <h1 align="center" >Employee Record</h1>
      <a class="navbar-brand" href=""></a></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
          
          <li class="nav-item">
            <a class="nav-link active ,btn btn-dark" aria-current="page" href="{{route('login')}}">Log in</a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link active ,btn btn-dark" aria-current="page" href="{{route('registration')}}">Registration</a>
          </li>

          

         
          

           

          </li>
          @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        </ul>


        
        <form class="d-flex" role="search">
          
        </form>
      </div>
    </div>
  </nav>
</header>


</body>
</html>