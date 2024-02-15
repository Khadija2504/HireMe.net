@extends('layouts.master')
@section('main')
<main class="container mx-auto px-4 py-8 bg-gray-100">
    <div id="content" class="content sidenav iedit bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">Contact us</h2>
        <p>We understand that communication is a key component of a patient’s experience. At the Manchester Centre for Plastic Surgery and Burns, we will always be honest and open. There is 24-hour surgical cover at both Wythenshawe and the Royal Manchester Children’s Hospital. Here is a list of other useful contacts.</p>
        <h3>UHSM — Wythenshawe and Withington Community</h3>

            <li class="bg-gray-100 flex flex-row xs:flex-wrap text-blue-900 rounded-lg p-6 shadow-md">
                <div>
                    <h3 class="text-xl font-bold mb-4">{{$offre->titre}}</h3>
                    <p class="text-gray-700 mb-4">
                        {{$offre->description}} <br>
                        Create at : {{$offre->created_at}} <br>
                        Updated at : {{$offre->updated_at}} <br>
                        By : {{$offre->entreprises->nom}}<br>
                    </p> 
                </div>
                <div class="w-20"></div>
                <div>
                    <p class="text-gray-700 mb-4">
                        Competences:
                        @foreach ($offreCompetence as $offreComp)
                        <ul>
                            {{$offreComp->competenceProv->nom_competence}}
                        </ul>
                        @endforeach
                    </p>
                </div>
            </li>
            <form class="inline" action="{{route('postForm',$offre->id)}}" method="GET">
                <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                    Contact
                </button>
            </form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 mt-4">
            @foreach ($posts as $postss)

            <div class="card shadow-md rounded-lg p-6">
                <h4 class="text-lg font-bold"> {{$postss->post}} </h4>
                <form action="{{route('visitUser', $postss->users->id)}}" method="GET">
                    <button>  
                    <p>{{$postss->users->nom}} {{$postss->users->prenom}}</p>
                    </button>
                </form>
                <p> {{$postss->created_at}} </p>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
