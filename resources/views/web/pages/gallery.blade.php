@extends('web.layouts.main')
@section('title', 'Gallery')


@section('content')
    <!--============================ Main Section ===================================-->
    <section class="w-full min-h-screen" data-aos="fade-up">

        <!--=============== Main Section Text ===============-->
        <div class="relative py-16 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=1600" alt="Buddha School Background"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-600/50"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <p class="text-sm uppercase tracking-wider mb-2" data-aos="fade-right">
                    Welcome to Buddha School
                </p>
                <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-right">
                    Gallery
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--======== Gallery Images section ==========-->
        <div class="bg-white py-5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                    <!--======= Image 1 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Image 2 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Image 3 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Image 4 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Image 5 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Image 6 ======-->
                    <div class="group relative overflow-hidden rounded-lg shadow-lg cursor-pointer" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=800&h=600&fit=crop"
                            alt="Annual Sports Day 2025" class="w-full h-full object-cover aspect-4/3">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex items-center justify-center">
                            <div
                                class="opacity-0 group-hover:opacity-100 transition-opacity text-white text-center px-4 duration-200">
                                <h3 class="text-xl font-bold mb-2">Annual Sports Day 2025</h3>
                                <p class="text-sm">Students participating in various sporting events</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center py-4">
            <button
                class="inline-flex items-center justify-center px-8 py-3 bg-blue-500 text-white text-center rounded-full font-medium hover:bg-blue-600 transition shadow-lg"
                data-aos="fade-right">
                Load More
                <img src="{{ asset('assets/svg/cheveron-right-white.svg') }}" class="w-5 h-5" alt="">
            </button>
        </div>
    </section>
@endsection
