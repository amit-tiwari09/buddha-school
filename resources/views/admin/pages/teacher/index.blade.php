@extends('admin.layouts.main')
@section('title', 'Teacher')


@section('breadcrumb')
    <div class="p-4 bg-gray-50 ">
        <nav class="text-sm text-gray-500">
            <ol class="list-reset flex">
                <li>
                    <a href="/index.html" class="text-blue-600 hover:text-blue-700 font-medium">Home</a>
                </li>
                <li>
                    <span class="mx-2">/</span>
                </li>
                <li class="text-gray-700">Teacher</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <!--================= Main content=== ===============-->
    <main class="flex-1 overflow-y-auto bg-gray-50 p-2">

        <!--============= Table ==============-->
        <div class="rounded-sm shadow-md border border-gray-200">
            <div class="border-b border-gray-200">

                <!--=========== Filter Form ============-->
                <form class="p-2 border-b border-gray-200">
                    <div
                        class="grid grid-cols-4  gap-3 xl:gap-0 bg-linear-to-br from-gray-50 to-gray-100 rounded-xl p-3 border border-gray-200 shadow-sm">
                        <div
                            class="col-span-4 xl:col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-4">

                            <!--==== Name Filter ====-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/graduation-cap.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Name
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Search Name"
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--==== Profession Filter ====-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/suitcase.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Profession
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Search Profession"
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--==== Search Button ====-->
                            <div class="flex items-end">
                                <button
                                    class="w-full px-6 py-2.5 text-sm font-semibold text-white bg-linear-to-r from-blue-600 to-blue-700 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 transition-all duration-200 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl hover:scale-105 transform">
                                    <img src="{{ asset('assets/svg/white-magnifier.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Search
                                </button>
                            </div>
                        </div>

                        <!--======== Action Buttons =========-->
                        <div class="col-span-4 xl:col-span-1  flex items-end justify-end">
                            <div class="flex gap-2">
                                <button type="reset"
                                    class="text-sm text-gray-600 hover:text-gray-700 font-medium flex items-center gap-1.5 px-3 py-2 hover:bg-gray-200 rounded-lg transition-colors">
                                    <img src="{{ asset('assets/svg/setting-vertical.svg') }}"
                                        class="w-4 h-4 pointer-events-none" alt="">
                                    Clear Filters
                                </button>
                                <button type="button" data-targetModalId="teacher-add-modal"
                                    class="open-modal text-white font-semibold flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors shadow-sm hover:shadow-md">
                                    <img src="{{ asset('assets/svg/plus-white.svg') }}" class="w-4 h-4 pointer-events-none"
                                        alt="">
                                    Add Teacher
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="overflow-auto">
                <table class="w-full caption-bottom text-sm ">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="h-12 px-4 text-left font-semibold">S.N</th>
                            <th class="h-12 px-4 text-left font-semibold">Name</th>
                            <th class="h-12 px-4 text-left font-semibold">Profile</th>
                            <th class="h-12 px-4 text-left font-semibold">Profession</th>
                            <th class="h-12 px-4 text-left font-semibold">Designation</th>
                            <th class="h-12 px-4 text-left font-semibold">Experience</th>
                            <th class="h-12 px-4 text-left font-semibold">Classes Assigned</th>
                            <th class="h-12 px-4 text-left font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!--====== row 1 ======-->
                        <tr class="border-b border-gray-200">
                            <td class="p-4 text-xs">1</td>
                            <td class="p-4">Ramesh Sharma</td>
                            <td class="p-4">Teacher</td>
                            <td class="p-4">Science</td>
                            <td class="p-4">Senior Teacher</td>
                            <td class="p-4">8 Years</td>
                            <td class="p-4">Class 8, 9, 10</td>
                            <td class="p-4">
                                <div class="flex items-center space-x-1">
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/pencil.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/bin.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!--====== row 2 ======-->
                        <tr class="border-b border-gray-200">
                            <td class="p-4 text-xs">1</td>
                            <td class="p-4">Ramesh Sharma</td>
                            <td class="p-4">Teacher</td>
                            <td class="p-4">Science</td>
                            <td class="p-4">Senior Teacher</td>
                            <td class="p-4">8 Years</td>
                            <td class="p-4">Class 8, 9, 10</td>
                            <td class="p-4">
                                <div class="flex items-center space-x-1">
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/pencil.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/bin.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!--====== row 3 ======-->
                        <tr class="border-b border-gray-200">
                            <td class="p-4 text-xs">1</td>
                            <td class="p-4">Ramesh Sharma</td>
                            <td class="p-4">Teacher</td>
                            <td class="p-4">Science</td>
                            <td class="p-4">Senior Teacher</td>
                            <td class="p-4">8 Years</td>
                            <td class="p-4">Class 8, 9, 10</td>
                            <td class="p-4">
                                <div class="flex items-center space-x-1">
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/pencil.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/bin.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!--====== row 4 ======-->
                        <tr class="border-b border-gray-200">
                            <td class="p-4 text-xs">1</td>
                            <td class="p-4">Ramesh Sharma</td>
                            <td class="p-4">Teacher</td>
                            <td class="p-4">Science</td>
                            <td class="p-4">Senior Teacher</td>
                            <td class="p-4">8 Years</td>
                            <td class="p-4">Class 8, 9, 10</td>
                            <td class="p-4">
                                <div class="flex items-center space-x-1">
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/pencil.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                    <button class="h-4 w-4">
                                        <img src="{{ asset('assets/svg/bin.svg') }}" class="w-4 h-4" alt="">
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--============= Pagination ==============-->
            <div class="rounded-xl p-3">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Showing <span class="font-semibold text-gray-900">1-12</span> of <span
                            class="font-semibold text-gray-900">248</span> results
                    </div>

                    <div class="flex items-center space-x-2">

                        <button type="button"
                            class="group relative flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 hover:border-gray-300 hover:shadow-md transition-all duration-200">
                            <img src="{{ asset('assets/svg/cheveron-left.svg') }}" class="h-4 w-4 pointer-events-none"
                                alt="">
                            <span>Previous</span>
                        </button>

                        <button
                            class="px-4 py-2 bg-linear-to-r from-blue-400 to-blue-600 text-white rounded-lg text-sm font-medium">1</button>
                        <button
                            class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">2</button>
                        <button
                            class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">3</button>
                        <button
                            class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">4</button>
                        <span class="px-2 text-gray-500">...</span>
                        <button
                            class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition">21</button>

                        <button type="button"
                            class="group relative flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 hover:border-gray-300 hover:shadow-md transition-all duration-200">

                            <span>Next</span>
                            <img src="{{ asset('assets/svg/cheveron-right.svg') }}" class="h-4 w-4 pointer-events-none"
                                alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- =================== Add Modal =======================-->
    <div>
        <div id="teacher-add-modal"
            class="hidden fixed top-0 left-0 right-0 z-99 px-4 pt-8 overflow-y-auto h-screen flex  items-center justify-center">
            <div class="w-[30%] flex flex-col max-h-[90%] mx-auto bg-white rounded-3xl shadow-lg overflow-hidden">

                <!-- ============ Modal Header =========== -->
                <div class="p-5 border-b border-gray-100 h-[10%]">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">Add new Teacher</h2>
                            <p class="text-sm text-gray-500 mt-1">Fill in the details below</p>
                        </div>
                        <button type="button" data-targetModalId="teacher-add-modal"
                            class="close-modal h-10 flex items-center justify-center rounded-full  text-gray-400 hover:text-black transition-all duration-200">
                            <img src="{{ asset('assets/svg/cross.svg') }}" class="h-5 w-5 pointer-events-none"
                                alt="">
                        </button>
                    </div>
                </div>

                <!-- ======== Modal Body ======== -->
                <div class="px-8 py-6 overflow-y-auto h-[90%]">
                    <form id="dataForm" onsubmit="saveData(event)">
                        <div class="grid grid-cols-2 gap-5 mb-5">

                            <!--====== Teacher Name ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/graduation-cap.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Teacher Name
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter Name..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--==== Gender ====-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/circle-dot.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Gender
                                </label>
                                <div class="relative">
                                    <select
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md appearance-none cursor-pointer">
                                        <option value="completed">Male </option>
                                        <option value="pending">Female</option>
                                        <option value="processing">Other</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{ asset('assets/svg/cheveron-down.svg') }}"
                                            class="w-4 h-4 pointer-events-none" alt="">
                                    </div>
                                </div>
                            </div>


                            <!--====== Date of birth ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/calendar-check.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Dob
                                </label>
                                <div class="relative">
                                    <input type="date"
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>


                            <!--====== Email ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/mail.svg') }}" class="w-3.5 h-3.5 pointer-events-none"
                                        alt="">
                                    Email
                                </label>
                                <div class="relative">
                                    <input type="email" placeholder="Enter email..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Contact Field ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/phone.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Contact
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter contact number..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Address Field ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/map-pin.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Address
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter address..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Profession Field ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/suitcase.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Profession
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter Profession..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Designation Field ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/award.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Designation
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter Designation..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Experince Field ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/star.svg') }}" class="w-3.5 h-3.5 pointer-events-none"
                                        alt="">
                                    Experience
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter Experience..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                            <!--====== Classes Assigned ======-->
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-2 flex items-center gap-1.5">
                                    <img src="{{ asset('assets/svg/clipboard-check.svg') }}"
                                        class="w-3.5 h-3.5 pointer-events-none" alt="">
                                    Classes Assigned
                                </label>
                                <div class="relative">
                                    <input type="text" placeholder="Enter Experience..."
                                        class="w-full px-4 py-2.5 text-sm text-gray-700 bg-white border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-sm hover:shadow-md placeholder-gray-400">
                                </div>
                            </div>

                        </div>

                        <!--=== Action Buttons ===-->
                        <div class="flex gap-3 pt-2">
                            <button type="button" data-targetModalId="teacher-add-modal"
                                class="close-modal  relative flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50 hover:border-gray-300 hover:shadow-md hover:-translate-y-1 transition-all duration-200">
                                <img src="{{ asset('assets/svg/corner-up-left.svg') }}"
                                    class="w-4 h-4 pointer-events-none" alt="">
                                <span class="pointer-events-none">Cancel</span>
                            </button>

                            <button type="submit"
                                class="flex-1 group relative flex items-center gap-2 px-5 py-2.5 text-md font-medium text-white bg-blue-500 border border-gray-200 rounded-lg shadow-sm hover:bg-blue-700 hover:border-gray-300 hover:shadow-md hover:-translate-y-1  transition-all duration-200">
                                <img src="{{ asset('assets/svg/white-save.svg') }}" class="w-4 h-4 pointer-events-none"
                                    alt="">
                                <span class="pointer-events-none">Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
