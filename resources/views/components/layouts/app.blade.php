<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="SHORTCUT ICON" href="/favicon.ico" />
    <link rel="canonical" href="./" />
    
    @livewireStyles
</head>

<body>
   
            {{ $slot }}
      
  
     @livewireScripts
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
 
</body>
<x-livewire-alert::scripts />

</html>