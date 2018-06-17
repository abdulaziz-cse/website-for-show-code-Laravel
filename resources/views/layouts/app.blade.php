<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<body>
      @include('layouts.navbar')


      @include('attention.alret')

@yield('start')


<script src="{{ asset('css/app.css') }}></script>
    
</body>
</html>
