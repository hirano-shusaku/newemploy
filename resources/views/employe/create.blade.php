<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      派遣社員の新規登録
    </h2>
    <x-input-error class="mb-4" :messages="$errors->all()" />
    <x-message :message="session('message')" />
  </x-slot>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
        <form method="post" action="{{ route('employe.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="name" class="font-semibold leading-none mt-4">名前</label>
                <input type="text" name="name" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="name" placeholder="Enter Title" value="{{ old('name') }}">
                @if ($errors->has('name'))
                  <p class="text-red-600">{{ $errors->first('name') }}</p>
                @endif
              </div>
                
              <div class="w-full flex flex-col ml-8">
                <label for="yomigana" class="font-semibold leading-none mt-4">よみがな</label>
                <input type="text" name="yomigana" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md @error('yomigana') is-invalid @enderror" id="yomigana" placeholder="Enter Title" value="{{ old('yomigana') }}">
                @error('yomigana')
                <p class="error text-red-600">{{ $message }}</p>
                @endif
              </div>
            </div>
              
            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="company" class="font-semibold leading-none mt-4">派遣会社</label>
                <input type="text" name="company" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="company" placeholder="Enter Title" value="{{ old('company') }}">
                @if ($errors->has('company'))
                    <p class="text-red-600">{{ $errors->first('company') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Tnumber" class="font-semibold leading-none mt-4">派遣コード</label>
                <input type="text" name="Tnumber" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="Tnumber" placeholder="Enter Title" value="{{ old('Tnumber') }}">
                @if ($errors->has('Tnumber'))
                  <p class="text-red-600">{{ $errors->first('Tnumber') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="depart" class="font-semibold leading-none mt-4">配属部署</label>
                <input type="text" name="depart" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="depart" placeholder="Enter Title" value="{{ old('depart') }}">
                @if ($errors->has('depart'))
                  <p class="text-red-600">{{ $errors->first('depart') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="section" class="font-semibold leading-none mt-4">セクション</label>
                <input type="text" name="section" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="section" placeholder="Enter Title" value="{{ old('section') }}">
                @if ($errors->has('section'))
                  <p class="text-red-600">{{ $errors->first('section') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
              <label for="job" class="font-semibold leading-none mt-4">職種</label>
              <input type="text" name="job" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="job" placeholder="Enter Title" value="{{ old('job') }}">
              @if ($errors->has('job'))
                  <p class="text-red-600">{{ $errors->first('job') }}</p>
              @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="firstDay" class="font-semibold leading-none mt-4">入社日</label>
                <input type="date" name="firstDay" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="firstDay" placeholder="Enter Title" value="{{ old('firstDay') }}">
                @if ($errors->has('firstDay'))
                  <p class="text-red-600">{{ $errors->first('firstDay') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="startDay" class="font-semibold leading-none mt-4">契約開始日</label>
                <input type="date" name="startDay" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="startDay" placeholder="Enter Title" value="{{ old('startDay') }}">
                @if ($errors->has('startDay'))
                  <p class="text-red-600">{{ $errors->first('startDay') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="endDay" class="font-semibold leading-none mt-4">契約終了日</label>
                <input type="date" name="endDay" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="endDay" placeholder="Enter Title" value="{{ old('endDay') }}">
                @if ($errors->has('endDay'))
                  <p class="text-red-600">{{ $errors->first('endDay') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="term" class="font-semibold leading-none mt-4">契約期間(※単位は月、小数点は1桁まで)</label>
                <input type="number" step="0.1" name="term" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="term" placeholder="Enter Title" value="{{ old('term') }}">
                @if ($errors->has('term'))
                    <p class="text-red-600">{{ $errors->first('term') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="workType" class="font-semibold leading-none mt-4">勤務形態</label>
                  <select name="workType" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" >
                    <option value="">選択してください</option>
                    <option value="定時間制" @if("定時間制" === old('workType')) selected @endif >定時間制</option>
                    <option value="時給制" @if("時給制" === old('workType')) selected @endif >時給制</option>
                    <option value="日給制" @if("日給制" === old('workType')) selected @endif >日給制</option>
                    <option value="裁量労働制" @if("裁量労働制" === old('workType')) selected @endif >裁量労働制</option>
                    <option value="その他" @if("その他" === old('workType')) selected @endif >その他</option>
                  </select>
                  @if ($errors->has('workType'))
                    <p class="text-red-600">{{ $errors->first('workType') }}</p>
                  @endif
              </div>
            </div>
            

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="hcost" class="font-semibold leading-none mt-4">派遣料</label>
                <input type="number" name="hcost" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="hcost" placeholder="Enter Title" value="{{ old('hcost') }}">
                @if ($errors->has('hcost'))
                    <p class="text-red-600">{{ $errors->first('hcost') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="tmcost" class="font-semibold leading-none mt-4">交通費（月額）</label>
                <input type="number" name="tmcost" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tmcost" placeholder="Enter Title" value="{{ old('tmcost') }}">
                @if ($errors->has('tmcost'))
                    <p class="text-red-600">{{ $errors->first('tmcost') }}</p>
                @endif
                </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="tdcost" class="font-semibold leading-none mt-4">交通費（日額）</label>
                <input type="number" name="tdcost" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tdcost" placeholder="Enter Title" value="{{ old('tdcost') }}">
                @if ($errors->has('tdcost'))
                    <p class="text-red-600">{{ $errors->first('tdcost') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="troute" class="font-semibold leading-none mt-4">交通ルート（駅名）</label>
                <input type="text" name="troute" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="troute" placeholder="Enter Title" value="{{ old('troute') }}">
                @if ($errors->has('troute'))
                    <p class="text-red-600">{{ $errors->first('troute') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="pnumber" class="font-semibold leading-none mt-4">PJ番号</label>
                <input type="text" name="pnumber" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pnumber" placeholder="Enter Title" value="{{ old('pnumber') }}">
                @if ($errors->has('pnumber'))
                    <p class="text-red-600">{{ $errors->first('pnumber') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="pname" class="font-semibold leading-none mt-4">PJ名</label>
                <input type="text" name="pname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="pname" placeholder="Enter Title" value="{{ old('pname') }}">
                @if ($errors->has('pname'))
                    <p class="text-red-600">{{ $errors->first('pname') }}</p>
                @endif
              </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="tcontent" class="font-semibold leading-none mt-4">作業内容</label>
                <textarea name="tcontent" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcontent" cols="30" rows="2">{{ old('tcontent') }}</textarea>
                @if ($errors->has('tcontent'))
                    <p class="text-red-600">{{ $errors->first('tcontent') }}</p>
                @endif
            </div>

            <div class="w-full flex flex-col">
              <label for="math" class="font-semibold leading-none mt-4">給与計算方法</label>
              <textarea name="math" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="tcontent" cols="30" rows="2">{{ old('math') }}</textarea>
              @if ($errors->has('math'))
                  <p class="text-red-600">{{ $errors->first('math') }}</p>
              @endif
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="HAname" class="font-semibold leading-none mt-4">派遣担当者名</label>
                <input type="text" name="HAname" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="HAname" placeholder="Enter Title" value="{{ old('HAname') }}">
                @if ($errors->has('HAname'))
                    <p class="text-red-600">{{ $errors->first('HAname') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="HAemail" class="font-semibold leading-none mt-4">派遣担当者email</label>
                <input type="text" name="HAemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="HAemail" placeholder="Enter Title" value="{{ old('HAemail') }}">
                @if ($errors->has('HAemail'))
                    <p class="text-red-600">{{ $errors->first('HAemail') }}</p>
                @endif
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="remark" class="font-semibold leading-none mt-4">備考</label>
              <textarea name="remark" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="remark" cols="30" rows="2">{{ old('remark') }}</textarea>
              @if ($errors->has('remark'))
                    <p class="text-red-600">{{ $errors->first('remark') }}</p>
              @endif
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="confirmer" class="font-semibold leading-none mt-4">部内更新確認者</label>
                <input type="text" name="confirmer" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="confirmer" placeholder="Enter Title" value="{{ old('confirmer') }}">
                @if ($errors->has('confirmer'))
                    <p class="text-red-600">{{ $errors->first('confirmer') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="Cemail" class="font-semibold leading-none mt-4">部内更新確認者email</label>
                <input type="text" name="Cemail" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="Cemail" placeholder="Enter Title" value="{{ old('Cemail') }}">
                @if ($errors->has('Cemail'))
                    <p class="text-red-600">{{ $errors->first('Cemail') }}</p>
                @endif
              </div>
            </div>

            <div class="w-full flex flex-col">
              <label for="CostMemo" class="font-semibold leading-none mt-4">派遣料変更の履歴など</label>
              <textarea name="CostMemo" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CostMemo" cols="30" rows="2">{{ old('CostMemo') }}</textarea>
              @if ($errors->has('CostMemo'))
                    <p class="text-red-600">{{ $errors->first('CostMemo') }}</p>
              @endif
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="kairan1" class="font-semibold leading-none text-blue-600 mt-4">稟議回覧先1</label>
                <input type="text" name="kairan1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="kairan1" placeholder="Enter Title" value="{{ old('kairan1') }}">
                @if ($errors->has('kairan1'))
                    <p class="text-red-600">{{ $errors->first('kairan1') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan2" class="font-semibold leading-none text-blue-600 mt-4">稟議回覧先2</label>
                <input type="text" name="kairan2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="kairan2" placeholder="Enter Title" value="{{ old('kairan2') }}">
                @if ($errors->has('kairan2'))
                    <p class="text-red-600">{{ $errors->first('kairan2') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan3" class="font-semibold leading-none text-blue-600 mt-4">稟議回覧先3</label>
                <input type="text" name="kairan3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="kairan3" placeholder="Enter Title" value="{{ old('kairan3') }}">
                @if ($errors->has('kairan3'))
                    <p class="text-red-600">{{ $errors->first('kairan3') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan4" class="font-semibold leading-none text-blue-600 mt-4">稟議回覧先4</label>
                <input type="text" name="kairan4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="kairan4" placeholder="Enter Title" value="{{ old('kairan4') }}">
                @if ($errors->has('kairan4'))
                    <p class="text-red-600">{{ $errors->first('kairan4') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="kairan5" class="font-semibold leading-none text-blue-600 mt-4">稟議回覧先5</label>
                <input type="text" name="kairan5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="kairan5" placeholder="Enter Title" value="{{ old('kairan5') }}">
                @if ($errors->has('kairan5'))
                    <p class="text-red-600">{{ $errors->first('kairan5') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany1" class="font-semibold leading-none mt-4">部内確認CCメール1</label>
                <input type="text" name="CCmycompany1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany1" placeholder="Enter Title" value="{{ old('CCmycompany1') }}">
                @if ($errors->has('CCmycompany1'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany1') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany2" class="font-semibold leading-none mt-4">部内確認CCメール2</label>
                <input type="text" name="CCmycompany2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany2" placeholder="Enter Title" value="{{ old('CCmycompany2') }}">
                @if ($errors->has('CCmycompany2'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany2') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany3" class="font-semibold leading-none mt-4">部内確認CCメール3</label>
                <input type="text" name="CCmycompany3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany3" placeholder="Enter Title" value="{{ old('CCmycompany3') }}">
                @if ($errors->has('CCmycompany3'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany3') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CCmycompany4" class="font-semibold leading-none mt-4">部内確認CCメール4</label>
                <input type="text" name="CCmycompany4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany4" placeholder="Enter Title" value="{{ old('CCmycompany4') }}">
                @if ($errors->has('CCmycompany4'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany4') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany5" class="font-semibold leading-none mt-4">部内確認CCメール5</label>
                <input type="text" name="CCmycompany5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany5" placeholder="Enter Title" value="{{ old('CCmycompany5') }}">
                @if ($errors->has('CCmycompany5'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany5') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CCmycompany6" class="font-semibold leading-none mt-4">部内確認CCメール6</label>
                <input type="text" name="CCmycompany6" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CCmycompany6" placeholder="Enter Title" value="{{ old('CCmycompany6') }}">
                @if ($errors->has('CCmycompany6'))
                    <p class="text-red-600">{{ $errors->first('CCmycompany6') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken1" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール1</label>
                <input type="text" name="CChaken1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken1" placeholder="Enter Title" value="{{ old('CChaken1') }}">
                @if ($errors->has('CChaken1'))
                    <p class="text-red-600">{{ $errors->first('CChaken1') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken2" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール2</label>
                <input type="text" name="CChaken2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken2" placeholder="Enter Title" value="{{ old('CChaken2') }}">
                @if ($errors->has('CChaken2'))
                    <p class="text-red-600">{{ $errors->first('CChaken2') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken3" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール3</label>
                <input type="text" name="CChaken3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken3" placeholder="Enter Title" value="{{ old('CChaken3') }}">
                @if ($errors->has('CChaken3'))
                    <p class="text-red-600">{{ $errors->first('CChaken3') }}</p>
                @endif
              </div>
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col">
                <label for="CChaken4" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール4</label>
                <input type="text" name="CChaken4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken4" placeholder="Enter Title" value="{{ old('CChaken4') }}">
                @if ($errors->has('CChaken4'))
                    <p class="text-red-600">{{ $errors->first('CChaken4') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken5" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール5</label>
                <input type="text" name="CChaken5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken5" placeholder="Enter Title" value="{{ old('CChaken5') }}">
                @if ($errors->has('CChaken5'))
                    <p class="text-red-600">{{ $errors->first('CChaken5') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="CChaken6" class="text-blue-600 font-semibold leading-none mt-4">派遣元確認CCメール6</label>
                <input type="text" name="CChaken6" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="CChaken6" placeholder="Enter Title" value="{{ old('CChaken6') }}">
                @if ($errors->has('CChaken6'))
                    <p class="text-red-600">{{ $errors->first('CChaken6') }}</p>
                @endif
              </div>              
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report1" class="font-semibold leading-none mt-4">稟議報告先1</label>
                <input type="text" name="report1" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report1" placeholder="Enter Title" value="{{ old('report1') }}">
                @if ($errors->has('report1'))
                    <p class="text-red-600">{{ $errors->first('report1') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report2" class="font-semibold leading-none mt-4">稟議報告先2</label>
                <input type="text" name="report2" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report2" placeholder="Enter Title" value="{{ old('report2') }}">
                @if ($errors->has('report2'))
                    <p class="text-red-600">{{ $errors->first('report2') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report3" class="font-semibold leading-none mt-4">稟議報告先3</label>
                <input type="text" name="report3" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report3" placeholder="Enter Title" value="{{ old('report3') }}">
                @if ($errors->has('report2'))
                    <p class="text-red-600">{{ $errors->first('report3') }}</p>
                @endif
              </div>            
            </div>

            <div class="md:flex items-center">
              <div class="w-full flex flex-col ">
                <label for="report4" class="font-semibold leading-none mt-4">稟議報告先4</label>
                <input type="text" name="report4" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report4" placeholder="Enter Title" value="{{ old('report4') }}">
                @if ($errors->has('report4'))
                    <p class="text-red-600">{{ $errors->first('report4') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col ml-8">
                <label for="report5" class="font-semibold leading-none mt-4">稟議報告先5</label>
                <input type="text" name="report5" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report5" placeholder="Enter Title" value="{{ old('report5') }}">
                @if ($errors->has('report5'))
                    <p class="text-red-600">{{ $errors->first('report5') }}</p>
                @endif
              </div>

              <div class="w-full flex flex-col  ml-8">
                <label for="report6" class="font-semibold leading-none mt-4">稟議報告先6</label>
                <input type="text" name="report6" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="report6" placeholder="Enter Title" value="{{ old('report6') }}">
                @if ($errors->has('report6'))
                    <p class="text-red-600">{{ $errors->first('report6') }}</p>
                @endif
              </div>            
            </div>
          
            <x-primary-button class="mt-4">
                登録する
            </x-primary-button>
            
        </form>
    </div>
  </div>
</x-app-layout>