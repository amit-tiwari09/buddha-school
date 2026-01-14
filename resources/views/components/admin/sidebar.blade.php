<!-- ======================= Sidebar =========================================== -->
<aside id="sidebar"
    class="fixed lg:relative w-64 bg-white border-gray-200 shadow-sm transition-all duration-300 h-screen overflow-hidden flex flex-col shrink-0 z-40 -translate-x-full lg:translate-x-0">
    <div class="h-20 flex items-center justify-between px-6 border-b border-gray-200 shrink-0">
        <a id="logo" href="#" class="flex items-center space-x-2  p-2">
            <div class="w-14 h-14 flex items-center justify-center">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2022/04/14/A-Symbol-Company-Logo-Design-Vector-Graphics-28995233-3-580x387.jpg"
                    class="w-14 rounded-sm" />
            </div>
            <span class="text-xl font-bold text-[#344256]">Cloud</span>
        </a>

        <button class="toggle-sidebar p-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors mr-4">
            <img src="{{ asset('assets/svg/menu.svg') }}" class="min-w-6 min-h-6 pointer-events-none">
        </button>
    </div>

    <!--========== Search Bar ===========-->
    <div id="search-bar" class="p-4">
        <div class="relative">
            <img src="{{ asset('assets/svg/magnifier.svg') }}"
                class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4" alt="">
            <input type="text"
                class="w-full pl-9 pr-3 py-2 text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                placeholder="Search..." />
        </div>
    </div>

    <!--========== Navigation ===========-->
    <nav class="p-4 space-y-1 flex-1 overflow-y-auto">

        <!--========== Home ===========-->
        <div>
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium  rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'dashboard' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/home.svg') }}" class="h-5 w-5 pointer-events-none">
                <span class="sidebar-text">Home</span>
            </a>
        </div>

        <!--========== Teacher ===========-->
        <div>
            <a href="{{ route('teacher.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium  rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'teacher.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/graduation-cap.svg') }}" class="w-5 h-5 pointer-events-none">
                <span class="sidebar-text">Teacher</span>
            </a>
        </div>

        <!--========== Events ===========-->
        <div>
            <a href="{{ route('event.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium  rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'event.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-5 h-5 pointer-events-none">

                <span class="sidebar-text">Events</span>
            </a>
        </div>

        <!--========== Activity ===========-->
        <div>
            <a href="{{ route('activity.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'activity.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/activity.svg') }}" class="w-5 h-5 pointer-events-none">

                <span class="sidebar-text">Activtiy</span>
            </a>
        </div>

        <!--========== Contact ===========-->
        <div>
            <a href="{{ route('contact.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium  rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'contact.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/phone.svg') }}" class="w-5 h-5 pointer-events-none">

                <span class="sidebar-text">Contact</span>
            </a>
        </div>

        <!--========== Admins ===========-->
        <div>
            <a href="{{ route('admin.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'admin.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/shield-check.svg') }}" class="w-5 h-5 pointer-events-none">
                <span class="sidebar-text">Admins</span>
            </a>
        </div>


        <!--========== Students ===========-->
        <div>
            <a href="{{ route('student.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'student.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/book-user.svg') }}" class="w-5 h-5 pointer-events-none">

                <span class="sidebar-text">Students</span>
            </a>
        </div>

        <!--========== Classes ===========-->
        <div>
            <a href="{{ route('classes.index') }}" data-nav
                class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg hover:bg-[#EEF2FF] transition-colors {{ Route::currentRouteName() == 'classes.index' ? 'bg-blue-100 text-black' : 'text-gray-700' }}">
                <img src="{{ asset('assets/svg/book-open.svg') }}" class="w-5 h-5 pointer-events-none">

                <span class="sidebar-text">Classes</span>
            </a>
        </div>
    </nav>

    <!--=== Logout Button at Bottom ===-->
    <form class="p-4 border-t border-gray-200  transition-all duration-300 shrink-0" id="logout-container">
        <button
            class="w-full flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 hover:border-gray-300 hover:shadow-md transition-all duration-200">
            <img src="{{ asset('assets/svg/exit.svg') }}" class="w-4 h-4 shrink-0 text-gray-600  pointer-events-none">
            <span class="sidebar-text pointer-events-none">Logout</span>
        </button>
    </form>
</aside>
