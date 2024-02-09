    <header class="bg-white">
        <div id="thing" class="container mx-auto px-4 py-4 flex items-center">
            <div>
                <img src="../../imgs/hmLogoLarge.png" alt="Manchester University NHS Foundation Trust" id="logo" class="h-16">
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
                    <li class="mr-6"><a href="/modifyProfile">Profile</a></li>
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
            <li class="md-2"><a href="#" @click="open = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded>Ajouter service"></a></li>
            {{-- @yield('popup') --}}
            </div>
            <li class="md-2"><a href="">votre services</a></li> {{-- as ->popup --}}
            <li class="md-2"><a href="/profile">Profile</a></li>
        </ul>
    </div>
</nav>

    <div>
        <div class="input-group w-50 ms-md-4 ">
            <input type="search" id="myInput" class="form-control rounded" placeholder="Search"
                aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init><i
                    class="bi bi-search"></i></button>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class=" text-light bi bi-list"></i>
        </button>
        <div id="result" class="search-bar w-60"></div>
    </div>
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