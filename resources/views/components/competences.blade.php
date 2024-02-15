    <div x-show="open" class="fixed z-10 inset-0 overflow-y-auto" x-cloak style="background-color: #6970ff50;">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:flex sm:items-center sm:justify-center sm:p-0">
            <div class="font-sans mt-100 flex flex-row justify-center items-center">
                <div class="card w-96 mx-auto bg-white shadow-xl hover:shadow">
                    <form action="{{route('addSkills')}}" method="POST">
                        @csrf
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 text-black">Required skills</label>
                        <input type="hidden" name="offre_demploi_id" value="{{$offreDemploi->id}}" required>
                        @error('offre_demploi_id')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="type_user" value="offre_demplois" required>
                        @error('type_user')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="users_id" value="">
                        @error('users_id')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <select name="competences_id[]" multiple id="" class="block w-full" required>
                            <option selected disabled>Select competences</option>
                            @foreach ($competences as $competence)
                                <option value="{{ $competence->id }}">{{ $competence->nom_competence }}</option>
                            @endforeach
                        </select>
                        @error('competences_id')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    
                        <hr class="mt-8">
                        <div class="flex p-4">
                            <div class="w-1/2 text-center text-blue-700">
                                <button type="submit" name="addSkills"><span class="font-bold">Add</span></button>
                            </div>
                            <div class="w-0 border border-gray-300"></div>
                            <div class="w-1/2 text-center text-blue-700">
                                <button @click="open = false">
                                    <span class="font-bold">Close</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
