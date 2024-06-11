<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    livewire TEST
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
    {{-- <livewire:counter /> --}}
    @livewire('counter')
    @livewireScripts
</body>
</html>
