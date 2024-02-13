@extends('layouts.master')
@section('main')
    <div class="flex flex-row xs:flex-wrap ">
        <div class="flex items-enter justify-start min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <h2 class="text-xl font-bold mb-4"> Ajouter votre competences </h2>
                
                <form class="p-4 md:p-5" action="{{ route('competencesCreate')}}" method="post">
                        @csrf
                        <input type="hidden" name="users_id" value="{{$userId}}" required>
                        <input type="hidden" name="type_user" value="user" required>
                        <input type="hidden" name="entreprise_id" value="" required>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="competences_id[]" multiple id="" required>
                            <option selected disabled="">Select competences</option>
                            @foreach ($competences as $competence)
                                <option value="{{ $competence->id }}">{{ $competence->nom_competence }}</option>
                            @endforeach
                        </select>
                        <br>
                    <button type="submit" name="competencesCreate" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                        ajouter
                    </button>
                </form>
            </div>
            <div class="form-container sign-up-container">
                <h2 class="text-xl font-bold mb-4"> Ajouter les langues vous avais maitrisees </h2>
                
                <form action="{{route('languesMaitriseesCreate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="users_id" value="{{$userId}}" required>
                    <input type="hidden" name="type_user" value="user" required>
                    <input type="hidden" name="entreprise_id" value="" required>

                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="langues_maitrisees_id[]"  multiple id="" required>
                        <option selected disabled="">Select langues_mitrisees</option>
                        @foreach ($langues_maitrisees as $langues_maitrisee)
                            <option value="{{ $langues_maitrisee->id }}">{{ $langues_maitrisee->nom_langues_maitrisees }}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" name="languesMaitriseesCreate" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                        ajouter
                    </button>
                </form>
            </div>
            <div class="form-container sign-up-container">
                <h2 class="text-xl font-bold mb-4"> Ajouter voter experiences </h2>
                
                <form action="{{route('experienceProf')}}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$userId}}" required>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" type="text" name="nom_competence_prof" placeholder="experiences" required> <br>
                    <input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" value="" placeholder="description" required> <br>
                    <input type="date" name="date" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="date d'experience" required> <br>
                    <button type="submit" name="experienceProf" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                        ajouter
                    </button>
                </form>
            </div>
            <div>
                <h2 class="text-xl mt-9 font-bold mb-4"> Ajouter voter experiences </h2>
            </div>
            <a href="{{route('invoice.generate')}}">pdf</a>
            @if(isset($experiences))
                @foreach ($experiences as $experience)
                    <div class="space-y-6 mt-10 border-l-2 border-dashed">
                    <div class="relative w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-6">
                        <h4 class="font-bold text-blue-500">{{$experience->nom_competence_prof}}</h4>
                        <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$experience->description}}</p>
                        <span class="mt-1 block text-sm font-semibold text-blue-500">{{$experience->date}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            @else
            <div class="flex h-screen items-center justify-center bg-white px-6 md:px-60">
                <p> Ajouter voter experiences profitionnel</p>
            </div>
            @endif
            

            <div>
            </div>
        </div>

        <div class="flex items-center justify-start min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <img class="w-full h-48 rounded-md object-cover" src="{{ asset('' . $user->background) }}" alt="Photo profile">
                <img class="w-40 h-40 mx-auto rounded-full -mt-20 border-8 border-white" src="{{ asset('' . $user->photo) }}" alt="Photo profile">
                
                <form class="p-4 md:p-5" action="{{route('up')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">

                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">change your profile photo</label>
                        <input type="file" name="photo" value="{{$user->photo}}">
                        
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">change your background photo</label>
                        <input type="file" name="background" value="{{$user->background}}">
                        
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">First Name</label>
                            <input type="text" name="nom" id="" value="{{$user->nom}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Last Name</label>
                            <input type="text" name="prenom" id="" value="{{$user->prenom}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Your title</label>
                            <input type="text" name="titre" id="" value="{{$user->titre}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">adresse</label>
                            <input type="text" name="adresse" id="" value="{{$user->adresse}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">age</label>
                            <input type="number" name="age" id="" value="{{$user->age}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                            <input type="email" name="email" id="" value="{{$user->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>
                        
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">poste actuel</label>
                            <input type="text" name="poste_actuel" value="{{$user->poste_actuel}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">About you</label>
                            <input type="text" name="about_me" value="{{$user->about_me}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">contact informations</label>
                            <input type="text" name="contact_information" value="{{$user->contact_information}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">industrie</label>
                            <input type="text" name="industrie" value="{{$user->industrie}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Password</label>
                            <input type="password" name="password" value="{{$user->password}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                    </div>
                    <button type="submit" name="updateProfileUser" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                        Modify
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection