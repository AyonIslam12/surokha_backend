<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccines') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Session::get('message'))
                    <div class="p-3 bg-green-200 mb-6">
                        {{Session::get('message')}}
                    </div>
                    @endif


                    <table class="w-full border-r border-b">
                        <tr>
                            <th class="border-l border-t px-2 py-1 text-left">Name</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($vaccines as $item)
                        <tr>
                            <td class="border-l border-t px-2 py-1 text-left">{{ $item->name }}</td>
                            <td class="border-l border-t px-2 py-1 text-center">
                                <a class="inline-block" href="{{route('vaccines.edit', $item->id)}}">Edit</a> |
                                <form class="inline-block" action="{{ route('vaccines.destroy',$item->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
