@can('admin')
  <a href="{{ route('employe.index1') }}"><x-primary-button class="bg-purple-400 mx-6 text-zinc-50">
    1部一覧
  </x-primary-button></a>

  <a href="{{ route('employe.index2') }}"><x-primary-button class="bg-purple-400 mx-6 text-zinc-50">
    2部一覧
  </x-primary-button></a>

  <a href="{{ route('employe.index3') }}"><x-primary-button class="bg-purple-400 mx-6 text-zinc-50">
    その他＿
  </x-primary-button></a>
@endcan
