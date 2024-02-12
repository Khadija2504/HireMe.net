@extends('layouts.master')
@section('main')
    <div class="flex flex-row xs:flex-wrap ">
        <div class="flex items-enter justify-start min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <h2 class="text-xl font-bold mb-4"> Control your informations profile </h2>
                <img src="{{ asset('' . $entreprise->photo) }}" alt="Photo">
                
                <form class="p-4 md:p-5" action="{{ route('up')}}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">First Name</label>
                            <input type="text" name="nom" id="" value="{{$entreprise->nom}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Last Name</label>
                            <input type="text" name="prenom" id="" value="{{$entreprise->prenom}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                            <input type="text" name="adresse" id="" value="{{$entreprise->adresse}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                            <input type="email" name="email" id="" value="{{$entreprise->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Password</label>
                            <input type="password" name="password" value="{{$entreprise->password}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                        </div>

                    </div>
                    <button type="submit" name="store" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                        Modify
                    </button>
                </form>
            </div>
            <form action="{{route('createCursure')}}" method="POST">
                @csrf
                <input type="string" name="nom_cursus_educatifs" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write your cursur education here">
                <button type="submit" name="createCursure" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                    add
                </button>
            </form>
        </div>

        <div class="flex items-center justify-start min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin: 5%;">
            <div class="form-container sign-up-container">
                <img class="w-full h-48 rounded-md object-cover" src="{{ asset('' . $entreprise->background) }}" alt="Photo profile">
                <img class="w-40 h-40 mx-auto rounded-full -mt-20 border-8 border-white" src="{{ asset('' . $entreprise->photo) }}" alt="Photo profile">
                
                <form class="p-4 md:p-5" action="{{ route('upCompany')}}" method="post">
                    @csrf
                    @method('PUT')
                <div class="grid gap-4 mb-4 grid-cols-2">

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">First Name</label>
                        <input type="text" name="nom" id="" value="{{$entreprise->nom}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Last Name</label>
                        <input type="text" name="slogan" id="" value="{{$entreprise->slogan}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                        <input type="text" name="adresse" id="" value="{{$entreprise->adresse}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Email</label>
                        <input type="email" name="email" id="" value="{{$entreprise->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Industrie</label>
                        <input type="industrie" name="industrie" id="" value="{{$entreprise->industrie}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">description</label>
                        <input type="description" name="description" id="" value="{{$entreprise->email}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>
                    
                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Password</label>
                        <input type="password" name="password" value="{{$entreprise->password}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write service description here, and add the price as well">
                    </div>

                </div>
                <button type="submit" name="store" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                    Modify
                </button>
            </form>
            </div>
            <form action="{{route('createCursure')}}" method="POST">
                @csrf
                <input type="string" name="nom_cursus_educatifs" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500" placeholder="Write your cursur education here">
                <button type="submit" name="createCursure" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                    add
                </button>
            </form>
        </div>
    </div>
@endsection