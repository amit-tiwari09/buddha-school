@extends('web.layouts.main')
@section('title', 'Publication')


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
                    Publication
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--======== Publications section ==========-->
        <div class="bg-white py-8 px-3 md:px-12">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <p class="text-blue-600 text-sm uppercase tracking-wider mb-2">Browse Our Collection</p>
                    <h3 class="text-3xl font-bold text-gray-800">Recent Publications</h3>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

                    <!--====== Publication Card 1 ======-->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden"
                        data-aos="fade-up">
                        <div class="h-48 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                        </div>
                        <div class="p-6">
                            <span
                                class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-3">Journal</span>
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Educational Psychology Quarterly</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">Quarterly journal featuring research on
                                cognitive development and learning methodologies in Buddhist educational contexts.</p>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4" alt="">
                                    Dec 2025
                                </span>
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/file-text.svg') }}" class="w-4 h-4" alt="">
                                    1.8mb
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <button
                                    class="flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    <img src="{{ asset('assets/svg/download-white.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Download
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition text-sm">
                                    <img src="{{ asset('assets/svg/eye-light-blue.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Read Online
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--====== Publication Card 2 ======-->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden"
                        data-aos="fade-up">
                        <div class="h-48 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                        </div>
                        <div class="p-6">
                            <span
                                class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-3">Journal</span>
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Educational Psychology Quarterly</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">Quarterly journal featuring research on
                                cognitive development and learning methodologies in Buddhist educational contexts.</p>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4" alt="">
                                    Dec 2025
                                </span>
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/file-text.svg') }}" class="w-4 h-4" alt="">
                                    1.8mb
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <button
                                    class="flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    <img src="{{ asset('assets/svg/download-white.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Download
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition text-sm">
                                    <img src="{{ asset('assets/svg/eye-light-blue.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Read Online
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--====== Publication Card 3 ======-->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden"
                        data-aos="fade-up">
                        <div class="h-48 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                        </div>
                        <div class="p-6">
                            <span
                                class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-3">Journal</span>
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Educational Psychology Quarterly</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">Quarterly journal featuring research on
                                cognitive development and learning methodologies in Buddhist educational contexts.</p>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4" alt="">
                                    Dec 2025
                                </span>
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/file-text.svg') }}" class="w-4 h-4" alt="">
                                    1.8mb
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <button
                                    class="flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    <img src="{{ asset('assets/svg/download-white.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Download
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition text-sm">
                                    <img src="{{ asset('assets/svg/eye-light-blue.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Read Online
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--====== Publication Card 4 ======-->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden"
                        data-aos="fade-up">
                        <div class="h-48 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                        </div>
                        <div class="p-6">
                            <span
                                class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-3">Journal</span>
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Educational Psychology Quarterly</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">Quarterly journal featuring research on
                                cognitive development and learning methodologies in Buddhist educational contexts.</p>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4" alt="">
                                    Dec 2025
                                </span>
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/file-text.svg') }}" class="w-4 h-4" alt="">
                                    1.8mb
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <button
                                    class="flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    <img src="{{ asset('assets/svg/download-white.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Download
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition text-sm">
                                    <img src="{{ asset('assets/svg/eye-light-blue.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Read Online
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--====== Publication Card 5 ======-->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden"
                        data-aos="fade-up">
                        <div class="h-48 flex items-center justify-center">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                        </div>
                        <div class="p-6">
                            <span
                                class="inline-block bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full mb-3">Journal</span>
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Educational Psychology Quarterly</h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">Quarterly journal featuring research on
                                cognitive development and learning methodologies in Buddhist educational contexts.</p>
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4" alt="">
                                    Dec 2025
                                </span>
                                <span class="inline-flex gap-1 items-center justify-center">
                                    <img src="{{ asset('assets/svg/file-text.svg') }}" class="w-4 h-4" alt="">
                                    1.8mb
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                <button
                                    class="flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                                    <img src="{{ asset('assets/svg/download-white.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Download
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 border-2 border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50 transition text-sm">
                                    <img src="{{ asset('assets/svg/eye-light-blue.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Read Online
                                </button>
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
