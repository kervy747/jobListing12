<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/general.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nav.css')}}">
  <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
  <title>Document</title>
</head>
<body>
  <nav>
    <x-nav href='/' :active="request()->is('/')">Home</x-nav>
    <x-nav href='/jobs' :active="request()->is('jobs')">Jobs</x-nav>
    <x-nav href='/contacts' :active=" request()->is('contacts')">Contacts</x-nav>
  </nav>
  
  <header>
   <h1>{{ $headings }}</h1> 
  </header>

  <hr>

  {{ $slot }}
</body>
</html>