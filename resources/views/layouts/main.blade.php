<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
    background-color: #96c7e8;
}
nav{
 
 background: #2980b9;
 overflow: hidden;
}
nav a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
nav a:hover {
  background-color: #96c7e8;
  color: #e6e6e6;
}

     </style>
     </head>
<body>
    @include('layouts.menu')

@yield('content')
</body>
</html>
