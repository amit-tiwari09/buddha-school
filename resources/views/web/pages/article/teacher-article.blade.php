@extends('web.layouts.main')
@section('title', 'Teacher Article')


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
                    Teacher Article
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--============ Articles Grid ==============-->
        <div class="py-16 bg-gray-50 px-3 md:px-12">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <p class="text-blue-600 text-sm uppercase tracking-wider mb-2">Latest Insights</p>
                    <h3 class="text-3xl font-bold text-gray-800">Recent Articles</h3>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-5">

                    <!--======= Article Card 1 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 2 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 3 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 4 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 5 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 6 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>

                    <!--======= Article Card 7 =======-->
                    <article class="bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden group"
                        data-aos="fade-up">
                        <div
                            class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1614332625575-6bef549fcc7b?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHVibGljYXRpb258ZW58MHx8MHx8fDA%3D"
                                class="h-full w-full object-cover" alt="">
                            <span
                                class="absolute top-4 right-4 bg-white text-purple-600 text-xs px-3 py-1 rounded-full font-semibold">
                                Student Development
                            </span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=9333EA&color=fff&size=40"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <h6 class="font-semibold text-gray-800 text-sm">Michael Chen</h6>
                                    <p class="text-xs text-gray-600">Psychology Instructor</p>
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">
                                Building Emotional Intelligence in Young Learners
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eveniet officia facere
                                dicta quisquam minima non explicabo ullam perferendis omnis eligendi dolor iusto quis,
                                ex quae porro consectetur soluta dignissimos.
                            </p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/calendar.svg') }}" class="h-4 w-4" alt="">
                                    Jan 8, 2026
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/clock.svg') }}" class="h-4 w-4" alt="">
                                    6min
                                </span>
                                <span class="inline-flex justify-center items-center gap-2">
                                    <img src="{{ asset('assets/svg/eye.svg') }}" class="h-4 w-4" alt="">
                                    959
                                </span>
                            </div>
                            <button
                                class="group/read flex items-center justify-center gap-1 text-blue-600 font-semibold hover:text-blue-700 transition text-sm">
                                Read More
                                <img src="{{ asset('assets/svg/arrow-right-light-blue.svg') }}"
                                    class="w-4 h-4 group-hover/read:translate-x-1 transition-all duration-200"
                                    alt="">
                            </button>
                        </div>
                    </article>
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
