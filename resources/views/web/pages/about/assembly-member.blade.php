@extends('web.layouts.main')

@section('content')
    <!--============================ Main Section ===================================-->
    <section class="w-full min-h-screen bg-gray-100/40">
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
                    Assembly Member
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <div class="grid grid-cols-4 h-full px-8">
            <!--======= left section (Our Team) ========-->
            <div
                class="col-span-4 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:px-5 gap-3 items-start justify-center py-4">

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
                        <p class="text-sm text-gray-600 mb-4 md:mb-6 leading-relaxed">PhD in Applied Mathematics with
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

            <!--======= Right Section (Nav links)  ========-->
            <div class="col-span-4 lg:col-span-1 mb-3 lg:p-0 lg:pr-3 relative w-full">
                <div class="relative lg:pt-[300px] w-full">

                    <!--======= Nav Links Section ========-->
                    <div
                        class="bg-white rounded-2xl border border-gray-200 shadow-md lg:absolute w-full lg:top-[-65px] lg:right-[-10px] z-20 shadow-md">
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

                        <div class="bg-white rounded-2xl border border-gray-200 shadow-md lg:absolute w-full lg:top-[-65px] lg:right-[-10px] z-20 shadow-md"
                            data-aos="fade-up">
                            <!--====== header =======-->
                            <div
                                class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4 rounded-tl-2xl rounded-tr-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
                                            <img src="{{ asset('assets/svg/info-white.svg') }}" class="w-4 h-4"
                                                alt="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
