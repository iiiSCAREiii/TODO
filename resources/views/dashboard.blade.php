<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div>
            <h1></h1>
            <a href="{{route('boards.index')}}">Gérer ses Boards</a>

        </div>
    </div>
</x-app-layout>
