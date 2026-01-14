<!--============================ Sidebar visible on mobile and tablet ===================================-->
<div id="sidebar"
    class="fixed top-0 left-0 h-full w-full md:w-96 lg:hidden bg-white z-[60] transform -translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">

    <!--========== Sidebar Header =========-->
    <div class="bg-blue-400 p-4 flex items-center justify-between">
        <div class="text-xl font-bold text-white">Menu</div>
        <button class="p-2 rounded-lg hover:bg-blue-500 transition-colors toggle-sidebar">
            <img src="/assets/svg/x-white.svg" class="w-6 h-6 pointer-events-none" alt="">
        </button>
    </div>

    <!--========= Navigation Menu =====-->
    <nav class="p-4">
        <ul class="space-y-2">

            <!--======= Home =======-->
            <li>
                <a href="{{ route('homepage') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <img src="{{ asset('assets/svg/house-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                    <span class="font-medium">Home</span>
                </a>
            </li>

            <!--======= About with submenu =======-->
            <li>
                <button id="about"
                    class="has-submenu flex items-center justify-between w-full px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/svg/info-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                        <span class="font-medium">About</span>
                    </div>
                    <img id="about-icon" src="{{ asset('assets/svg/cheveron-right.svg') }}"
                        class="h-5 w-5 transform transition-transform" alt="">
                </button>
                <ul id="about-submenu" class="submenu hidden pl-12 mt-2 space-y-2">
                    <li>
                        <a href="{{ route('about-us') }}" class="block px-4 py-2 rounded-lg text-gray-600 ">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('organization-structure') }}"
                            class="block px-4 py-2 rounded-lg text-gray-600 ">
                            Organization Structure
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}" class="block px-4 py-2 rounded-lg text-gray-600 ">
                            Team
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('assembly-member') }}" class="block px-4 py-2 rounded-lg text-gray-600 ">
                            Assembly Member
                        </a>
                    </li>

                </ul>
            </li>

            <!--======= Activities with Submenu =======-->
            <li>
                <button id="activities"
                    class="has-submenu flex items-center justify-between w-full px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/svg/activity-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                        <span class="font-medium">Activities</span>
                    </div>
                    <img id="activities-icon" src="{{ asset('assets/svg/cheveron-right.svg') }}"
                        class="h-5 w-5 transform transition-transform" alt="">
                </button>
                <ul id="activities-submenu" class="submenu hidden pl-12 mt-2 space-y-2">
                    <li>
                        <a href="{{ route('our-activity') }}" class="block px-4 py-2 rounded-lg text-gray-600 ">
                            Our Activities
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('upcoming-activity') }}" class="block px-4 py-2 rounded-lg text-gray-600">
                            Upcoming Activities
                        </a>
                    </li>

                </ul>
            </li>

            <!--======= Publication =======-->
            <li>
                <a href="{{ route('publication') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <img src="{{ asset('assets/svg/book-open-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                    <span class="font-medium">Publication</span>
                </a>
            </li>

            <!--======= Articles with Submenu =======-->
            <li>
                <button id="articles"
                    class="has-submenu flex items-center justify-between w-full px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/svg/file-text-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                        <span class="font-medium">Articles</span>
                    </div>
                    <img id="articles-icon" src="{{ asset('assets/svg/cheveron-right.svg') }}"
                        class="h-5 w-5 transform transition-transform" alt="">
                </button>
                <ul id="articles-submenu" class="submenu hidden pl-12 mt-2 space-y-2">
                    <li>
                        <a href="{{ route('teacher-article') }}" class="block px-4 py-2 rounded-lg text-gray-600 ">
                            Teacher Article
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('student-article') }}" class="block px-4 py-2 rounded-lg text-gray-600">
                            Student Article
                        </a>
                    </li>

                </ul>
            </li>

            <!--======= Gallery =======-->
            <li>
                <a href="{{ route('gallery') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <img src="{{ asset('assets/svg/image-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                    <span class="font-medium">Gallery</span>
                </a>
            </li>

            <!--======= Vacancy =======-->
            <li>
                <a href="{{ route('vacancy') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <img src="{{ asset('assets/svg/briefcase-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                    <span class="font-medium">Vacancy</span>
                </a>
            </li>

            <!--======= Contact =======-->
            <li>
                <a href="{{ route('contact') }}"
                    class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-stone-100 transition-colors">
                    <img src="{{ asset('assets/svg/phone-blue.svg') }}" class="w-5 h-5 mr-3" alt="">
                    <span class="font-medium">Contact</span>
                </a>
            </li>

        </ul>

        <!--========= Contact Info =========-->
        <div class="mt-8 px-4 py-6 bg-stone-50 rounded-lg">
            <h4 class="font-semibold text-gray-900 mb-4">Get in Touch</h4>
            <div class="space-y-3 text-sm text-gray-600">
                <p class="flex items-start gap-2">
                    <img src="{{ asset('assets/svg/phone-blue.svg') }}" class="w-5 h-5" alt="">
                    +977 98290783545
                </p>
                <p class="flex items-start gap-2">
                    <img src="{{ asset('assets/svg/mail-blue.svg') }}" class="w-5 h-5" alt="">
                    info@ourschool.edu
                </p>
            </div>
        </div>
    </nav>
</div>
