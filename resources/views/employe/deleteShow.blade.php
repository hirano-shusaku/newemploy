<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      派遣社員の詳細情報
    </h2>
    
    <x-message :message="session('message')" />
  </x-slot>

  <div class="flex justify-center flex-row flex space-x-1">
    <form method="get" action="{{route('employe.revival', $employe)}}">
      @csrf
      <x-primary-button class="bg-teal-600 mt-4 mr-2" onClick="return confirm('本当に復活しますか？');">
        復元する
      </x-primary-button>
    </form>
    <form method="post" action="{{route('employe.delete', $employe)}}">
      @csrf
      @method('delete')
      <x-primary-button class="bg-red-500 mt-4 mr-2" onClick="return confirm('本当に完全削除しますか？');">
        削除する
      </x-primary-button>
    </form>
  </div>
  

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="name" class="font-semibold leading-none mt-4">名前</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->name }}</p>
              </div>
                
              <div class="w-full flex flex-col ml-8">
                <label for="yomigana" class="font-semibold leading-none mt-4">よみがな</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->yomigana }}</p>
              </div>
            </div>
              
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="company" class="font-semibold leading-none mt-4">派遣会社</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->company }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Tnumber" class="font-semibold leading-none mt-4">派遣コード</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->Tnumber }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="depart" class="font-semibold leading-none mt-4">配属部署</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->depart }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="section" class="font-semibold leading-none mt-4">セクション</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->section }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
              <label for="job" class="font-semibold leading-none mt-4">職種</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->job }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="firstDay" class="font-semibold leading-none mt-4">入社日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->firstDay->format('Y年m月d日') }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="startDay" class="font-semibold leading-none mt-4">契約開始日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->startDay->format('Y年m月d日') }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="endDay" class="font-semibold leading-none mt-4">契約終了日</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->endDay->format('Y年m月d日') }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="term" class="font-semibold leading-none mt-4">契約期間(※単位は月、小数点は1桁まで)</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->term }}カ月</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="workType" class="font-semibold leading-none mt-4">勤務形態</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->workType }}</p>
              </div>
            </div>
            
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="hcost" class="font-semibold leading-none mt-4">派遣料</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">￥{{ number_format($employe->hcost) }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="tmcost" class="font-semibold leading-none mt-4">交通費（月額）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">￥{{ number_format($employe->tmcost) }}</p>
                </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="tdcost" class="font-semibold leading-none mt-4">交通費（日額）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">￥{{ number_format($employe->tdcost) }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="troute" class="font-semibold leading-none mt-4">交通ルート（駅名）</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->troute }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="pnumber" class="font-semibold leading-none mt-4">PJ番号</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->pnumber }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="pname" class="font-semibold leading-none mt-4">PJ名</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->pname }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="tcontent" class="font-semibold leading-none mt-4">作業内容</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{!! nl2br(e($employe->tcontent)) !!}</p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="HAname" class="font-semibold leading-none mt-4">派遣担当者名</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->HAname }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="HAemail" class="font-semibold leading-none mt-4">派遣担当者email</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->HAemail }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="remark" class="font-semibold leading-none mt-4">備考</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{!! nl2br(e($employe->remark)) !!}</p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="confirmer" class="font-semibold leading-none mt-4">部内更新確認者</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->confirmer }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Cemail" class="font-semibold leading-none mt-4">部内更新確認者email</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->Cemail }}</p>
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="CostMemo" class="font-semibold leading-none mt-4">派遣料変更の履歴など</label>
              <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CostMemo }}</p>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="kairan1" class="font-semibold leading-none mt-4">稟議回覧先1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->kairan1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan2" class="font-semibold leading-none mt-4">稟議回覧先2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->kairan2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan3" class="font-semibold leading-none mt-4">稟議回覧先3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->kairan3 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan4" class="font-semibold leading-none mt-4">稟議回覧先4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->kairan4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan5" class="font-semibold leading-none mt-4">稟議回覧先5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->kairan5 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany1" class="font-semibold leading-none mt-4">部内確認CCメール1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany2" class="font-semibold leading-none mt-4">部内確認CCメール2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany3" class="font-semibold leading-none mt-4">部内確認CCメール3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany3 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany4" class="font-semibold leading-none mt-4">部内確認CCメール4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany5" class="font-semibold leading-none mt-4">部内確認CCメール5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany5 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany6" class="font-semibold leading-none mt-4">部内確認CCメール6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CCmycompany6 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken1" class="font-semibold leading-none mt-4">派遣元確認CCメール1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken2" class="font-semibold leading-none mt-4">派遣元確認CCメール2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken2 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken3" class="font-semibold leading-none mt-4">派遣元確認CCメール3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken3 }}</p>
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken4" class="font-semibold leading-none mt-4">派遣元確認CCメール4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken5" class="font-semibold leading-none mt-4">派遣元確認CCメール5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken5 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken6" class="font-semibold leading-none mt-4">派遣元確認CCメール6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->CChaken6 }}</p>
              </div>              
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report1" class="font-semibold leading-none mt-4">稟議報告先1</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report1 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report2" class="font-semibold leading-none mt-4">稟議報告先2</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report2 }}</p>
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report3" class="font-semibold leading-none mt-4">稟議報告先3</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report3 }}</p>
              </div>            
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report4" class="font-semibold leading-none mt-4">稟議報告先4</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report4 }}</p>
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report5" class="font-semibold leading-none mt-4">稟議報告先5</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report5 }}</p>
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report6" class="font-semibold leading-none mt-4">稟議報告先6</label>
                <p class="pl-4 font-semibold text-gray-600 py-4 bg-rose-200">{{ $employe->report6 }}</p>
              </div>    
        
            </div>
            
            
            
            
            
        
    </div>
  </div>
</x-app-layout>