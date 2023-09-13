<x-app-layout>
  <x-slot name="header">
    
    <div class="flex">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-14">
        派遣社員の一覧
      </h2>
      
      <x-index-all-button />

    </div>
    <x-input-error class="mb-4" :messages="$errors->all()" />
    <x-message :message="session('message')" />
  </x-slot>

  <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="my-6">
            <table class="text-left w-full border-collapse mt-8"> 
                    <tr class="bg-blue-700">
                      <th class="p-3 text-left text-white">
                        <a class="bg-sky-900 overline" href={{ route('employe.index1company') }}>派遣会社</a>
                      </th>
                      <th class="p-3 text-left text-white">名前</th>
                      <th class="p-3 text-left text-white">配属部署</th>
                      <th class="p-3 text-left text-white">
                        <a class="bg-sky-900 overline" href={{ route('employe.index1section') }}>セクション</a>
                      </th>
                      <th class="p-3 text-left text-white">
                        <a class="bg-sky-900 overline" href={{ route('employe.index1fday') }}>入社日</a>
                      </th>
                      <th class="p-3 text-left text-white">現契約開始日</th>
                      <th class="p-3 text-left text-white">
                        <a class="bg-sky-900 overline" href={{ route('employe.index1endDay') }}>現契約終了日
                      </th>
                      <th class="p-3 text-left text-white">
                        <a class="bg-sky-900 overline" href={{ route('employe.index1hcost') }}>派遣料</a>
                      </th>
                      <th class="p-3 text-left text-white">PJ名</th>
                      <th class="p-3 text-left text-white">詳細</th>
                        
                    </tr>
                    @foreach($employes as $employ) 
                    <tr class="bg-white">
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->company}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->name}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->depart}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->section}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->firstDay->format('Y/m/d')}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->startDay->format('Y年m月d日')}}</td>
                        
                        @if ($employ->endDay->modify('-1 months -27 days') <= $now)
                        <td class="bg-red-400 border-gray-light border hover:bg-blue-300 p-3">{{$employ->endDay->format('Y年m月d日')}}</td>
                        @else
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->endDay->format('Y年m月d日')}}</td>
                        @endif
                        
                        <td class="border-gray-light border hover:bg-gray-100 p-3">￥{{number_format($employ->hcost)}}</td>
                        <td class="border-gray-light border hover:bg-gray-100 p-3">{{$employ->pname}}</td>
                        
                        <td class="border-gray-light border hover:bg-gray-100 p-3">
                            <a href="{{ route('employe.show', $employ) }}">
                              <x-secondary-button class="bg-teal-400">詳細</x-secondary-button>
                            </a>
                        </td>
                        
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>

</x-app-layout>