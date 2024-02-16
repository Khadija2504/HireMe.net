@extends('layouts.master')
@section('main')
<main class="container mx-auto px-4 py-8">
    <section id="content" class="bg-white shadow-md rounded-lg p-6 shadow-md">
        <h2 class="text-3xl font-bold mb-4">Display all of the jobs</h2>
        <p class="text-gray-800 mb-6">Plastic surgery is arguably the surgical speciality with the widest ranging palate of subspecialties. Plastic surgery does not own a ‘tissue’, as our orthopaedic or dermatologic colleagues, for example, deal specifically with bone or skin; instead, plastics delivers its ethos of problem-solving and knowledge of manipulating tissues just within the range of their anatomical and vascular limitations to reconstruct functional and morphological deficits.</p>

        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <p class="text-gray-800 mb-6">The user how has the maximum posts number:</p>
                <h2>{{$userWithMaxPosts->nom}} {{$userWithMaxPosts->prenom}}</h2>
                <p>{{$userWithMaxPosts->titre}}</p>
            </li>
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <p class="text-gray-800 mb-6">The user how has the minimum posts number:</p>
                <h2>{{$userWithLastMaxPosts->nom}} {{$userWithLastMaxPosts->prenom}}</h2>
                <p>{{$userWithLastMaxPosts->titre}}</p>
            </li>
            <li class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                <p class="text-gray-800 mb-6">The company with maximum jobs:</p>
                <h2>{{$companyWithMaxJobs->nom}}</h2>
            </li>
        </ul>
    </section>
</main>
@endsection