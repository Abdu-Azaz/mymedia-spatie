<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    img {
  display: block;
  max-width:130px;
  object-fit:fill
    }

    /* img:hover{
        opacity: 50%;
    } */

    .image-container {
    position: relative;
}

.hover-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    opacity: 0;
    transition: opacity 0.2s;
}

.image-container:hover {
    filter: brightness(50%); /* Adjust the value to control the darkness */
}

.image-container:hover .hover-button {
    opacity: 1;
    background:white;
    color:black
}


</style>
</head>

<body class="antialiased">
    <div class="my-5">
        @yield('content')
    </div>

</body>

</html>
