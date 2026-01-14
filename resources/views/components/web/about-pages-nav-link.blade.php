 <!--======= Nav Links Section ========-->
 <div class="bg-white rounded-2xl border border-gray-200 shadow-md lg:absolute w-full lg:top-[-65px] lg:right-[-10px] z-20 shadow-md"
     data-aos="fade-up">
     <!--====== header =======-->
     <div class="bg-linear-to-r from-blue-500 to-blue-600 text-white p-4 rounded-tl-2xl rounded-tr-2xl">
         <div class="flex items-center justify-between">
             <div class="flex items-center gap-3">
                 <div class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center backdrop-blur-sm">
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
             class="page-nav block p-5 hover:bg-linear-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 hover:border-blue-500 active:bg-blue-100 {{ Route::currentRouteName() == 'about-us' ? 'bg-linear-to-r from-blue-50 to-transparent border-blue-500 shadow-sm' : ' border-transparent' }}">
             <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                 <div class="shrink-0 mt-1 pointer-events-none">
                     <div
                         class="w-2 h-2 rounded-full  group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none {{ Route::currentRouteName() == 'about-us' ? 'bg-blue-500 scale-150 shadow-md shadow-blue-500/50' : 'bg-gray-300' }}">
                     </div>
                 </div>
                 <div class="flex-1 min-w-0 pointer-events-none">
                     <h4
                         class="font-semibold  group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none {{ Route::currentRouteName() == 'about-us' ? 'text-blue-600' : 'text-gray-700' }}">
                         About us
                     </h4>
                 </div>
                 <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                     class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 shrink-0 mt-1 pointer-events-none"
                     alt="">
             </div>
             <div
                 class="absolute inset-0 bg-linear-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
             </div>
         </a>

         <!--======= Organization structure =======-->
         <a href="{{ route('organization-structure') }}"
             class="page-nav block p-5 hover:bg-linear-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 hover:border-blue-500 active:bg-blue-100 {{ Route::currentRouteName() == 'organization-structure' ? 'bg-linear-to-r from-blue-50 to-transparent border-blue-500 shadow-sm' : ' border-transparent' }}">
             <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                 <div class="shrink-0 mt-1 pointer-events-none">
                     <div
                         class="w-2 h-2 rounded-full  group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none {{ Route::currentRouteName() == 'organization-structure' ? 'bg-blue-500 scale-150 shadow-md shadow-blue-500/50' : 'bg-gray-300' }}">
                     </div>
                 </div>
                 <div class="flex-1 min-w-0 pointer-events-none">
                     <h4
                         class="font-semibold  group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none {{ Route::currentRouteName() == 'organization-structure' ? 'text-blue-600' : 'text-gray-700' }}">
                         Organization Structure
                     </h4>
                 </div>
                 <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                     class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 shrink-0 mt-1 pointer-events-none"
                     alt="">
             </div>
             <div
                 class="absolute inset-0 bg-linear-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
             </div>
         </a>

         <!--======= Team =======-->
         <a href="{{ route('team') }}"
             class="page-nav block p-5 hover:bg-linear-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 hover:border-blue-500 active:bg-blue-100 {{ Route::currentRouteName() == 'team' ? 'bg-linear-to-r from-blue-50 to-transparent border-blue-500 shadow-sm' : ' border-transparent' }}">
             <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                 <div class="shrink-0 mt-1 pointer-events-none">
                     <div
                         class="w-2 h-2 rounded-full  group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none {{ Route::currentRouteName() == 'team' ? 'bg-blue-500 scale-150 shadow-md shadow-blue-500/50' : 'bg-gray-300' }}">
                     </div>
                 </div>
                 <div class="flex-1 min-w-0 pointer-events-none">
                     <h4
                         class="font-semibold  group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none {{ Route::currentRouteName() == 'team' ? 'text-blue-600' : 'text-gray-700' }}">
                         Team
                     </h4>
                 </div>
                 <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                     class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 shrink-0 mt-1 pointer-events-none"
                     alt="">
             </div>
             <div
                 class="absolute inset-0 bg-linear-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
             </div>
         </a>

         <!--======= Assembly Member =======-->
         <a href="{{ route('assembly-member') }}"
             class="page-nav block p-5 hover:bg-linear-to-r hover:from-blue-50 hover:to-transparent transition-all duration-300 group relative overflow-hidden border-l-4 hover:border-blue-500 active:bg-blue-100 {{ Route::currentRouteName() == 'assembly-member' ? 'bg-linear-to-r from-blue-50 to-transparent border-blue-500 shadow-sm' : ' border-transparent' }}">
             <div class="flex items-start gap-4 relative z-10 pointer-events-none">
                 <div class="shrink-0 mt-1 pointer-events-none">
                     <div
                         class="w-2 h-2 rounded-full  group-hover:bg-blue-500 group-hover:scale-150 transition-all duration-300 pointer-events-none {{ Route::currentRouteName() == 'assembly-member' ? 'bg-blue-500 scale-150 shadow-md shadow-blue-500/50' : 'bg-gray-300' }}">
                     </div>
                 </div>
                 <div class="flex-1 min-w-0 pointer-events-none">
                     <h4
                         class="font-semibold  group-hover:text-blue-600 transition-colors duration-200 line-clamp-2 mb-1 pointer-events-none {{ Route::currentRouteName() == 'assembly-member' ? 'text-blue-600' : 'text-gray-700' }}">
                         Assembly Member
                     </h4>
                 </div>
                 <img src="{{ asset('assets/svg/cheveron-right.svg') }}"
                     class="icon w-5 h-5 group-hover:translate-x-2 transition-all duration-300 shrink-0 mt-1 pointer-events-none"
                     alt="">
             </div>
             <div
                 class="absolute inset-0 bg-linear-to-r from-blue-500/0 to-blue-500/5 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500">
             </div>
         </a>
     </div>
 </div>
