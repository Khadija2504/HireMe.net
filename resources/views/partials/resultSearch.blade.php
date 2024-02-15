@extends('layouts.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <section id="content" class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold mb-4">Display all of the jobs</h2>
        <p class="text-gray-800 mb-6">Plastic surgery is arguably the surgical speciality with the widest ranging palate of subspecialties. Plastic surgery does not own a ‘tissue’, as our orthopaedic or dermatologic colleagues, for example, deal specifically with bone or skin; instead, plastics delivers its ethos of problem-solving and knowledge of manipulating tissues just within the range of their anatomical and vascular limitations to reconstruct functional and morphological deficits.</p>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($offreDemplois as $offreDemploi)
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">{{$offreDemploi->titre}}</h3>
                <p class="text-gray-700 mb-4">{{$offreDemploi->description}} <br>
                    Create at : {{$offreDemploi->created_at}} <br>
                    Updated at : {{$offreDemploi->updated_at}} <br>
                    by : {{$offreDemploi->entreprises->nom}}
                </p>
                @if (!Auth::guard('entreprise')->check() && Auth::user()->role == 'user')
                    <div class="mt-8">
                        <form class="inline" action="{{route('postForm',$offreDemploi->id)}}" method="GET">
                            <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                                Contact
                            </button>
                        </form>
                    </div>
                @elseif ($offreDemploi->id_entreprise == $entreprisesId)
                    <div x-data="{ open : false }">
                        <a href="#" @click="open = true" class=""><button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">add skils</button></a>
                            @include('components.competences')
                    </div>
                @endif
            
            <div class="mt-8">
                <form class="inline" action="{{route('dispalyPosts',$offreDemploi->id)}}" method="GET">
                    <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                        Dispaly all details
                    </button>
                </form>
            </div>
            </li>
        @endforeach
        @if(isset($entrepriseResult))
            @foreach ($entrepriseResult as $result)
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <p>
                    {{$result->nom}}
                </p>
                @foreach ($offreEntreprise as $offre)
                    <div class="space-y-6 mt-10 border-l-2 border-dashed">
                        <div class="relative w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                            <div class="ml-6">
                                <h4 class="font-bold text-blue-500"><form class="inline" action="{{route('dispalyPosts',$result->id)}}" method="GET">
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
            </li>
            @endforeach
        @endif
        </ul>
    </section>
</main>
@endsection