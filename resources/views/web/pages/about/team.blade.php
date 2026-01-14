@extends('web.layouts.main')
@section('title', 'Team')


@section('content')
    <!--============================ Main Section ===================================-->
    <section class="w-full min-h-screen bg-gray-100/40" data-aos="fade-up">
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
                    Team
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <div class="grid grid-cols-4 h-full px-8">
            <!--======= left section (Our Team) ========-->
            <div class="col-span-4 lg:col-span-3 px-5">

                <!-- ===== Filter Section ===== -->
                <div class="rounded-lg p-6 mb-8" data-aos="fade-right">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
                        <button
                            class="filter-btn active px-6 py-2 rounded-full bg-blue-600 text-white font-medium transition hover:bg-blue-700">
                            All Staff
                        </button>

                        <button
                            class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium transition hover:bg-gray-300">
                            Teaching Staff
                        </button>

                        <button
                            class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium transition hover:bg-gray-300">
                            Non-Teaching Staff
                        </button>

                        <button
                            class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium transition hover:bg-gray-300">
                            Administrative Staff
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:px-5 gap-3 items-start justify-center py-4">

                    <!--==== Card 1 ====-->
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group"
                        data-aos="fade-up">
                        <div class="p-5 md:p-8 text-center">
                            <div class="inline-block mb-2 md:mb-6">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop"
                                    alt="Dr. Sarah Johnson"
                                    class="w-24 md:w-32 h-24 md:h-32 rounded-full object-cover border-4 border-blue-100 group-hover:border-blue-200 transition-colors duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Sarah Johnson</h3>
                            <p class="text-blue-600 font-medium mb-4">Mathematics Professor</p>
                            <p class="text-sm text-gray-600 mb-4 md:mb-6 leading-relaxed">PhD in Applied Mathematics
                                with
                                15+ years
                                of
                                teaching experience</p>

                            <div class="flex justify-center gap-3 pt-4 border-t border-gray-100">
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-blue-400 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 border border-gray-300">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                    <img src="{{ asset('assets/svg/facebook-white.svg') }}" alt="">
                                </a>

                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-blue-400 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 border border-gray-300">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                    <img src="{{ asset('assets/svg/insta-white.svg') }}" alt="">
                                </a>

                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-blue-400 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 border border-gray-300">
                                    <i class="fab fa-linkedin-in text-sm"></i>
                                    <img src="{{ asset('assets/svg/twitter-white.svg') }}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--======= Right Section (Nav links)  ========-->
            <div class="col-span-4 lg:col-span-1 mb-3 lg:p-0 lg:pr-3 relative w-full">
                <div class="relative lg:pt-75 w-full">
                    <x-web.about-pages-nav-link />
                </div>
            </div>
        </div>
    </section>
@endsection
