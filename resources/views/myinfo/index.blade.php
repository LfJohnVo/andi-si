@extends('layouts.app')
@section('titulo', 'Perfil de usuario')
@section('content')

    <a
        class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Perfil de usuario</span>
        </div>
    </a>

    <style type="text/css">
        .h-5 {
            height: 1.25rem;
        }

        .w-5 {
            width: 1.25rem;
        }

        .h-40 {
            height: 10rem;
        }

        .-mt-16 {
            margin-top: -4rem;
        }

        .-mt-24 {
            margin-top: -6rem;
        }

        .img_perfil{
            clip-path: circle(60px at 50% 50%);
            transition: 0.3s;
        }
        .img_perfil:hover{
            transform: scale(1.1);
        }

        @media(min-width: 1050px){
          .img_portada{
            height: 350px !important;
          }
        }

    </style>

    <div class="w-full rounded-lg ">
        <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <div class="h-40 img_portada"
                style="background-image: url('https://wallpapercave.com/wp/wp6739949.jpg'); background-position: center; background-size: cover;">
            </div>
            <div class="px-4 pb-6 border-b ">
                <div class="mb-4 text-center shadow-lg sm:text-left sm:flex">
                    <img class="mr-4 -mt-16 border-4 border-white h-70 img_perfil"
                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                        alt="">
                    <div class="py-2">
                        <h3 class="mb-1 text-2xl font-bold dark:text-white">Agustin Vives</h3>
                        <div class="inline-flex items-center text-grey-dark sm:flex dark:text-white ">
                            <svg class="w-5 h-5 mr-1 text-grey" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui"
                                    d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            </svg>
                            CDMX, MX
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button
                        class="flex-1 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Seguir
                    </button>
                    <button
                        class="flex-1 px-4 py-2 font-semibold text-black border-2 rounded-full border-grey dark:text-white">Solicitar pago</button>
                </div>
            </div>
            @include('myinfo.tabs')
        </div>
        <br>
    </div>


@endsection

<script>
    function setup() {
        return {
            activeTab: 0,
            tabs: [
                "Información",
                "Regalias",
                "Anuncios",
            ]
        };
    };

</script>
