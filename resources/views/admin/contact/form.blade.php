Check me out
Copy
@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Contact</h1>
    <form action = "{{route('contact.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="name" name="name" class="form-control" >
      </div>
      <div class="mb-3">
        <label class="form-label">NIS</label>
        <input name="nis" class="form-control" >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection