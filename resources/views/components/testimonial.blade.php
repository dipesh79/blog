<section id="testimonials" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto text-center px-8">
        <h2 class="text-5xl font-extrabold mb-4 text-gray-900">What Our Clients Say</h2>
        <p class="text-xl text-gray-500 mb-16">Real feedback from satisfied users.</p>
        <div class="grid md:grid-cols-3 gap-8">
            @forelse($testimonials as $testimonial)

                <div class="p-8 border-l-4 border-indigo-500 rounded-lg shadow-xl bg-gray-50">
                    <p class="text-gray-700 italic mb-4">"{{$testimonial->content}}"</p>
                    <p class="font-semibold text-indigo-600">— {{$testimonial->site->client->name}}, {{$testimonial->site->name}}</p>
                </div>
            @empty
                <p class="text-gray-500 col-span-3">No testimonials available at the moment.</p>
            @endforelse

        </div>
    </div>
</section>
