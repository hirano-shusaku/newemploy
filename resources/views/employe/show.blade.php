<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      派遣社員の詳細情報
    </h2>
    
    <x-message :message="session('message')" />
  </x-slot>

  <div class="flex justify-center flex-row flex space-x-1">
    <div class="basis-1/8">
      <a href="{{ route('employe.edit', $employe) }}" >
        <x-primary-button class="bg-teal-600 mt-4 mr-2">編集する</x-primary-button>
      </a>
    </div>
      
    <div class="basis-1/8 ">
      <form method="post" action="{{ route('employe.destroy', $employe) }}">
        @method('delete')
        @csrf
        <a href="{{ route('employe.edit', $employe) }}" >
          <x-primary-button class="bg-orange-600 mt-4 mr-2" onClick="return confirm('本当に削除しますか？');">削除する</x-primary-button>
        </a>
      </form>
    </div>

    <div class="basis-1/8 ">
      <a href="{{ route('employe.newringi', $employe) }}" >
        <x-primary-button class="bg-violet-600 mt-4 mr-2">新規稟議</x-primary-button>
      </a>
    </div>

    <div class="basis-1/8 ">
      <a href="{{ route('employe.ringi', $employe) }}" >
        <x-primary-button class="bg-stone-800 mt-4 mr-2">通常稟議</x-primary-button>
      </a>
    </div>

    <div class="basis-1/8 ">
      <a href="{{ route('employe.bunai', $employe) }}" >
        <x-primary-button class="bg-orange-400 mt-4 mr-2">部内メール</x-primary-button>
      </a>
    </div>

    <div class="basis-1/8 ">
      <a href="{{ route('employe.hakenmoto', $employe) }}" >
        <x-primary-button class="bg-green-900 mt-4 mr-2">派遣メール</x-primary-button>
      </a>
    </div>
  </div>
  

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="name" class="font-semibold leading-none mt-4">名前</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->name }}</p>
              </div>
                
              <div class="w-full flex flex-col ml-8">
                <label for="yomigana" class="font-semibold leading-none mt-4">よみがな</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->yomigana }}</p>
              </div>
            </div>
              
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="company" class="font-semibold leading-none mt-4">派遣会社</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->company }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Tnumber" class="font-semibold leading-none mt-4">派遣コード</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->Tnumber }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="depart" class="font-semibold leading-none mt-4">配属部署</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->depart }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="section" class="font-semibold leading-none mt-4">セクション</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->section }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
              <label for="job" class="font-semibold leading-none mt-4">職種</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->job }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="firstDay" class="font-semibold leading-none mt-4">入社日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->firstDay->format('Y年m月d日') }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="startDay" class="font-semibold leading-none mt-4">契約開始日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->startDay->format('Y年m月d日') }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="endDay" class="font-semibold leading-none mt-4">契約終了日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->endDay->format('Y年m月d日') }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="term" class="font-semibold leading-none mt-4">契約期間(※単位は月、小数点は1桁まで)</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->term }}カ月</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="workType" class="font-semibold leading-none mt-4">勤務形態</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->workType }}</p>
              </div>
            </div>
            
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="hcost" class="font-semibold leading-none mt-4">派遣料</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">￥{{ number_format($employe->hcost) }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="tmcost" class="font-semibold leading-none mt-4">交通費（月額）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">￥{{ number_format($employe->tmcost) }}</p>
                </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="tdcost" class="font-semibold leading-none mt-4">交通費（日額）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">￥{{ number_format($employe->tdcost) }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="troute" class="font-semibold leading-none mt-4">交通ルート（駅名）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->troute }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="pnumber" class="font-semibold leading-none mt-4">PJ番号</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->pnumber }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="pname" class="font-semibold leading-none mt-4">PJ名</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->pname }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="tcontent" class="font-semibold leading-none mt-4">作業内容</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{!! nl2br(e($employe->tcontent)) !!}</p>
            </div>

            <div class="w-full flex flex-col">
              <label for="math" class="font-semibold leading-none mt-4">給与計算方法</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{!! nl2br(e($employe->math)) !!}</p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="HAname" class="font-semibold leading-none mt-4">派遣担当者名</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->HAname }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="HAemail" class="font-semibold leading-none mt-4">派遣担当者email</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->HAemail }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="remark" class="font-semibold leading-none mt-4">備考</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{!! nl2br(e($employe->remark)) !!}</p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="confirmer" class="font-semibold leading-none mt-4">部内更新確認者</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->confirmer }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Cemail" class="font-semibold leading-none mt-4">部内更新確認者email</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->Cemail }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="CostMemo" class="font-semibold leading-none mt-4">派遣料変更の履歴など</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">
                {!! nl2br(e($employe->CostMemo)) !!}
              </p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="kairan1" class="font-semibold leading-none mt-4">稟議回覧先1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->kairan1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan2" class="font-semibold leading-none mt-4">稟議回覧先2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->kairan2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan3" class="font-semibold leading-none mt-4">稟議回覧先3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->kairan3 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan4" class="font-semibold leading-none mt-4">稟議回覧先4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->kairan4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan5" class="font-semibold leading-none mt-4">稟議回覧先5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->kairan5 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany1" class="font-semibold leading-none mt-4">部内確認CCメール1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany2" class="font-semibold leading-none mt-4">部内確認CCメール2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany3" class="font-semibold leading-none mt-4">部内確認CCメール3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany3 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany4" class="font-semibold leading-none mt-4">部内確認CCメール4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany5" class="font-semibold leading-none mt-4">部内確認CCメール5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany5 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany6" class="font-semibold leading-none mt-4">部内確認CCメール6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CCmycompany6 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken1" class="font-semibold leading-none mt-4">派遣元確認CCメール1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CChaken1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken2" class="font-semibold leading-none mt-4">派遣元確認CCメール2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken3" class="font-semibold leading-none mt-4">派遣元確認CCメール3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CChaken3 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken4" class="font-semibold leading-none mt-4">派遣元確認CCメール4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CChaken4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken5" class="font-semibold leading-none mt-4">派遣元確認CCメール5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CChaken5 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken6" class="font-semibold leading-none mt-4">派遣元確認CCメール6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->CChaken6 }}</p>
              </div>              
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report1" class="font-semibold leading-none mt-4">稟議報告先1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report2" class="font-semibold leading-none mt-4">稟議報告先2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report2 }}</p>
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report3" class="font-semibold leading-none mt-4">稟議報告先3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report3 }}</p>
              </div>            
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report4" class="font-semibold leading-none mt-4">稟議報告先4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report5" class="font-semibold leading-none mt-4">稟議報告先5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report5 }}</p>
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report6" class="font-semibold leading-none mt-4">稟議報告先6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200 rounded-lg">{{ $employe->report6 }}</p>
              </div>    
        
            </div>
            
            <div class="basis-1/8">
              <a href="{{ route('employe.edit', $employe) }}" >
                <x-primary-button class="bg-teal-600 mt-4 mr-2">編集する</x-primary-button>
              </a>
            </div>  
            
            
            
        
    </div>
  </div>
</x-app-layout>