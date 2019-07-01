<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.Laravel = { csrfToken: 'csrf_token() ' } </script>
    <title>Portablog Dashboard </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300|Lato:300,400,600,700|Roboto+Condensed:300,700|Open+Sans+Condensed:300,600|Open+Sans:400,300,600,700|Maven+Pro:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <Homepage
                :user-name='@json(auth()->user()->name)'
                :user-id='@json(auth()->user()->id)'
        ></Homepage>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>