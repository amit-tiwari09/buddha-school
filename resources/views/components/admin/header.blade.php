 <!--====================== Header ================================-->
 <header class="h-20 border-b border-gray-200 px-4 md:px-8 grid grid-cols-2 shadow-sm flex-shrink-0">

     <div class="col-span-1 max-w-2xl items-center flex ">
         <button class="lg:hidden toggle-sidebar p-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors mr-4">
             <img src="{{ asset('assets/svg/menu.svg') }}" class="w-8 h-8 pointer-events-none">
         </button>
     </div>

     <div class="col-span-1 flex items-center justify-end gap-2 md:gap-4 ml-4 md:ml-6">
         <a href="#"
             class="flex items-center justify-center gap-2 text-sm font-medium h-9 rounded-md px-3 cursor-pointer">
             <img src="{{ asset('assets/svg/user.svg') }}" class="w-4 h-4 mr-2 pointer-events-none">
         </a>

         <div class="flex items-center  border-l border-gray-300  cursor-pointer">
             <div class="relative group flex items-center space-x-2 pl-4  h-12">
                 <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
                     alt="Profile" class="h-8 w-8 rounded-full object-cover">

                 <div class="hidden md:block">
                     <div class="text-sm font-medium text-gray-700">Amit Tiwari</div>
                     <div class="text-xs text-gray-500">amit@gmail.com</div>
                 </div>

                 <div
                     class="absolute right-4 top-[31px] z-50 mt-3 w-56 rounded-2xl bg-white/95 shadow-2xl border border-gray-200/50 hidden group-hover:block overflow-hidden">

                     <div class="p-2">
                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 transition-all duration-200 group/item">
                             <div
                                 class="flex items-center justify-center w-9 h-9 rounded-lg bg-green-500 text-white group-hover/item:scale-110 transition-transform">
                                 <img src="{{ asset('assets/svg/user-white.svg') }}" class="w-5 h-5">
                             </div>
                             <span class="font-medium text-sm">Profile</span>
                         </a>

                         <a href="#"
                             class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 transition-all duration-200 group/item">
                             <div
                                 class="flex items-center justify-center w-9 h-9 rounded-lg bg-green-500 text-white group-hover/item:scale-110 transition-transform">
                                 <img src="{{ asset('assets/svg/setting-white.svg') }}" class="w-5 h-5">

                             </div>
                             <span class="font-medium text-sm">Settings</span>
                         </a>
                     </div>

                     <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent mx-4"></div>

                     <div class="p-2">
                         <button
                             class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-600 hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 transition-all duration-200 group/item">
                             <div
                                 class="flex items-center justify-center w-9 h-9 rounded-lg bg-gradient-to-br from-red-100 to-red-200 text-red-600 group-hover/item:scale-110 transition-transform">
                                 <img src="{{ asset('assets/svg/exit-red.svg') }}" class="w-5 h-5">
                             </div>
                             <span class="font-semibold text-sm">Logout</span>
                         </button>
                     </div>
                 </div>
             </div>

             <form action="#" method="POST" class="ml-2 hidden md:block">
                 <button type="submit"
                     class="relative flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 hover:border-gray-300 hover:shadow-md transition-all duration-200">
                     <img src="{{ asset('assets/svg/exit.svg') }}" class="w-4 h-4 ">
                     <span>Logout</span>
                 </button>
             </form>
         </div>
     </div>
 </header>
