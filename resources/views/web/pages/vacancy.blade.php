@extends('web.layouts.main')
@section('title', 'Vacancy')


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
                    Vacancy
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--=============== Cards ===============-->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 mb-16 z-10">
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-6 z-4">

                <!--=========== card 1 =================-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-right">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/badge-dollar-light-blue.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Competitive Salary</h3>
                    <p class="text-gray-600 text-sm">We offer attractive compensation packages and benefits.</p>
                </div>


                <!--=========== card 2 =================-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-right">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/badge-dollar-light-blue.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Competitive Salary</h3>
                    <p class="text-gray-600 text-sm">We offer attractive compensation packages and benefits.</p>
                </div>


                <!--=========== card 3 =================-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-right">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/badge-dollar-light-blue.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Competitive Salary</h3>
                    <p class="text-gray-600 text-sm">We offer attractive compensation packages and benefits.</p>
                </div>
            </div>
        </div>

        <!--======== Current Vacancies section ==========-->
        <div class="bg-white py-3">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <p class="text-blue-500 text-sm font-semibold uppercase tracking-wider mb-2">Available Positions</p>
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Current Openings</h3>
                    <p class="text-gray-600">Explore our current job opportunities and find the perfect role for you.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <!--===== Job 1 ======-->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-all duration-300"
                        data-aos="fade-up">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 mb-2">Mathematics Teacher</h4>
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Full Time
                                            </span>
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Teaching
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Lumbini, Nepal
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/briefcase.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        3+ years experience
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Posted: January 5, 2026
                                    </div>
                                </div>

                                <p class="text-gray-600 mt-3 leading-relaxed">
                                    We are seeking an experienced Mathematics teacher for secondary level. The ideal
                                    candidate should have strong subject knowledge and the ability to make complex
                                    concepts
                                    easy to
                                    understand.
                                </p>
                            </div>

                            <!-- Button stays at top -->
                            <div class="mt-4 lg:mt-0 lg:ml-6">
                                <button type="button" data-targetModalId="vacancy-apply-modal"
                                    class="open-modal w-full lg:w-auto bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--===== Job 2 ======-->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-all duration-300"
                        data-aos="fade-up">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 mb-2">Mathematics Teacher</h4>
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Full Time
                                            </span>
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Teaching
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Lumbini, Nepal
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/briefcase.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        3+ years experience
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Posted: January 5, 2026
                                    </div>
                                </div>

                                <p class="text-gray-600 mt-3 leading-relaxed">
                                    We are seeking an experienced Mathematics teacher for secondary level. The ideal
                                    candidate should have strong subject knowledge and the ability to make complex
                                    concepts
                                    easy to
                                    understand.
                                </p>
                            </div>

                            <!-- Button stays at top -->
                            <div class="mt-4 lg:mt-0 lg:ml-6">
                                <button type="button" data-targetModalId="vacancy-apply-modal"
                                    class="open-modal w-full lg:w-auto bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--===== Job 3 ======-->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-all duration-300"
                        data-aos="fade-up">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 mb-2">Mathematics Teacher</h4>
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Full Time
                                            </span>
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Teaching
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Lumbini, Nepal
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/briefcase.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        3+ years experience
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Posted: January 5, 2026
                                    </div>
                                </div>

                                <p class="text-gray-600 mt-3 leading-relaxed">
                                    We are seeking an experienced Mathematics teacher for secondary level. The ideal
                                    candidate should have strong subject knowledge and the ability to make complex
                                    concepts
                                    easy to
                                    understand.
                                </p>
                            </div>

                            <!-- Button stays at top -->
                            <div class="mt-4 lg:mt-0 lg:ml-6">
                                <button type="button" data-targetModalId="vacancy-apply-modal"
                                    class="open-modal w-full lg:w-auto bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--===== Job 4 ======-->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-all duration-300"
                        data-aos="fade-up">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                            <div class="flex-1">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 mb-2">Mathematics Teacher</h4>
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                Full Time
                                            </span>
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Teaching
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/map-pin.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Lumbini, Nepal
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/briefcase.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        3+ years experience
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/calendar.svg') }}" class="w-4 h-4 mr-2"
                                            alt="">
                                        Posted: January 5, 2026
                                    </div>
                                </div>

                                <p class="text-gray-600 mt-3 leading-relaxed">
                                    We are seeking an experienced Mathematics teacher for secondary level. The ideal
                                    candidate should have strong subject knowledge and the ability to make complex
                                    concepts
                                    easy to
                                    understand.
                                </p>
                            </div>

                            <!-- Button stays at top -->
                            <div class="mt-4 lg:mt-0 lg:ml-6">
                                <button type="button" data-targetModalId="vacancy-apply-modal"
                                    class="open-modal w-full lg:w-auto bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
                                    Apply Now
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

    <!--============================ Modal ===================================-->
    <div id="vacancy-apply-modal"
        class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">

            <!--======= Modal Header =======-->
            <div class="bg-blue-500 text-white p-6 rounded-t-xl sticky top-0 z-10">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Application Form</h3>
                        <p class="text-blue-100">Mathematics Teacher Position</p>
                    </div>
                    <button type="button" data-targetModalId="vacancy-apply-modal"
                        class="close-modal text-white hover:text-gray-200 text-3xl font-light leading-none inline-flex items-center justify-center">
                        <img src="{{ asset('assets/svg/x-white.svg') }}" class="w-5 h-5 pointer-events-none"
                            alt="">
                    </button>
                </div>
            </div>

            <!--================== Modal Body =================-->
            <div class="p-6">
                <form id="applicationForm" class="space-y-6">
                    <!--====== Personal Information Section =======-->
                    <div>
                        <div class="flex items-center gap-3 mb-4 pb-2 border-b-2 border-blue-500">
                            <span
                                class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-400 text-blue-600">
                                <img src="{{ asset('assets/svg/users-white.svg') }}" class="w-5 h-5" alt="">
                            </span>
                            <h4 class="text-lg font-bold text-gray-800">
                                Personal Information
                            </h4>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="Enter first name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="your.email@example.com">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="+977 9867543657">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Current Address <span class="text-red-500">*</span>
                            </label>
                            <input type="text" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                placeholder="Street address, City, District">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Date of Birth <span class="text-red-500">*</span>
                                </label>
                                <input type="date" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Gender <span class="text-red-500">*</span>
                                </label>
                                <select required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!--====== Professional Information Section =======-->
                    <div>
                        <div class="flex items-center gap-3 mb-4 pb-2 border-b-2 border-blue-500">
                            <span
                                class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-400 text-blue-600">
                                <img src="{{ asset('assets/svg/briefcase-white.svg') }}" class="w-5 h-5" alt="">
                            </span>
                            <h4 class="text-lg font-bold text-gray-800">
                                Professional Information
                            </h4>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Highest Qualification <span class="text-red-500">*</span>
                                </label>
                                <select required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200">
                                    <option value="">Select qualification</option>
                                    <option value="bachelors">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="phd">PhD</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Field of Study <span class="text-red-500">*</span>
                                </label>
                                <input type="text" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="e.g., Mathematics, Education">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Years of Experience <span class="text-red-500">*</span>
                                </label>
                                <select required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200">
                                    <option value="">Select experience</option>
                                    <option value="0-1">0-1 years</option>
                                    <option value="1-3">1-3 years</option>
                                    <option value="3-5">3-5 years</option>
                                    <option value="5-10">5-10 years</option>
                                    <option value="10+">10+ years</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Current/Previous Institution
                                </label>
                                <input type="text"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                    placeholder="Institution name">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Teaching Subjects/Specialization
                            </label>
                            <input type="text" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all duration-200"
                                placeholder="e.g., Algebra, Calculus, Geometry">
                        </div>
                    </div>

                    <!--========= Documents Section =========-->
                    <div>
                        <div class="flex items-center gap-3 mb-4 pb-2 border-b-2 border-blue-500">
                            <span
                                class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-400 text-blue-600">
                                <img src="{{ asset('assets/svg/file-text-white.svg') }}" class="w-5 h-5" alt="">
                            </span>
                            <h4 class="text-lg font-bold text-gray-800">
                                Documents
                            </h4>
                        </div>
                        <div class="space-y-4">
                            <!--====== Cv =====-->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Resume/CV <span class="text-red-500">*</span>
                                </label>
                                <input type="file" required accept=".pdf,.doc,.docx"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer">
                                <p class="text-xs text-gray-500 mt-1">Accepted formats: PDF, DOC, DOCX (Max 5MB)</p>
                            </div>

                            <!--====== Documents =====-->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    All Documents
                                </label>
                                <input type="file" required accept=".pdf,.doc,.docx"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer">
                                <p class="text-xs text-gray-500 mt-1">Accepted formats: PDF, DOC, DOCX (Max 5MB)</p>
                            </div>
                        </div>
                    </div>

                    <!--======= Additional Information Section =========-->
                    <div>
                        <div class="flex items-center gap-3 mb-4 pb-2 border-b-2 border-blue-500">
                            <span
                                class="w-9 h-9 inline-flex items-center justify-center rounded-lg bg-blue-400 text-blue-600">
                                <img src="{{ asset('assets/svg/message-square-code.svg') }}" class="w-5 h-5"
                                    alt="">
                            </span>
                            <h4 class="text-lg font-bold text-gray-800">
                                Additional Information
                            </h4>
                        </div>

                        <!--====== why join us =====-->
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Why do you want to join Buddha School? <span class="text-red-500">*</span>
                            </label>
                            <textarea required rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition resize-none"
                                placeholder="Tell us about your motivation and interest in this position..."></textarea>
                        </div>

                        <!--====== Source of info =====-->
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                How did you hear about this position? <span class="text-red-500">*</span>
                            </label>
                            <select required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                                <option value="">Select an option</option>
                                <option value="website">School Website</option>
                                <option value="social">Social Media</option>
                                <option value="referral">Referral</option>
                                <option value="job-portal">Job Portal</option>
                                <option value="newspaper">Newspaper</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!--====== Expected Salary =====-->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Expected Salary Range
                                </label>
                                <input type="text"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                    placeholder="e.g., NPR 40,000 - 50,000">
                            </div>

                            <!--====== Available From =====-->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Available to Start From <span class="text-red-500">*</span>
                                </label>
                                <input type="date" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
                            </div>
                        </div>
                    </div>

                    <!--====== Terms and Conditions ======-->
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" required
                                class="mt-1 w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                            <span class="text-sm text-gray-700">
                                I confirm that all the information provided is accurate and true to the best of my
                                knowledge. I understand that any false information may result in the rejection of my
                                application or termination of employment. <span class="text-red-500">*</span>
                            </span>
                        </label>
                    </div>

                    <!--======= Action Buttons ========-->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 border-t">
                        <button type="button" data-targetModalId="vacancy-apply-modal"
                            class="close-modal flex-1 inline-flex items-center justify-center gap-3 px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition">
                            <img src="{{ asset('assets/svg/corner-down-left.svg') }}" class="w-4 h-4 pointer-events-none"
                                alt="">
                            Cancel
                        </button>
                        <button type="submit"
                            class="flex-1 px-6 py-3 inline-flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 transition shadow-lg">
                            <img src="{{ asset('assets/svg/save-white.svg') }}" class="w-4 h-4 pointer-events-none"
                                alt="">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
