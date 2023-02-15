<x-guest-layout>

    <div class="h-screen pb-14 bg-right bg-cover">
        <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-slate-300">
            <!--左側-->
            <div class="flex flex-col w-full xl:w-6/6 justify-center lg:items-start overflow-y-hidden ">
                <h1 class="my-4 text-3xl md:text-6xl text-green-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">派遣データベース管理システム</h1>
                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle mt-4">
                    稟議や契約確認の為の必要な情報をすべてこのアプリケーションで管理し、必要最低限の作業で効率的に業務を進めていけます。
                </p>
            
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                    このアプリを使用すれば誰でも簡単に作業が効率的に実施できます。
                </p>
                <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                    {{-- ボタン設定 --}}
                    <a href="{{ route('login') }}"><x-primary-button class="mr-4 bg-blue-600 font-bold text-base  text-center">
                        login
                    </x-primary-button></a>

                    <a href="{{ route('register') }}"><x-primary-button class="mr-4 bg-yellow-500 font-bold text-base text-center">
                        ご登録
                    </x-primary-button></a>
                </div>
            </div>
            {{-- 右側 --}}
            <div class="w-full xl:w-6/6 py-4 overflow-y-hidden my-4 ">
                <img class="w-6/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl bg-white" src="{{asset('logo/segas.png')}}">
            </div>
        </div>
        <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="w-full text-sm text-center md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
                <P> 通常フロー</p>
                    1：部内確認メール<br>
                    2：編集（契約期間、派遣料、作業内容の変更等）<br>
                    3：派遣元へメール<br>
                    4：見積書が来たら編集（必要あれば）、稟議申請
            </div>
            <!--フッタ-->
            <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                <p class="text-gray-500 text-center">2023/2/15 ：作成者：平野 周作 laravel使用</p>
            </div>
        </div>
    </div>


</x-guest-layout>