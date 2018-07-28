<!DOCTYPE html>
<html lang="en">
<head>
      
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UOH</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<style>
        body  {
            background-image: url("https://stackoverflow.blog/wp-content/uploads/2017/10/What_are_the_Most_Disliked_Programming_Languages-1-1200x675.png");
            background-color: #cccccc;
        }
        </style>
</head>

<body>

      @include('layouts.navbar')
      @include('layouts.alret')
      <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/<version>/classic/ckeditor.js"></script>
@yield('start')


</body>
</html>
