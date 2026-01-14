<!--============================ Header Section ===================================-->
<header class="bg-white/90 backdrop-blur-sm shadow-md sticky top-0 z-50 ">
    <div class="container mx-auto px-2 lg:px-12">
        <!--===================== Logo and Menus ======================-->
        <div class="flex items-center justify-between py-4 md:px-5 xl:px-12">
            <a href="/" class="flex items-center gap-3 group" data-aos="fade-right">
                <div
                    class="w-14 h-14 rounded-full /10 flex items-center justify-center group-hover:/20 transition-colors">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHlLz6fcx8lsnjivH94yQuKnR-SGVza3evHA&s">
                </div>
                <div class="whitespace-nowrap">
                    <h1 class=" text-xl md:text-2xl font-bold ">Buddha School</h1>
                    <p class="text-xs  tracking-wider">Path to Enlightenment</p>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-1" data-aos="fade-left">

                <!--======== Home =======-->
                <div class="relative group">
                    <a href="{{ route('homepage') }}"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-black group-hover:bg-blue-100 transition-all rounded-lg duration-200">
                        Home
                    </a>
                </div>

                <!--======== About =======-->
                <div class="relative group">
                    <button type="button"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium  group-hover:bg-blue-100 rounded-lg transition-all pr-2 duration-200">
                        About
                        <img src="{{ asset('assets/svg/cheveron-down.svg') }}"
                            class="w-4 h-4 group-hover:rotate-180 transition-transform duration-300">
                    </button>
                    <div
                        class="bg-white absolute left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 rounded-lg shadow-md border border-gray-200 min-w-47.5 py-2 overflow-hidden">
                        <a href="{{ route('about-us') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            About us
                        </a>
                        <a href="{{ route('organization-structure') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Organization Structure
                        </a>
                        <a href="{{ route('team') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Team
                        </a>
                        <a href="{{ route('assembly-member') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Assembly Member
                        </a>
                    </div>
                </div>

                <!--======== Activities =======-->
                <div class="relative group">
                    <button type="button"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium group-hover:bg-blue-100 rounded-lg duration-200 transition-all pr-2">
                        Activities
                        <img src="{{ asset('assets/svg/cheveron-down.svg') }}"
                            class="w-4 h-4 group-hover:rotate-180 transition-transform duration-300">
                    </button>
                    <div
                        class="bg-white absolute left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 rounded-lg shadow-md border border-gray-200 min-w-47.5 py-2 overflow-hidden">
                        <a href="{{ route('our-activity') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Our Activity
                        </a>
                        <a href="{{ route('upcoming-activity') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Upcoming Activity
                        </a>
                    </div>
                </div>

                <!--======== Publication =======-->
                <div class="relative group">
                    <a href="{{ route('publication') }}"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-black group-hover:bg-blue-100 rounded-lg duration-200 transition-all rounded-lg">
                        Publication
                    </a>
                </div>

                <!--======== Articles =======-->
                <div class="relative group">
                    <button type="button"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium group-hover:bg-blue-100 rounded-lg duration-200 transition-all  pr-2">
                        Articles
                        <img src="{{ asset('assets/svg/cheveron-down.svg') }}"
                            class="w-4 h-4 group-hover:rotate-180 transition-transform duration-300">
                    </button>
                    <div
                        class="bg-white absolute left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 rounded-lg shadow-md  border border-gray-200 min-w-47.5 py-2 overflow-hidden">
                        <a href="{{ route('teacher-article') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Teacher Articles
                        </a>
                        <a href="{{ route('student-article') }}"
                            class="block px-4 py-2.5 text-sm hover:bg-blue-500/10 hover: transition-colors">
                            Student Articles
                        </a>
                    </div>
                </div>

                <!--======== Gallery =======-->
                <div class="relative group">
                    <a href="{{ route('gallery') }}"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-black group-hover:bg-blue-100 rounded-lg duration-200 transition-all rounded-lg">
                        Gallery
                    </a>
                </div>

                <!--======== Vacancy =======-->
                <div class="relative group">
                    <a href="{{ route('vacancy') }}"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-black group-hover:bg-blue-100 rounded-lg duration-200 transition-all rounded-lg">
                        Vacancy
                    </a>
                </div>

                <!--======== Contact =======-->
                <div class="relative group">
                    <a href="{{ route('contact') }}"
                        class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-black group-hover:bg-blue-100 rounded-lg duration-200 transition-all rounded-lg">
                        Contact
                    </a>
                </div>
            </nav>

            <button class="lg:hidden p-2 transition-colors toggle-sidebar">
                <img src="{{ asset('assets/svg/breadcrumb.svg') }}" class="w-6 h-6 pointer-events-none" alt="">
            </button>
        </div>
    </div>
</header>
