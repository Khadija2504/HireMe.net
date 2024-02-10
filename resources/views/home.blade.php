<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="container mx-auto px-4 py-8">
        <article class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-4">Home page</h2>
            <li class="mr-6"><a href="{{route('updateProfile')}}">Profile</a></li>
            <a href="{{route('user.logout')}}">logout</a>
            <p class="text-gray-900 mb-6">The Manchester Centre for Plastic Surgery and Burns provides specialist care
                to the population of Greater Manchester and is the major tertiary referral centre for complex
                reconstruction in the North West of England.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Our Services</h3>
                    <p class="text-gray-900 mb-4">Discover the conditions we treat and the range of treatments and
                        services we provide to patients.</p>
                    <a href="/services"
                        class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">Learn
                        More</a>
                </div>
                <div class="bg-gray-100 text-blue-900 rounded-lg p-6 shadow-md">
                    <h3 class="text-xl font-bold mb-4">Our Locations</h3>
                    <p class="text-gray-900 mb-4">Explore our wards and clinics in Manchester and surrounding areas.
                        Find maps for your convenience.</p>
                    <a href=""
                        class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">Find
                        Us</a>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-2xl font-bold mb-4">Meet Our Team</h3>
                <p class="text-gray-900 mb-6">Learn more about our consultant surgeons and dedicated team members.</p>
                <a href=""
                    class="inline-block px-6 py-3 bg-blue-900 text-white font-bold rounded-lg hover:bg-blue-600 transition duration-300">View
                    Team</a>
            </div>
        </article>

        <section id="locations" class="mt-8 bg-gray-100 py-6">
            <center>
            <h2 class="text-2xl font-bold mb-2 text-blue-900">Our Locations</h2>
            </center>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-200 text-blue-900 rounded-lg p-6 shadow-md">
                    <h4 class="text-lg font-bold mb-2">Wythenshawe Site:</h4>
                    <p class="text-gray-900">Manchester Centre for Plastic Surgery &amp; Burns<br>
                        University Hospital of South Manchester<br>
                        Southmoor Road<br>
                        Wythenshawe<br>
                        Manchester<br>
                        M23 9LT</p>
                </div>
                <div class="bg-gray-200 text-blue-900 rounded-lg p-6 shadow-md">
                    <h4 class="text-lg font-bold mb-2">Manchester Children's Burn Service:</h4>
                    <p class="text-gray-900">Central Manchester Hospitals Trust<br>
                        Oxford Road<br>
                        Manchester<br>
                        M13 9WL</p>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
