@extends('layouts.app')
@section('content')
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">ユーザ 登録</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full">
          <label for="email" class="leading-7 text-sm text-gray-600">名前</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2 w-full">
          <label for="email" class="leading-7 text-sm text-gray-600">フリガナ</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="p-2 w-full">
          <label for="email" class="leading-7 text-sm text-gray-600">性別</label>
          <select id="sex"
            class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out"
            name="sex">
            <option value="men">
              男
            </option>
            <option value="wonmen">
              女
            </option>
            <option value="etc">
              その他
            </option>
          </select>
        </div>
        <div class="p-2 w-full">
          <button
            class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">登録</button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection