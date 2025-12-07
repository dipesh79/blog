<section id="contact" class="py-24 bg-white">
    <div class="max-w-4xl mx-auto text-center px-8">

        <h2 class="text-5xl font-extrabold mb-6 text-gray-900">Ready to Get Started?</h2>
        <p class="text-xl mb-10 text-gray-500">Contact me directly to secure your subscription or discuss a customized
            enterprise setup.</p>

        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-8 mb-16">
            <a href="mailto:dipeshkhanal79@gmail.com?subject=Inquiry%20Regarding%20Blog%20CMS%20Subscription"
               class="inline-flex items-center bg-indigo-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-indigo-700 transition transform hover:-translate-y-1 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                Email Me Today
            </a>
            <a href="https://wa.me/+9779862221654?text=Hello%20I%20am%20interested%20in%20the%20Blog%20CMS%20Subscription%20and%20would%20like%20to%20know%20more."
               target="_blank"
               class="inline-flex items-center bg-green-500 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-600 transition transform hover:-translate-y-1 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.52 3.48 1.5 4.96L2 22l5.22-1.42c1.47.79 3.12 1.2 4.78 1.2 5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2zm5.79 14.11c-.3.73-1.68 1.4-2.3 1.43-.6.03-1.2-.2-2.1-.64-1.3-.65-2.73-1.89-3.8-3.32-.23-.3-.49-.78-.69-1.12-.25-.45-.04-.69.17-.67.18.02.43.08.62.11.19.03.35.08.54.34s.6.59.81.95c.22.34.37.48.56.73.19.23.4.45.65.62.83.56 1.49.8 2.01.99.6.22 1.15.2.18-.39s.34-.65.44-.82c.1-.18.23-.4.36-.62.13-.2.27-.3.56-.51.29-.2.62-.27.87-.2.25.07.64.3.89.59.25.27.25.66.19.78-.06.12-.22.4-.49.7z"></path>
                </svg>
                WhatsApp Me
            </a>
        </div>
{{--        Add Error Or Success message feorm session--}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        <div class="max-w-xl mx-auto mt-12 p-8 bg-gray-50 rounded-2xl shadow-xl border border-gray-200" id="contact-form">
            <h3 class="text-3xl font-bold mb-6 text-gray-800">Send Me a Message</h3>

            <form action="{{route('contact.submit')}}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-left text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name"
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                           placeholder="John Doe">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600 text-left">{{ $message }}</p>
                    @enderror

                </div>

                <div>
                    <label for="email" class="block text-left text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email"
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out"
                           placeholder="you@example.com">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600 text-left">{{ $message }}</p>
                    @enderror

                </div>

                <div>
                    <label for="message" class="block text-left text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4"
                              class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 resize-y transition duration-150 ease-in-out"
                              placeholder="Tell me about your project or subscription needs..."></textarea>
                    @error('message')
                    <p class="mt-2 text-sm text-red-600 text-left">{{ $message }}</p>
                    @enderror

                </div>
                <x-turnstile />
                @error('cf-turnstile-response')
                <p class="mt-2 text-sm text-red-600 text-left">{{ $message }}</p>
                @enderror
                <div>
                    <button type="submit"
                            class="w-full inline-flex justify-center items-center bg-indigo-600 text-white px-6 py-3 border border-transparent rounded-lg text-lg font-semibold hover:bg-indigo-700 transition duration-150 ease-in-out shadow-lg transform hover:-translate-y-0.5">
                        Send Inquiry
                    </button>
                </div>
            </form>
            <p class="mt-4 text-sm text-gray-500">I usually respond within 24 hours.</p>
        </div>
    </div>
</section>
