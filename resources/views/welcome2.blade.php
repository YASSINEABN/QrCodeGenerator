<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@livewireStyles
<body>
    @extends('layouts.body')
    @section('content')
    
    <livewire:content>
    @endsection

</body>
</html>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    font-weight: 400;   
    line-height: 1.5;
    color: #212529;
    text-align: left;
}
::-webkit-scrollbar {
    width: 8px;
  
}

::-webkit-scrollbar-thumb {
    background-color: #535050;
   
}


    </style>
   
       @livewireScripts