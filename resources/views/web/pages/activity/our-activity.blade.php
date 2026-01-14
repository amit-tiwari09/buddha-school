@extends('web.layouts.main')

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
                    Our Activtity
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--============ Activity Card Grid ==============-->
        <div class="py-16 bg-gray-50 px-3 md:px-12">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <p class="text-blue-600 text-sm uppercase tracking-wider mb-2">Featured Programs</p>
                    <h3 class="text-3xl font-bold text-gray-800">Our Activities</h3>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-8">

                    <!--======= Activity Card 1 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1" alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>


                    <!--======= Activity Card 2 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1" alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--======= Activity Card 3 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1" alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--======= Activity Card 4 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1"
                                        alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>


                    <!--======= Activity Card 5 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1"
                                        alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--======= Activity Card 6 =======-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-md activity-card" data-aos="fade-up">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=500"
                                class="w-full h-56 object-cover">
                            <span
                                class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Jan 25
                            </span>
                            <span
                                class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold inline-flex items-center gap-1">
                                <img src="{{ asset('assets/svg/check-white.svg') }}" class="w-4 h-4" alt="">
                                Completed
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <span
                                    class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Academic</span>
                                <span class="text-gray-500 text-sm inline-flex items-center justify-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4 mr-1" alt="">
                                    9:00 AM
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Annual Science Fair 2026</h3>
                            <p class="text-gray-600 mb-4">
                                Students showcase innovative projects and experiments
                                demonstrating scientific principles and creativity.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-center justify-between">
                                <span
                                    class="text-gray-500 text-sm inline-flex items-center justify-center whitespace-nowrap">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-1"
                                        alt="">
                                    Main Auditorium
                                </span>
                                <button
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition whitespace-nowrap">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!--======= Pagination =======-->
                <div class="flex justify-center items-center gap-2 mt-12">
                    <button class="px-4 py-3 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50">
                        <img src="{{ asset('assets/svg/cheveron-left.svg') }}" class="w-4 h-4 pointer-events-none"
                            alt="">
                    </button>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50">2</button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50">3</button>
                    <button class="px-4 py-3 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50">
                        <img src="{{ asset('assets/svg/cheveron-right.svg') }}" class="w-4 h-4 pointer-events-none"
                            alt="">
                    </button>
                </div>
            </div>
        </div>

    </section>
@endsection
