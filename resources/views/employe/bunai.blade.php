<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      部内確認者へのメール
    </h2>
    <x-input-error class="mb-4" :messages="$errors->all()" />
    <x-message :message="session('message')" />
  </x-slot>

  

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="mx-4 sm:p-8">
      <div class="mt-2">
        <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
          <div class="mt-2">
            宛先：{{ $employe->Cemail }}<br>
            <hr class="border-collapse border border-slate-400 my-4">
            CC ： {{ $employe->CCmycompany1 }} ;　{{ $employe->CCmycompany2 }};　 {{ $employe->CCmycompany3 }};　 {{ $employe->CCmycompany4 }};　 {{ $employe->CCmycompany5 }};　 {{ $employe->CCmycompany6 }} 
            <hr class="border-collapse border border-slate-400 my-4">
            <p class="text-md text-gray-700">【ご確認】派遣：{{ $employe->name }}さんの契約更新・終了のご確認＿ {{  $employe->endDay->format('m月d日') }}以降</p>
            <hr class="border-collapse border border-slate-400 my-4">
            <p class="mt-2 text-md text-gray-700">{{ $employe->confirmer }}さん</p>
            お疲れ様です、第2管理部の{{ $user->name }}です。<br>
            表題の件ですが、下記ご確認の程宜しくお願い致します。<br>
            <br>
            現在の契約が{{ $employe->endDay->format('Y年m月d日') }}で終了となります「{{ $employe->name }}」さんですが、<br>
            契約終了後の翌月からの契約の有無をお知らせ頂けますでしょうか。<br>
            <br>
            下記のPJコードは現契約のものとなります。<br>
            PJコードと業務内容に変更がありましたら、お知らせください。<br>
            延長の場合は期間もお知らせください。<br>
            <br>
            また現場担当者からのフィードバックや寸表も（可能であれば）<br>
            あわせてお知らせください<br>
            <br>
            ----------------------<br>
            所属派遣会社：{{ $employe->company }}<br>
            名前：{{ $employe->name }}<br>
            PJ：{{ $employe->pname }} ： {{ $employe->pnumber }}<br>
            業務内容：<br>{!! nl2br(e($employe->tcontent)) !!}<br>
            ----------------------<br>
            <br>
            お忙しいところ恐れ入りますが、<br>
            <span class="font-bold text-blue-800">〇月〇日 (〇)を目途に</span>ご返信頂けますと幸いです。<br>
            
            <br>
            何卒宜しくお願い致します。<br>

          </div>
        </div>
      </div>
  </div>
</div>

</x-app-layout>