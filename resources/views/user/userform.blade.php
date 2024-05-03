<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Apply for leave</h1>

<center>
<form action="{{route('messagepass')}}" method='post'>
        @csrf

        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div> <br>
@endif
<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="enter name">
  </div><br>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="email"name="email"  placeholder="name@example.com">
  </div><br>

  <div class="form-group">
    <label for="exampleFormControlInput1">subject</label>
    <input type="subject" class="form-control" id="subject"name="subject" placeholder="enter subject">
  </div><br>
  

  <div class="form-group">
    <label for="exampleFormControlSelect1"> select</label>
    <select class="form-control" id="select" name="select" >
      <option>sick</option>
      <option>causal</option>
      <option>emergency</option>
     
    </select>
  </div><br>
  <div class="form-group">
  <label for="datemax">Enter a date before 1980-01-01:</label>
  <input type="date" id="datemax" name="datemax" max="1979-12-31"><br><br>

  <label for="datemin">Enter a date after 2000-01-01:</label>
  <input type="date" id="datemin" name="datemin" min="2000-01-02"><br><br>
  
  <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>

  <input type="submit" value="Submit">
  </div>
 
</form>

</center>


<a href="{{route('logout1')}}">Logout</a><br>
</body>
</html>
