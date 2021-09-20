<!-- Desktop sidebar -->
<style type="text/css">
    span.absolute.inset-y-0.left-0.w-1.bg-purple-600.rounded-tr-lg.rounded-br-lg{
        display: none;
    }
    .pestaña_activa{
        font-weight: bolder;
        position: relative;
    }
    .pestaña_activa a{
        color: #7e3af2;
    }

    aside li:before{
        content: "";
        position: absolute;
        width: 0%;
        height: 2px;
        left: 23px;
        bottom: 10px;
        transition: 0.3s;
        background-color: #7e3af2;
    }
     aside li:hover:before, .pestaña_activa:before{
        width: 80%;
    }

    aside i{
        font-size: 16pt;
    }

    .logo_andi:hover{
        transform: scale(1.1);
    }

</style>
<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white shadow-sm shadow-md dark:bg-gray-800 md:block" style="box-shadow: 0 90px 6px -1px rgba(0,0,0,.1),0 2px 4px -1px rgba(0,0,0,.06);">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="w-full" style="display: flex; justify-content: center; filter: brightness(1.3);" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo_andi.png') }}" class="w-2/4 duration-300 logo_andi">
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('dashboard') || request()->is('dashboard/*') ? 'pestaña_activa' : '' }}">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('dashboard') }}">
                    <i class="fas fa-chart-pie"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('productoras') || request()->is('productoras/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('productoras') }}">
                    <i class="fas fa-video"></i>
                    <span class="ml-4">Televisoras</span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('obras') || request()->is('obras/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('obras') }}">
                    <i class="fas fa-theater-masks"></i>

                    <span class="ml-4">Distribución</span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('socios') || request()->is('socios/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('socios') }}">
                    <i class="fas fa-address-card"></i>
                    <span class="ml-4">Socios andi</span></span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('my-info') || request()->is('my-info/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('myinfo') }}">
                    <i class="fas fa-user-circle"></i>
                    <span class="ml-4">Mi perfil</span></span>
                </a>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Preguntas frecuentes
                <span class="ml-2" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </span>
            </button>
        </div>
    </div>
</aside>

<!-- Desktop sidebar -->

<!-- Mobile sidebar -->
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="w-full" style="display: flex; justify-content: center; filter: brightness(1.3);" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo_andi.png') }}" class="w-2/4 duration-300 logo_andi">
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3 {{ request()->is('dashboard') || request()->is('dashboard/*') ? 'pestaña_activa' : '' }}">
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="index.html">
                    <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('dashboard') }}">
                    <i class="fas fa-chart-pie"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('productoras') || request()->is('productoras/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('productoras') }}">
                    <i class="fas fa-video"></i>
                    <span class="ml-4">Televisoras</span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('obras') || request()->is('obras/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('obras') }}">
                    <i class="fas fa-theater-masks"></i>

                    <span class="ml-4">Distribución</span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('socios') || request()->is('socios/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('socios') }}">
                    <i class="fas fa-address-card"></i>
                    <span class="ml-4">Socios andi</span></span>
                </a>
            </li>
            <li class="relative px-6 py-3 hover:text-purple-600 {{ request()->is('my-info') || request()->is('my-info/*') ? 'pestaña_activa' : '' }}">
                <a class="inline-flex items-center w-full text-sm font-semibold"
                    href="{{ route('myinfo') }}">
                    <i class="fas fa-user-circle"></i>
                    <span class="ml-4">Mi perfil</span></span>
                </a>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Preguntas frecuentes
                <span class="ml-2" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </span>
            </button>
        </div>
    </div>
</aside>
<!-- Mobile sidebar -->
