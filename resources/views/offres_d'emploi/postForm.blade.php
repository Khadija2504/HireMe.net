@extends('layouts.master')
@section('main')
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0" style="width: 50%; margin-left: 25%;">
        <div class="form-container sign-up-container">
            <h2 class="text-xl font-bold mb-4"> add a message or a question that you have </h2>
            
            <form class="p-4 md:p-5" action="{{route('post')}}" method="post">
                    @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">

                    <div class="col-span-2">
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Your message</label>
                        <input type="hidden" name="id_offre_demplois" value="{{$id}}">
                        <input type="hidden" name="users_id"  value="{{$userId}}">
                        <input type="text" name="post" id="" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500" placeholder="service title" required="">
                    </div>
                </div>
                <button type="submit" name="addPost" class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-6 bg-blue-500 hover:bg-blue-200 focus:ring-gray-800">
                    Add post to this job
                </button>
            </form>
        </div>
    </div>
@endsection