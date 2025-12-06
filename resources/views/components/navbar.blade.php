<nav class="fixed w-full bg-white shadow-lg z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-8">
        <div class="text-3xl font-extrabold text-indigo-600 tracking-tight">
            <span class="text-pink-500">Blog</span>CMS
        </div>

        {{-- Desktop Links --}}
        <ul class="hidden md:flex space-x-8 text-gray-600 font-medium">
            <li><a href="#hero" class="hover:text-indigo-600 transition duration-300">Home</a></li>
            <li><a href="#features" class="hover:text-indigo-600 transition duration-300">Features</a></li>
            <li><a href="#pricing" class="hover:text-indigo-600 transition duration-300">Pricing</a></li>
            <li><a href="#testimonials" class="hover:text-indigo-600 transition duration-300">Testimonials</a></li>
            <li><a href="#about" class="hover:text-indigo-600 transition duration-300">About</a></li>
            <li><a href="#contact" class="hover:text-indigo-600 transition duration-300">Contact</a></li>
        </ul>

        {{-- Desktop Buttons --}}
        <div class="hidden md:flex space-x-4">
            <a href="https://blog-demo.khanaldipesh.com.np/admin" target="_blank"
               class="flex items-center space-x-1.5 px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path d="M4.5 3.5h11A1.5 1.5 0 0 1 17 5v7.5A1.5 1.5 0 0 1 15.5 14h-11A1.5 1.5 0 0 1 3 12.5v-7A1.5 1.5 0 0 1 4.5 3.5Z" />
                    <path fill-rule="evenodd" d="M12.5 17.5a.75.75 0 0 0 0-1.5h-5a.75.75 0 0 0 0 1.5h5Z" clip-rule="evenodd" />
                </svg>
                <span>See Demo</span>
            </a>

            <a href="#pricing"
               class="flex items-center space-x-1.5 px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                <span>Get Started</span>
            </a>
        </div>

        {{-- Mobile Menu Button (Hamburger) --}}
        <button id="mobile-menu-button" class="md:hidden p-2 text-gray-700 hover:text-indigo-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    {{-- Sliding Mobile Menu (Initially Hidden Off-Screen) --}}
    <div id="mobile-menu"
         class="fixed top-0 right-0 h-full w-64 bg-white shadow-xl transform translate-x-full transition-transform duration-300 z-50">

        {{-- Close Button --}}
        <div class="flex justify-end p-4">
            <button id="mobile-menu-close" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- Mobile Links --}}
        <nav class="flex flex-col p-4 space-y-4 text-gray-700 font-medium">
            <a href="#hero" class="hover:text-indigo-600">Home</a>
            <a href="#features" class="hover:text-indigo-600">Features</a>
            <a href="#pricing" class="hover:text-indigo-600">Pricing</a>
            <a href="#testimonials" class="hover:text-indigo-600">Testimonials</a>
            <a href="#about" class="hover:text-indigo-600">About</a>
            <a href="#contact" class="hover:text-indigo-600">Contact</a>

            <div class="pt-4 border-t border-gray-100 flex flex-col space-y-3">
                <a href="https://blog-demo.khanaldipesh.com.np/admin" target="_blank"
                   class="flex items-center justify-center space-x-1.5 px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition duration-300">
                    <span>See Demo</span>
                </a>
                <a href="#pricing"
                   class="flex items-center justify-center space-x-1.5 px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                    <span>Get Started</span>
                </a>
            </div>
        </nav>
    </div>
</nav>

{{-- You should place this script at the end of your body tag or in a separate JS file --}}
<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuCloseButton = document.getElementById('mobile-menu-close');

    // Function to close menu
    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
    }

    // Function to open menu
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-full');
    });

    // Close menu when the close icon is clicked
    menuCloseButton.addEventListener('click', closeMenu);

    // Optional: Close menu when a link is clicked (useful for anchor links)
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });
</script>
