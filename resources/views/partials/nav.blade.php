<header class="bg-white">
    <div id="thing" class="container mx-auto px-4 py-4 flex items-center">
        <div>
            <img src="../../imgs/hmLogoLarge.png" alt="HireMe.net" id="logo" class="h-16">
        </div>
        <div>
            <h1 class="text-4xl font-bold" id="titleText">Plateforme de Services Locaux</h1>
        </div>
        <button id="mobileMenuButton" class="mobile-nav-toggle text-blue-900 focus:outline-none md:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 5h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    {{-- companies navigtiona --}}

    @if (Auth::guard('entreprise')->check())
        <nav id="nav" class="bg-blue-900">
            <div class="container mx-auto px-4 py-4">
                <ul class="flex justify-center text-white">
                    <li class="mr-6"><a href="/home">Home</a></li>
                    <li class="mr-6"><a href="/news">News</a></li>
                    <li class="mr-6"><a href="{{route('displayOffreDemplois')}}">All jobs</a></li>
                    <li class="mr-6"><a href="/locations">Our locations</a></li>
                    <li class="mr-6"><a href="/team">Our team</a></li>
                    <li class="mr-6"><a href="{{route('offreDemplois')}}"> ajouter offre d'emploi</a></li>
                    <li class="mr-6"><a href="/myService">votre services</a></li> {{-- as ->popup --}}
                    <div x-data="{ open: false }">
                        <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                        @include('components.profile')
                    </div>
                    <li class="mr-6"><a href="{{route('company.logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <nav id="mobileNav" class="mobile-nav hidden">
            <div class="container mx-auto px-4 py-4">
                <button id="mobileCloseButton" class="text-white text-2xl absolute top-4 right-4 focus:outline-none">&times;</button>
                <ul class="text-white">
                    <li class="md-2"><a href="/home">Home</a></li>
                    <li class="md-2"><a href="/news">News</a></li>
                    <li class="md-2"><a href="/services">Our services</a></li>
                    <li class="md-2"><a href="/locations">Our locations</a></li>
                    <li class="md-2"><a href="/team">Our team</a></li>
                    <li><a href="/contact">Contact us</a></li>
                    <div x-data="{ open: false }">
                        <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                        @include('components.profile')
                    </div>
                    <li class="md-2"><a href="">votre services</a></li> {{-- as ->popup --}}
                    <li class="md-2"><a href="/profile">Profile</a></li>
                </ul>
            </div>
        </nav>

    {{-- users navigation --}}

    @elseif (!Auth::guard('entreprise')->check())
        @if (Auth::user()->role == 'user')
        <nav id="nav" class="bg-blue-900">
            <div class="container mx-auto px-4 py-4">
                <ul class="flex justify-center text-white">
                    <li class="mr-6"><a href="/home">Home</a></li>
                    <li class="mr-6"><a href="/news">News</a></li>
                    <li class="mr-6"><a href="{{route('displayOffreDemplois')}}">All jobs</a></li>
                    <li class="mr-6"><a href="/locations">Our locations</a></li>
                    <li class="mr-6"><a href="/team">Our team</a></li>
                    <div x-data="{ open: false }">
                    <li class="mr-6"><a href="#" @click="open = true" class=""> Ajouter service</a></li>
                    </div>
                    <li class="mr-6"><a href="/myService">votre services</a></li> {{-- as ->popup --}}
                    <div x-data="{ open: false }">
                        <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                        @include('components.profile')
                    </div>
                    <li class="mr-6"><a href="{{route('user.logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <nav id="mobileNav" class="mobile-nav hidden">
            <div class="container mx-auto px-4 py-4">
                <button id="mobileCloseButton" class="text-white text-2xl absolute top-4 right-4 focus:outline-none">&times;</button>
                <ul class="text-white">
                    <li class="md-2"><a href="/home">Home</a></li>
                    <li class="md-2"><a href="/news">News</a></li>
                    <li class="md-2"><a href="/services">Our services</a></li>
                    <li class="md-2"><a href="/locations">Our locations</a></li>
                    <li class="md-2"><a href="/team">Our team</a></li>
                    <li><a href="/contact">Contact us</a></li>
                        <div x-data="{ open: false }">
                            <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                            @include('components.profile')
                        </div>
                    <li class="md-2"><a href="">votre services</a></li> {{-- as ->popup --}}
                    <li class="md-2"><a href="/profile">Profile</a></li>
                </ul>
            </div>
        </nav>

        {{-- admins navigation --}}

        @elseif (Auth::user()->role == 'admin')
        <nav id="nav" class="bg-blue-900">
            <div class="container mx-auto px-4 py-4">
                <ul class="flex justify-center text-white">
                    <li class="mr-6"><a href="/home">Home</a></li>
                    <li class="mr-6"><a href="/news">News</a></li>
                    <li class="mr-6"><a href="/services">Our services</a></li>
                    <li class="mr-6"><a href="/locations">Our locations</a></li>
                    <li class="mr-6"><a href="/team">Our team</a></li>
                    <div x-data="{ open: false }">
                    <li class="mr-6"><a href="#" @click="open = true" class=""> Ajouter service</a></li>
                    </div>
                    <li class="mr-6"><a href="/myService">votre services</a></li> {{-- as ->popup --}}
                    <div x-data="{ open: false }">
                        <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                        @include('components.profile')
                    </div>
                    <li class="mr-6"><a href="{{route('company.logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <nav id="mobileNav" class="mobile-nav hidden">
            <div class="container mx-auto px-4 py-4">
                <button id="mobileCloseButton" class="text-white text-2xl absolute top-4 right-4 focus:outline-none">&times;</button>
                <ul class="text-white">
                    <li class="md-2"><a href="/home">Home</a></li>
                    <li class="md-2"><a href="/news">News</a></li>
                    <li class="md-2"><a href="/services">Our services</a></li>
                    <li class="md-2"><a href="/locations">Our locations</a></li>
                    <li class="md-2"><a href="/team">Our team</a></li>
                    <li><a href="/contact">Contact us</a></li>
                    <div x-data="{ open: false }">
                        <li class="mr-6"><a href="#" @click="open = true" class="">Profile</a></li>
                        @include('components.profile')
                    </div>
                    <li class="md-2"><a href="">votre services</a></li> {{-- as ->popup --}}
                    <li class="md-2"><a href="/profile">Profile</a></li>
                </ul>
            </div>
        </nav>
        @endif
    @endif
    <div class="max-w-2xl mx-auto">
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input id="myInput" type="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search jobs, companies, users cv..." required>
                <button class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>

    <div id="result" class="search-bar w-60"></div>

 </header>
<script>
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileNav = document.getElementById('mobileNav');
const mobileCloseButton = document.getElementById('mobileCloseButton');

mobileMenuButton.addEventListener('click', () => {
    if (mobileNav.style.transform === 'translateY(100%)') {
        mobileNav.style.transform = 'translateY(0)';
        mobileNav.style.display = 'block';
    }
    mobileNav.classList.add('open');
});

mobileCloseButton.addEventListener('click', () => {
    mobileNav.style.transform = 'translateY(100%)';

    setTimeout(() => {
        mobileNav.style.display = 'none';
    }, 300);
});
</script>