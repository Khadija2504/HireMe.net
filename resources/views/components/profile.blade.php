<div x-show="open" class="fixed z-10 inset-0 overflow-y-auto" x-cloak style="background-color: #6970ff50;">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:flex sm:items-center sm:justify-center sm:p-0">

        <div class="font-sans mt-100 flex flex-row justify-center items-center">
            <div class="card w-96 mx-auto bg-white shadow-xl hover:shadow">
                <img class="w-32 h-32 mx-auto rounded-full -mt-20 border-8 border-white"
                @if (Auth::guard('entreprise')->check())
                src=" {{ asset('' . $entreprise->photo) }} "
                @elseif (!Auth::guard('entreprise')->check())
                    @if (Auth::user()->role == 'user')
                        src=" {{ asset('' . $user->photo) }} "
                    @elseif(Auth::user()->role == 'admin')
                    src=" {{ asset(''. $admin->photo) }} "
                    @endif
                @endif
                alt="photo profile">
                @if (Auth::guard('entreprise')->check())
                <div class="text-center text-blue-700 mt-2 text-3xl font-medium">{{$entreprise->nom}}</div>
                <div class="text-center font-normal text-blue-950 text-lg">{{$entreprise->slogan}}</div>
                <div class="px-6 text-center mt-2 font-light text-blue-950 text-sm">
                    <p>
                    {{$entreprise->description}}
                    </p>
                </div>
                @elseif (!Auth::guard('entreprise')->check())
                    @if (Auth::user()->role == 'user')
                    <div class="text-center text-blue-700 mt-2 text-3xl font-medium">{{$user->nom . ' ' . $user->prenom}}</div>
                    <div class="text-center font-normal text-blue-950 text-lg">{{$user->titre}}</div>
                    <div class="px-6 text-center mt-2 font-light text-blue-950 text-sm">
                        <p>
                        {{$user->about_me}}
                        </p>
                    </div>
                    @elseif(Auth::user()->role == 'admin')
                    <div class="text-center text-blue-700 mt-2 text-3xl font-medium">{{$admin->nom . ' ' . $admin->prenom}}</div>
                    <div class="text-center font-normal text-blue-950 text-lg">{{$admin->titre}}</div>
                    <div class="px-6 text-center mt-2 font-light text-blue-950 text-sm">
                        <p>
                        {{$admin->about_me}}
                        </p>
                    </div>
                    @endif
                @endif
                
                <hr class="mt-8">
                <div class="flex p-4">
                    <div class="w-1/2 text-center text-blue-700">
                        @if (Auth::guard('entreprise')->check())
                        <a href="{{route('updateProfileCompany')}}"><span class="font-bold">edit</span></a>
                        @elseif (!Auth::guard('entreprise')->check())
                            @if (Auth::user()->role == 'user')
                            <a href="{{route('updateProfileUser')}}"><span class="font-bold">edit</span></a>
                            @elseif(Auth::user()->role == 'admin')
                            <a href="{{route('updateProfile')}}"><span class="font-bold">edit</span></a>
                            @endif
                        @endif
                    </div>
                    <div class="w-0 border border-gray-300">
                    
                    </div>
                    <div class="w-1/2 text-center text-blue-700">
                        <button @click =" open = false">
                            <span class="font-bold">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>