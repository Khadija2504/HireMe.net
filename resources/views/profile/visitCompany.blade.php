@extends('layouts.master')
@section('main')
    <div class="flex flex-row xs:flex-wrap ">
        
        <div class="flex items-center justify-start min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                @foreach ($entrepriseResult as $result)

                <img class="w-full h-48 rounded-md object-cover" src="{{ asset('' . $result->background) }}" alt="Photo profile">
                <img class="w-40 h-40 mx-auto rounded-full -mt-20 border-8 border-white" src="{{ asset('' . $result->photo) }}" alt="Photo profile">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Name</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->nom}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Slogan</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->slogan}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Adresse</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                                {{$result->adresse}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">email</label>
                            <div type="text" name="email" id="" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->email}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">description</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->description}}</div></div>
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">industrie</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        {{$result->industrie}}</div></div>

                    </div>
            @endforeach
            </div>
            @if (!Auth::guard('entreprise')->check() && Auth::user()->role == 'admin')
            <div class="mt-8">
                @foreach ($entrepriseResult as $result)
                <form class="inline" action="{{route('deleteCompany',$result->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                        Delete
                    </button>
                </form>
                @endforeach
            </div>
            @endif
        </div>

        <div class="flex items-enter justify-start min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <h2 class="text-xl font-bold mb-4"> les offres d'emplois </h2>

                @if(isset($offreDemplois))
                @foreach ($offreDemplois as $offre)
                    <div class="space-y-6 mt-10 border-l-2 border-dashed">
                    <div class="relative w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-6">
                            <h4 class="font-bold text-blue-500"><form class="inline" action="{{route('dispalyPosts',$offre->id)}}" method="GET">
                                <button>
                                    {{$offre->titre}}
                                </button>
                            </form></h4>
                        <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$offre->description}}</p>
                        <span class="mt-1 block text-sm font-semibold text-blue-500">{{$offre->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            @else
            <div class="flex h-screen items-center justify-center bg-white px-6 md:px-60">
                <p> ajouter votre premier offre d'emploi</p>
            </div>
            @endif
        </div>
    </div>
@endsection