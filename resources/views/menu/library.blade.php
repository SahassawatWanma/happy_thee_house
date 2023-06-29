<x-app-layout>
    <x-slot name="header">
        <ul class="flex">
            <li class="mr-5" style="margin-right: 5%">
              <a class="inline-block border border-white rounded hover:border-gray-200 text-grey-950 hover:bg-gray-200 py-2 px-4" href="{{ route('admin.dashboard') }}">Store</a>
            </li>
            <li class="mr-5">
              <a class="inline-block border border-gray-800 rounded py-2 px-4 bg-gray-950 hover:bg-gray-500 text-white" href="{{ route('admin.library') }}">Library</a>
            </li>
          </ul>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
