@extends('layouts.master')
@section('main')
    <div class="flex flex-row xs:flex-wrap ">
        <div class="flex items-enter justify-start min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0" style="width: 50%; margin: 5%;">
                <div>
                    <h2 class="text-xl mt-9 font-bold mb-4"> Experiences </h2>
                </div>
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
                <p> Ajouter votre cursus educatifs</p>
            </div>
            @endif

            <div>
                <h2 class="text-xl mt-9 font-bold mb-4"> Cursus educatif </h2>
            </div>
        @if(isset($cursus_educatif))
            @foreach ($cursus_educatif as $cursus_educatifs)
                <div class="space-y-6 mt-10 border-l-2 border-dashed">
                <div class="relative w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <div class="ml-6">
                    <h4 class="font-bold text-blue-500">{{$cursus_educatifs->nom_cursus_educatifs}}</h4>
                    <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$cursus_educatifs->description}}</p>
                    <span class="mt-1 block text-sm font-semibold text-blue-500">{{$cursus_educatifs->date}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
        @else
        <div class="flex h-screen items-center justify-center bg-white px-6 md:px-60">
            <p> Ajouter voter cursus educatifs</p>
        </div>
        @endif

            <div>
                <h2 class="text-xl mt-9 font-bold mb-4"> les langues maitrisees </h2>
            </div>

            @if(isset($myLangues))
                @foreach ($myLangues as $langue)
                    <div class="space-y-6 mt-10 border-l-2 border-dashed">
                        <div class="relative w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                            <div class="ml-6">
                            <h4 class="font-bold text-blue-500"></h4>
                            <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$langue->langues_maitrise->nom_langues_maitrisees}}</p>
                            <span class="mt-1 block text-sm font-semibold text-blue-500"></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="flex h-screen items-center justify-center bg-white px-6 md:px-60">
                <p> Ajouter les langues qui vos maitrisees</p>
            </div>
            @endif

            <div>
                <h2 class="text-xl mt-9 font-bold mb-4"> les competences </h2>
            </div>

            @if(isset($competenceUser))
           
            @foreach ($competenceUser as $compet)
            
                    <div class="space-y-6 mt-10 border-l-2 border-dashed">
                    <div class="relative w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-blue-500">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                        <div class="ml-6">
                        <h4 class="font-bold text-blue-500"></h4>
                        <p class="mt-2 max-w-screen-sm text-sm text-gray-500">{{$compet->competenceProv->nom_competence}}</p>
                        <span class="mt-1 block text-sm font-semibold text-blue-500"></span>
                        </div>
                    </div>
                </div>
            @endforeach    
                
            @else
            <div class="flex h-screen items-center justify-center bg-white px-6 md:px-60">
                <p> Ajouter votre competences</p>
            </div>
            @endif

            @if (!Auth::guard('entreprise')->check() && Auth::user()->role == 'admin')
            <div class="mt-8">
                @foreach ($userResult as $result)
                <form class="inline" action="{{route('deleteUser',$result->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                        Delete
                    </button>
                </form>
                @endforeach
            </div>
            <div class="mt-8">
                <button class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">
                   <a href="{{route('invoice.generate')}}">pdf</a>
                </button>
        </div>
            @endif
        </div>
        <div class="flex items-center justify-start min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                @foreach ($userResult as $result)

                <img class="w-full h-48 rounded-md object-cover" src="{{ asset('' . $result->background) }}" alt="Photo profile">
                <img class="w-40 h-40 mx-auto rounded-full -mt-20 border-8 border-white" src="{{ asset('' . $result->photo) }}" alt="Photo profile">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">First Name</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->nom}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Last Name</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->prenom}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Your title</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                                {{$result->titre}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">adresse</label>
                            <div type="text" name="adresse" id="" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->adresse}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">age</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->age}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        {{$result->email}}</div></div>
                        
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">poste actuel</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        {{$result->poste_actuel}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">About you</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        {{$result->about_me}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">contact informations</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        {{$result->contact_information}}</div></div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">industrie</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        {{$result->industrie}}</div></div>

                    </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection