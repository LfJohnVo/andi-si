<div x-data="setup()">
    <ul class="flex items-center justify-center my-4">
        <template x-for="(tab, index) in tabs" :key="index">
            <li class="px-4 py-2 text-gray-500 border-b-8 cursor-pointer"
                :class="activeTab===index ? 'text-purple-500 border-purple-500' : ''" @click="activeTab = index"
                x-text="tab"></li>
        </template>
    </ul>

    <div>
        <div x-show="activeTab===0">
            @include('myinfo.profile')
        </div>
        <div x-show="activeTab===1">
            <h2 class="items-center my-6 ml-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Estadisticas
          </h2>
          @include('myinfo.tarjetas')
          @include('myinfo.table')
        </div>
        <div x-show="activeTab===2">
            @include('myinfo.posts')
        </div>
    </div>
</div>
