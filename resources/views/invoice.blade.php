<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-row xs:flex-wrap ">
        
        <div class="flex items-center justify-start min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <img class="w-full h-48 rounded-md object-cover" src="{{ asset('' . $user->background) }}" alt="Photo profile">
                <img class="w-40 h-40 mx-auto rounded-full -mt-20 border-8 border-white" src="{{ asset('' . $user->photo) }}" alt="Photo profile">
                
                    <div class="grid gap-4 mb-4 grid-cols-2">

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
            </div>
        </div>
        <div class="flex items-enter justify-start min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div>
                <h2 class="text-xl mt-9 font-bold mb-4"> Ajouter votre experiences </h2>
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
                <p>aucune experience</p>
            </div>
            @endif
            

            <div>
            </div>
        </div>
    </div>
</body>

</html>