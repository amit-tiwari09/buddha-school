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
                    organizational Structure
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <div class="grid grid-cols-4 h-full px-8">
            <!--======= left section ========-->
            <div class="col-span-4 lg:col-span-3 flex flex-col md:flex-row gap-3 items-start justify-center">
                <div class="bg-white my-4 rounded-lg shadow-md p-4" data-aos="fade-up">

                    <!--======= Organization Structure Image ======-->
                    <div class="bg-gray-100 rounded-lg p-4 mb-6 min-h-10">
                        <img src="https://waz.smartdraw.com/organizational-chart/img/tips-for-making-org-charts.png?bn=15100111939"
                            alt="">
                    </div>

                    <!--=======Key Features Section ======-->
                    <div class="space-y-4 text-gray-700">
                        <p>
                            Our organizational hierarchy is designed to facilitate clear communication and efficient
                            decision-making at all levels.
                        </p>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded">
                            <p class="font-semibold text-gray-800 mb-2">Key Features:</p>
                            <ul class="space-y-1 text-sm">
                                <li> Clear reporting lines and accountability</li>
                                <li> Collaborative decision-making process</li>
                                <li> Professional development opportunities</li>
                                <li> Student-centered approach in all operations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--======= Right Section (Nav links)  ========-->
            <div class="col-span-4 lg:col-span-1 mb-3 lg:p-0 lg:pr-3 relative w-full">
                <div class="relative lg:pt-[335px] xl:pt-[305px] w-full">

                    <!--======= Nav Links Section ========-->
                    <div class="bg-white rounded-2xl border border-gray-200 shadow-md lg:absolute w-full lg:top-[-65px] lg:right-[-10px] z-20 shadow-md"
                        data-aos="fade-up">
                        <!--====== header =======-->
                        <div
                            class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4 rounded-tl-2xl rounded-tr-2xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                                        <img src="{{ asset('assets/svg/info-white.svg') }}" class="w-4 h-4" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-lg md:text-xl font-bold">About us</h3>
                                    </div>
                                </div>
                                <div class="w-3 h-3 rounded-full bg-white animate-pulse shadow-lg"></div>
                            </div>
                        </div>

                        <!--============ Navlinks ===========-->
                        <div class="divide-y divide-gray-100 overflow-y-auto mb-2">
                            <!--======= About us =======-->
                            <a href="{{ route('about-us') }}"
                                class="page-nav block p-5 hover:bg-gradient-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 border-transparent hover:border-blue-500 active:bg-blue-100">
                                <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                                    <div class="flex-shrink-0 mt-1 pointer-events-none">
                                        <div
                                            class="w-2 h-2 rounded-full bg-gray-300 group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0 pointer-events-none">
                                        <h4
                                            class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none">
                                            About Us
                                        </h4>
                                    </div>
                                    <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                                        class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 flex-shrink-0 mt-1 pointer-events-none"
                                        alt="">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
                                </div>
                            </a>

                            <!--======= Organization structure =======-->
                            <a href="{{ route('organization-structure') }}"
                                class="page-nav block p-5 hover:bg-gradient-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 border-transparent hover:border-blue-500 active:bg-blue-100">
                                <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                                    <div class="flex-shrink-0 mt-1 pointer-events-none">
                                        <div
                                            class="w-2 h-2 rounded-full bg-gray-300 group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0 pointer-events-none">
                                        <h4
                                            class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none">
                                            Organization Structure
                                        </h4>
                                    </div>
                                    <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                                        class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 flex-shrink-0 mt-1 pointer-events-none"
                                        alt="">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
                                </div>
                            </a>

                            <!--======= Team =======-->
                            <a href="{{ route('team') }}"
                                class="page-nav block p-5 hover:bg-gradient-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 border-transparent hover:border-blue-500 active:bg-blue-100">
                                <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                                    <div class="flex-shrink-0 mt-1 pointer-events-none">
                                        <div
                                            class="w-2 h-2 rounded-full bg-gray-300 group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0 pointer-events-none">
                                        <h4
                                            class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none">
                                            Team
                                        </h4>
                                    </div>
                                    <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                                        class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 flex-shrink-0 mt-1 pointer-events-none"
                                        alt="">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
                                </div>
                            </a>

                            <!--======= Assembly Member =======-->
                            <a href="{{ route('assembly-member') }}"
                                class="page-nav block p-5 hover:bg-gradient-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 border-transparent hover:border-blue-500 active:bg-blue-100">
                                <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                                    <div class="flex-shrink-0 mt-1 pointer-events-none">
                                        <div
                                            class="w-2 h-2 rounded-full bg-gray-300 group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none">
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0 pointer-events-none">
                                        <h4
                                            class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none">
                                            Assembly Member
                                        </h4>
                                    </div>
                                    <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                                        class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 flex-shrink-0 mt-1 pointer-events-none"
                                        alt="">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
                                </div>
                            </a>
                        </div>

                    </div>

                    <!--======= Quick Contact ========-->
                    <div class="bg-gradient-to-br from-blue-600 to-blue-400 text-white rounded-lg shadow-md p-6 mb-4 mt-3"
                        data-aos="fade-up">
                        <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center  gap-3">
                                <img src="{{ asset('assets/svg/phone-white.svg') }}" class="w-4 h-4" alt="">
                                <div>
                                    <p class="font-semibold">Phone</p>
                                    <p class="opacity-90">+977 9867548976</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/svg/mail-white.svg') }}" class="w-4 h-4" alt="">
                                <div>
                                    <p class="font-semibold">Email</p>
                                    <p class="opacity-90">info@buddhaschool.edu</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/svg/map-pin-white.svg') }}" class="w-4 h-4" alt="">
                                <div>
                                    <p class="font-semibold">Address</p>
                                    <p class="opacity-90">Lumbini, Nepal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
