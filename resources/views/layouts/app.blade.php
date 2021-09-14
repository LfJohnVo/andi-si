<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Andi') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    {{-- iconos fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--  dark mode  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mode_dark.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css" rel="stylesheet">

     <style type="text/css">
        #table_top_filter input{
            margin: 20px 5px;
            border: none !important;
            border-bottom: 1px solid #7e3af2 !important;
            border-radius: 0;
        }
        #table_top_length select{
            width: 70px !important;
            margin: 20px 5px;  
            border: none !important;
            border-bottom: 1px solid #7e3af2 !important;
            border-radius: 0;
        }
        #table_top a.paginate_button.current{
            background-color: #7e3af2 !important;
            border: none;
        }
        #table_top{
            border: none !important;
            overflow-x: scroll;
            width: 100%;
        }
        #table_top thead th{
            border-bottom: 1px solid #ccc;
        }
        #table_top thead tr{
            background-color: #fff !important;
        }
        #table_top tbody tr:nth-child(even){
            background-color: #f5f5f5 !important;
        }
        #table_top_paginate .paginate_button.current{
            border: none;
            background: #7e3af2 !important;
            color: #fff !important;
            transform: scale(0.8);
            border-radius: 100px;
        }
     </style>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- sidenav and navbar -->
        @include('layouts.sidenav')
        <!-- sidenav and navbar -->

        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        </div>

        <div class="flex flex-col flex-1 w-full">
            <!-- header -->
            @include('layouts.navigation')
            <!-- header -->

            <!-- main -->
            <main class="h-full overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        @yield('titulo')
                    </h2>
                    <!-- CTA -->

                    <!-- Table -->

                    <div class="caja_general">
                        @yield('content')

                    </div>

                </div>
            </main>
            <!-- main -->

        </div>
    </div>
</body>

@include('layouts.scripts')

</html>
