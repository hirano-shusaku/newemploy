<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      新規稟議
    </h2>
    <x-message :message="session('message')" />
  </x-slot>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="mt-2">
                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-2">
                        <p class="text-md text-gray-700 font-semibold ">申請区分：C-6-02</p>
                        <p class="text-md text-gray-700 font-semibold ">申請部門選択：{{ $employe->depart }}</p>

                        @if ($employe->kairan1 == null)
                        @else
                        <p class="text-md text-blue-800 font-semibold  mt-2">部内回覧先1：{{ $employe->kairan1 }}</p>
                        @endif
                        
                        @if ($employe->kairan2 == null)
                        @else
                        <p class="text-md text-blue-800 font-semibold ">部内回覧先2：{{ $employe->kairan2 }}</p>
                        @endif

                        @if ($employe->kairan3 == null)
                        @else
                        <p class="text-md text-blue-800 font-semibold">部内回覧先3：{{ $employe->kairan3 }}</p>
                        @endif

                        @if ($employe->kairan4 == null)
                        @else
                        <p class="text-md text-blue-800 font-semibold">部内回覧先4：{{ $employe->kairan4 }}</p>
                        @endif

                        @if ($employe->kairan5 == null)
                        @else
                        <p class="text-md text-blue-800 font-semibold">部内回覧先5：{{ $employe->kairan5 }}</p>
                        @endif

                        @if ($employe->report1 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold mt-2">報告先1：{{ $employe->report1 }}</p>
                        @endif

                        @if ($employe->report2 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold">報告先2：{{ $employe->report2 }}</p>
                        @endif

                        @if ($employe->report3 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold">報告先3：{{ $employe->report3 }}</p>
                        @endif

                        @if ($employe->report4 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold">報告先4：{{ $employe->report4 }}</p>
                        @endif

                        @if ($employe->report5 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold">報告先5：{{ $employe->report5 }}</p>
                        @endif

                        @if ($employe->report6 == null)
                        @else
                        <p class="text-md text-gray-700 font-semibold">報告先6：{{ $employe->report6 }}</p>
                        @endif
                        
                        <hr class="w-full mt-2">
                        <p class="mt-2 text-gray-600 py-4">【SOJ】【外注派遣】{{ $employe->job.$employe->name.$employe->term."ヵ月（新規）".$employe->startDay->format('Y年m月d日')."～".$employe->endDay->format('Y年m月d日') }}</p>
                        <hr class="w-full">
                        <div class="md:flex items-center">
                          <div class="w-full flex flex-col">
                            <p class="mt-2 font-bold text-black-800 pt-2">１．理由・目的</p>
                            <p class="text-gray-600">{{ $employe->depart." ".$employe->section."において、 人材不足の為、新に". $employe->company ."と「".$employe->name."（".$employe->yomigana."）」氏の派遣契約を締結したく稟議申請致します" }}</p>

                            <p class="mt-2 font-bold text-black-800 pt-2">２．相手先</p>
                            <p class="text-gray-600">{{ $employe->company }}</p>

                            <p class="mt-2 font-bold text-black-800 pt-2">３．内容</p>
                            <p class="text-gray-600">名前：{{ $employe->name }}：{{ $employe->Tnumber ?: ''}}</p>
                            <p class="text-gray-600">PJ名：{{ $employe->pname }}：{{ $employe->pnumber ?: ''}}</p>
                            <p class="text-gray-600">業務内容：<br>{!! nl2br(e($employe->tcontent)) !!}</p>

                            <p class="mt-2 font-bold text-black-800 pt-2">４．契約期間</p>
                            <p class="text-gray-600">{{ $employe->startDay->format('Y年m月d日') }}～{{ $employe->endDay->format('Y年m日d日')."(".$employe->term."カ月)" }}</p>
                            <p class="text-gray-600">(契約開始日{{ $employe->firstDay->format('Y年m月d日') }})</p>
                            <p class="text-gray-600">稼働日はセガカレンダーに準拠します</p>

                            <p class="mt-2 font-bold text-black-800 pt-2">５．費用</p>
                            <p class="font-bold text-black-800">＜総額＞（税抜／税込）</p>
                            <p class="text-gray-600">費用形態：{{ $employe->workType }}</p>
                              @switch($employe->workType)
                                @case('定時間制')
                                  <p class="text-gray-600">月額：￥{{number_format($employe->hcost)}}</p>
                                  <p class="text-gray-600">小計：￥{{number_format($employe->hcost)}}×{{ $employe->term }}カ月＝￥{{ number_format($employe->hcost*$employe->term)."（税抜）" }}</p>
                                  <p class="text-gray-600">税込：￥{{ number_format($employe->hcost*$employe->term*1.1)."（税込）" }}</p>
                                    @if ($employe->tmcost)
                                    <p class="text-gray-600">交通費：￥{{ number_format($employe->tmcost) }}×{{ $employe->term }}カ月＝￥{{ number_format($employe->tmcost*$employe->term) }}</p>
                                    @else
                                    <p class="text-gray-600">※交通費は発生しません</p>
                                    @endif
                                    <p class="text-gray-600">合計：￥{{ number_format($employe->hcost*$employe->term*1.1 + $employe->tmcost*$employe->term) }}（税込）</p>
                                @break
                                @case('時給制')
                                  <p class="text-gray-600">時給：￥{{number_format($employe->hcost)}}（税別）</p>
                                  <p class="text-gray-600">概算派遣費用</p>
                                  <p class="text-gray-600">{{ $employe->startDay->format('m月') }}：自分で修正してください</p>
                                  <p class="text-gray-600">{{ $employe->startDay->modify('+1 months')->format('m月') }}：自分で修正してください</p>
                                  <p class="text-gray-600">{{ $employe->endDay->format('m月') }}：自分で修正してください</p>
                                  
                                    @if ($employe->tmcost)
                                    <p class="text-gray-600">交通費：￥{{ number_format($employe->tmcost) }}×{{ $employe->term }}カ月＝￥{{ number_format($employe->tmcost*$employe->term) }}</p>
                                    @else
                                    <p class="text-gray-600">※交通費は発生しません</p>
                                    @endif
                                    <p class="text-gray-600">合計：自分で修正してください（税込）</p>
                                    
                                  @break
                                @case('日給制')
                                  <p class="text-gray-600">日給：￥{{number_format($employe->hcost)}}（税別）</p>
                                  <p class="text-red-600">{{number_format($employe->hcost)}}×〇〇日＝￥自分で修正（税別）</p>
                                    @if ($employe->tmcost)
                                      <p class="text-gray-600">交通費：￥{{ number_format($employe->tmcost) }}×{{ $employe->term }}カ月＝￥{{ number_format($employe->tmcost*$employe->term) }}</p>
                                    @else
                                    <p class="text-gray-600">※交通費は発生しません</p>
                                    @endif
                                    <p class="text-red-600">合計：日給と交通費の合計を入力（税込）</p>
                                  @break
                                  @case('裁量労働制')
                                  <p class="text-gray-600">時給：￥{{number_format($employe->hcost)}}（税別）</p>
                                  <p class="text-gray-600">概算派遣費用</p>
                                  <p class="text-gray-600">{{ $employe->startDay->format('m月') }}：自分で修正してください</p>
                                  <p class="text-gray-600">00月：自分で修正してください</p>
                                  <p class="text-gray-600">{{ $employe->endDay->format('m月') }}：自分で修正してください</p>
                                  
                                    @if ($employe->tmcost)
                                    <p class="text-gray-600">交通費：￥{{ number_format($employe->tmcost) }}×{{ $employe->term }}カ月＝￥{{ number_format($employe->tmcost*$employe->term) }}</p>
                                    @else
                                    <p class="text-gray-600">※交通費は発生しません</p>
                                    @endif
                                    <p class="text-red-600">合計：自分で修正してください（税込）</p>
                                  @break
                                @default
                                <p class="text-red-600">特殊なので、自分で調節して記入してください</p>
                              @endswitch

                            <p class="mt-2 font-bold text-black-800 pt-2">６．支払条件・支払予定日</p>
                            <p class="text-gray-600">毎月末日締め翌月末日に請求書による支払い</p> 

                            <p class="mt-2 font-bold text-black-800 pt-2">７．特記事項</p>
                            <p class="text-gray-600">見積書を添付しました、よろしくお願いいたします。</p> 
                            <hr class="w-full mt-2">
                            @if ($employe->workType == "時給制")
                            <p class="mt-2 font-bold text-blue-700 pt-2">もし合計金額が0円の場合は『決裁金額なし』</p>
                            @endif
                            <p class="mt-2 font-bold text-black-800 pt-2">見積書を添付する</p>
                            
                            <hr class="w-full mt-2">
                            <p class="text-black-800 pt-2">摘要：【SOJ】【外注派遣】{{ $employe->job.$employe->name.$employe->term."ヵ月（新規）".$employe->startDay->format('Y年m月d日')."～".$employe->endDay->format('Y年m月d日') }}</p>
                            <p class="text-black-800">費用負担部門：第2事業部 or 第2管理部</p>
                            <p class="text-black-800">取引先：{{ $employe->company }}</p>
                            <p class="text-black-800">プロジェクト：{{ $employe->pname.":". $employe->pnumber }}</p>
                            <p class="text-black-800">支払予定日：{{ $employe->startDay->modify('+1 months')->format('Y年m月') }}末日</p>
                            <p class="text-blue-800">税込金額入力、見積書と同額が確認する</p>
                              
                          </div>
                        </div>
                </div>
            </div>
      </div>
  </div>
</x-app-layout>


  
