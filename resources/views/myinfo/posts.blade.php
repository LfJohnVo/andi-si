@for($i = 0; $i < 10; $i++)

<div class="w-full overflow-hidden rounded-lg shadow-md">
    <div class="px-10 py-6 my-4 bg-white rounded-lg shadow-md">

        <div class="flex items-center justify-between">
            <span class="font-light text-gray-600">mar 10, 2021</span>
            <a class="px-2 py-1 font-bold text-gray-100 bg-blue-600 rounded hover:bg-gray-500" href="#">Anuncio</a>
        </div>
        <div class="mt-2">
            <a class="text-2xl font-bold text-gray-700 hover:text-gray-600" href="#">Acceso a la información durante la pandemia</a>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita
                dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus
                nihil quis facere in modi ratione libero!</p>
        </div>
        <div class="flex items-center justify-between mt-4">
            <a class="text-blue-600 hover:underline" href="#">Saber más</a>
        </div>
    </div>
</div>
<hr>
@endfor
