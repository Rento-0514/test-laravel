<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">            
        フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @if(session('message'))
        <div class="text-red-600 font-bold">
          {{session('message')}}
        </div>
        @endif
        <form method="post" action="{{route('post.store')}}">
            @csrf
          <div class="mt8">
            <div class="w-full flex flex-col">
                <labl for="title" class="font-semibold mt-4">件名</labl>
                <input tyoe="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
            </div>
          </div>

          <div class="w-full flex flex-col">
            <lavel for="body" class="font-semibold mt-4">本文</lavel>
            <textarea name="body" class="w-auto py2 border border-gray-300 rounded-md" id="body" cola="30" raws="5"></textarea>
          </div>

          <x-primary-button class="mt-4">
            送信する
          </x-primary-button>
        </form>
    </div>
</x-app-layout>
