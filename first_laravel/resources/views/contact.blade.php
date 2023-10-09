<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js')}}"></script>
    <title>contact</title>
</head>
<body>
    <h3>Contact us</h3>
    <p>Name: {{$name}}</p>
    <p>Tel : {{$Phone??'No Phone'}}</p>
   <!-- ?? = $var=condition?True:Fale; -->
  

</body>
</html>