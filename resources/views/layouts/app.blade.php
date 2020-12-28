<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Shuga') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <style>

            
            .section-right1{
                width: 30%;
                background:white;
            }

            body {
                font-family: 'Nunito';
            }
            
            svg{
               width: 100%;
               height: auto; 
               color: black;
            }

            nav{
                background: #FD5068;
                color:white;
            }

            a{
                text-decoration: none;
                color:white;
            }
            .iinput{
                width:100%;
                background-color: #F5F5F5;
                border: 0px solid #F5F5F5;
                height: 40px;
                border-radius: 15px;
                Margin-top:10px;
                padding-left: 20px;
                
            }
            .iinputsub{
                width:50%;
                background-color: #343434;
                color:white;
                border: 0px solid #343434;
                height: 40px;
                border-radius: 15px;
                Margin-top:10px;
            }
            *:focus {
                outline: none;
            }

        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div>
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                <div class="content" >

                 <!-- Page Content desktop-->
                <div id="desk" >
                    <div class=""style="background:white">                         
                            @include('navigation-dropdown')
                    </div>
                    <div class="">
                            {{ $slot }}
                    </div>
                </div>

                 <!-- Page Content mobile -->
                
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
