<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      派遣元エージェントへの確認メール
    </h2>
    <x-input-error class="mb-4" :messages="$errors->all()" />
    <x-message :message="session('message')" />
  </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="mx-4 sm:p-8">
      <div class="mt-2">
        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <div class="mt-2">
            宛先：{{ $employe->HAemail }}<br>
            <hr class="border-collapse border border-slate-400 my-4">
            CC ： {{ $employe->CChaken1 }};　{{ $employe->CChaken2 }};　{{ $employe->CChaken3 }};　{{ $employe->CChaken4 }};　 {{ $employe->CChaken5 }};　{{ $employe->CChaken6 }}
            <hr class="border-collapse border border-slate-400 my-4">
            <p class="text-md text-gray-700">【ご確認】セガ：「{{ $employe->name }}さま」の派遣契約につきまして （{{  $employe->startDay->modify('-1 days')->format('m月d日') }}以降）</p>
            <hr class="border-collapse border border-slate-400 my-4">
            <p class="mt-2 text-md text-gray-700">{{ $employe->company }}<br>{{ $employe->HAname }}さま</p>
            お世話になっております。株式会社セガ {{ $user->name }}です。<br>
            表題の件ですが、下記ご確認の程宜しくお願い致します。<br>
            <br>
            現在の契約が{{ $employe->startDay->modify('-3 days')->format('Y年m月') }}末日で終了となります「{{ $employe->name }}」さまですが、<br>
            担当者から{{ $employe->term }}ヵ月契約更新の希望がありました。<br>
            <br>
            つきましては、ご本人にご確認頂き、ご承諾頂けましたら<br>{{ $employe->startDay->format('Y年m月d日') }}～{{ $employe->endDay->format('Y年m月d日') }}（{{ $employe->term }}ヵ月間）のお見積書を<br>ご作成、ご送付頂けますと幸いです。<br>
            
            <br>
            また現場担当者からのフィードバックもございますので、下記ご確認頂き<br>
            ご本人にお伝え頂ければ幸いです。<br>
            <br>
            ----------------------<br>
            ここはフィードバックあれば記入<br>
            なければこの部分と上部は削除<br>
            ----------------------<br>
            <br>
            お忙しいところ恐れ入りますが、<br>
            <span class="font-bold text-blue-800">〇月初旬を目途に</span>ご返信頂けますと幸いです。<br>
          
            何卒宜しくお願い致します。<br>

          </div>
        </div>
      </div>
  </div>
</div>

</x-app-layout>