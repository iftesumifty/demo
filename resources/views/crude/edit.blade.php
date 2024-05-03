@extends('file.index')


<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update', $user->id)}}" method='POST' eenctype="multipart/form-data">
  @csrf
 @method('PUT')
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">name</label>
    <input type="text" class="form-control"name='name' id="exampleInputEmail1"  placeholder="enter your name"value="{{$user->name}}">
   
  </div>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">email</label>
    <input type="text" class="form-control" name='email'id="exampleInputPassword1"placeholder="enter email"value="{{$user->email}}">
</div>

  
  
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">phone</label>
    <input type="integer" class="form-control"name='phone' id="exampleInputPassword1"placeholder="enter phone"value="{{$user->phone}}">
  </div>

 
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">address</label>
    <input type="text" class="form-control"name='address' id="exampleInputPassword1"placeholder="enter phone"value="{{$user->address}}">
  </div>
 

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
