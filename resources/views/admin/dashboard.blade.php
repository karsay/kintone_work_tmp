<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  管理者画面
                  <ul class="py-6">
                    <li>
                       <a href="{{ route('admin.user-register') }}">ユーザー登録</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</x-admin-layout>