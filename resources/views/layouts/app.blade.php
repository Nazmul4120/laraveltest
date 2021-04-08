<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewpoint content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel auth</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class ="bg-gray-100">
  <nav class="p-6 bg-white flex justify-between">
      <ul class ="flex items-center ">
          <li>
              <a href="" class="p-3">Home </a>
              <li>
              <a href="{{route('dashboard') }}" class="p-3">Dashboard</a>
          </li>
      </ul

      <ul class ="flex items-center ">
          <li>
              <a href="" class="p-3">login </a>
          <li>
              <a href ="" class="p-3">Register</a>
          </li>
          <li>
              <a href="" class="p-3">NazmulHoque</a>
          <li>
              <a href ="" class="p-3">Logout   </a>
          </li>
      </ul>
  </nav>
<div class="Container mx-auto mt-6 px-6">

</div>
 @yield('content')
</body>
</html>
