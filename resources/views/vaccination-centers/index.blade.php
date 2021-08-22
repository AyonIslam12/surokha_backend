<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccination Center') }}
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
                            <th class="border-l border-t px-2 py-1 text-Center">upazila_id </th>
                            <th class="border-l border-t px-2 py-1 text-Center">vaccine_id</th>
                            <th class="border-l border-t px-2 py-1 text-Center">available</th>
                            <th class="border-l border-t px-2 py-1 text-Center">enabled</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($vaccinationCenters as $item)
                        <tr>
                            <td class="border-l border-t px-2 py-1 text-left">{{ $item->name }}</td>
                            <td class="border-l border-t px-2 py-1 text-left">{{$item->upazila_id  }}</td>
                            <td class="border-l border-t px-2 py-1 text-left">{{ $item->vaccine_id }}</td>
                            <td class="border-l border-t px-2 py-1 text-left">{{ $item->available }}</td>
                            <td class="border-l border-t px-2 py-1 text-left"> @if($item->enabled == 1)
                                <span class="text-success">Yes</span>
                                @else
                                <span class="text-danger">No</span>
                            @endif
                        </td>
                            <td class="border-l border-t px-2 py-1 text-center">
                                {{-- <form action="{{route('vaccination-centers.edit', $item->id)}}" method="POST" class="inline-block"> @csrf
                                    <button type="submit">{{$item->registered == 0 ? 'Sign' : 'Unsign'}}</button>
                                </form> --}}
                                <a class="inline-block" href="{{route('vaccination-centers.edit', $item->id)}}">Edit</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                   <div class="my-2">
                    {{ $vaccinationCenters->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

