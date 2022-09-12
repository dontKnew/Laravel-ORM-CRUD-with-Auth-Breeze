<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tution Student Management') }}
        </h2>
    </x-slot>
    <div class="py-2">
        {{-- <h1 class="text-2xl text-center underline mb-2 font-bolder">  --}}
            <div class="flex justify-around ">
                <div class="mb-3 xl:w-96">
                    <form action="{{route('dashboard')}}" method="POST" class="w-100">
                        @csrf
                        @method("POST")
                        <input type="search" name="discover" class="text-center form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search Data --> Hit Enter">
                        <input type="submit" name="submit" class="hidden">
                    </form>
                </div>
                <div class="mt-2">
                    @if(isset($showResetBtn))
                        <a href="{{route('dashboard')}}" class="bg-green-500 p-2 mt-1 text-white hover:shadow-lg hover:bg-green-800 text-xsm font-thin">Reset Search Data</a>
                    @else 
                    <a href="{{route("add-student")}}" class="bg-pink-500 p-2 text-white hover:shadow-lg hover:bg-pink-800 text-xsm font-thin">Add Student </a>
                    @endif 
                        
                </div>
                
              </div>
         {{-- </h1> --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-4 bg-white border-b border-gray-200" style="overflow-x: scroll">
                    @if (session()->has('error'))
                        <div class="text-red-800 bg-red-100 text-center p-1"> {{session('error')}}</div>
                    @elseif(session()->has('success')) 
                        <div class="text-green-800 bg-green-100 text-center p-1"> {{session('success')}}</div>
                    @endif
                    <div class="table w-full p-2">
                        <table class="w-full  border">
                            <thead class="">
                                <tr class="bg-gray-50 border-b">
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            ID
                                            <a href="{{route("dashboard", ["orderby"=>"id", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Name
                                            <a href="{{route("dashboard", ["orderby"=>"name", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Father Name
                                            <a href="{{route("dashboard", ["orderby"=>"father_name", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Contact
                                            <a href="{{route("dashboard", ["orderby"=>"contact", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Subject
                                            <a href="{{route("dashboard", ["orderby"=>"subject", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Fees
                                            <a href="{{route("dashboard", ["orderby"=>"fees", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Register Date
                                            <a href="{{route("dashboard", ["orderby"=>"id", "method"=>$method])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-md font-thin text-gray-900">
                                        <div class="flex items-center justify-center">
                                            Manage
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($students as $student)
                                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                    <td class="p-2 border-r">{{$student->id}}</td>
                                    <td class="p-2 border-r">{{$student->name}}</td>
                                    <td class="p-2 border-r">{{$student->father_name}}</td>
                                    <td class="p-2 border-r">{{$student->contact}}</td>
                                    <td class="p-2 border-r">{{$student->subject}}</td>
                                    <td class="p-2 border-r">{{$student->fees}}</td>
                                    <td class="p-2 border-r">{{$student->created_at}}</td>
                                    <td>
                                        <a href="{{url('update-student', $student->id)}}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                                        <a href="{{url('delete-student', $student->id)}}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($students->count() == 10)
            {{$students->links('pagination::simple-tailwind')}}                      
        @endif

    </div>
</x-app-layout>
