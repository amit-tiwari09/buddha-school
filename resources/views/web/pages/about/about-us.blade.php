@extends('web.layouts.main')
@section('title', 'About Us')


@section('content')
    <!--============================ Main Section ===================================-->
    <section class="w-full" data-aos="fade-up">
        <div class="relative py-16 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=1600" alt="Buddha School Background"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-600/50"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <p class="text-sm uppercase tracking-wider mb-2" data-aos="fade-right">
                    Welcome to Buddha School
                </p>
                <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-right">
                    About Us
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <div class="grid grid-cols-4 px-8">
            <!--======= About us ========-->
            <div
                class="col-span-4 lg:col-span-3 flex flex-col md:flex-row gap-5 px-5 lg:px-20 py-8 items-start justify-center">
                <div class="grid grid-cols-1 items-start">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <img src="{{ asset('assets/svg/info-blue.svg') }}" alt="">
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">About Us</h2>
                    </div>

                    <div class="prose max-w-none text-gray-700 leading-relaxed">
                        <p class="text-sm mb-4">
                            Buddha School, established in the heart of Lumbini, Nepal, stands as a beacon of
                            quality
                            education and holistic development. Founded with the vision of nurturing young minds
                            and
                            awakening wisdom, we are committed to providing an educational experience that
                            balances
                            academic excellence with spiritual and moral growth.
                        </p>


                    </div>
                </div>
            </div>

            <!--======= Nav links  ========-->
            <div class="col-span-4 lg:col-span-1 mb-3 lg:p-0 lg:pr-3 relative">
                <div class="relative lg:pt-[300px] w-full">
                    <x-web.about-pages-nav-link />
                </div>
            </div>
        </div>
    </section>
@endsection
