<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Session::get('message'))
                    <div class="p-3 bg-green-200 mb-6">
                       {{  Session::get('message')}}
                    </div>
                    @endif
                    <table class="w-full border-r border-b">
                          <tr>
                            <th class="border-l border-t px-2 py-1 text-left">Sl</th>
                            <th  class="border-l border-t px-2 py-1 text-center">Name</th>
                            <th  class="border-l border-t px-2 py-1 text-center">Minimum Age</th>
                            <th  class="border-l border-t px-2 py-1 text-center">Actions</th>

                            @foreach ($categories as $key=> $item )
                            <tr>
                                <td class="border-l border-t px-2 py-1 text-left">{{ $key+1 }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">{{ $item->name }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">{{ $item->min_age }}</td>
                                <td class="border-l border-t px-2 py-1 text-center">
                                    <a href="{{ route('categories.edit',$item->id) }}">edit</a>
                                </td>
                              </tr>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
