@extends('layouts.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <section id="content" class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold mb-4">Allof the jobs</h2>
        <p class="text-gray-800 mb-6">Plastic surgery is arguably the surgical speciality with the widest ranging palate of subspecialties. Plastic surgery does not own a ‘tissue’, as our orthopaedic or dermatologic colleagues, for example, deal specifically with bone or skin; instead, plastics delivers its ethos of problem-solving and knowledge of manipulating tissues just within the range of their anatomical and vascular limitations to reconstruct functional and morphological deficits.</p>

        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($offreDemplois as $offreDemploi)
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-bold mb-4">{{$offreDemploi->titre}}</h3>
                <p class="text-gray-700 mb-4">{{$offreDemploi->description}} <br>
                    @foreach ($offre->competences as $competence)
                    competences:  {{$competence->nom_competence}} <br>
                    @endforeach
                    Create at : {{$offreDemploi->created_at}} <br>
                    Updated at : {{$offreDemploi->updated_at}} <br>
                </p>
            </li>
            @endforeach
        </ul>
    </section>
</main>
@endsection