<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peoples') }}
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
                            <th class="border-l border-t px-2 py-1 text-left">People Id No</th>
                            <th class="border-l border-t px-2 py-1 text-Center">DOB</th>
                            <th class="border-l border-t px-2 py-1 text-Center">Office</th>
                            <th class="border-l border-t px-2 py-1 text-Center">Register Status</th>
                            <th class="border-l border-t px-2 py-1 text-center">Actions</th>
                        </tr>

                        @foreach($people as $item)
                        <tr>
                            <td class="border-l border-t px-2 py-1 text-left">{{ $item->id_no }}</td>
                            <td class="border-l border-t px-2 py-1 text-left">{{ date("Y-M-d",strToTime($item->dob)) }}</td>
                            <td class="border-l border-t px-2 py-1 text-left">{{ Str::ucfirst($item->office) }}</td>
                            <td class="border-l border-t px-2 py-1 text-left"> @if($item->registered == 1)
                                <span class="text-success">Registered</span>
                                @else
                                <span class="text-danger">Not Registered</span>
                            @endif
                        </td>
                            <td class="border-l border-t px-2 py-1 text-center">
                                <form action="{{route('people_register_enable_disable', $item->id)}}" method="POST" class="inline-block"> @csrf
                                    <button type="submit">{{$item->registered == 0 ? 'Sign' : 'Unsign'}}</button>
                                </form>
                                <a class="inline-block" href="{{route('people.edit', $item->id)}}">Edit</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

