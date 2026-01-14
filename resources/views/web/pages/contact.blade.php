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
                    Contact us
                </h2>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                </p>
            </div>
        </div>

        <!--=============== Contact Info Cards ===============-->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 mb-16">
            <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 z-5">
                <!--===== Card 1 =====-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-up">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/map-pin-light-blue.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Our Location</h3>
                    <p class="text-gray-600 text-sm">123 Education Street, Lumbini, Nepal</p>
                </div>

                <!--===== Card 2 =====-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-up">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/phone-blue-light.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Phone Number</h3>
                    <p class="text-gray-600 text-sm">+977 9876543210</p>
                </div>

                <!--===== Card 3 =====-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-up">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/mail-blue-light.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Email Address</h3>
                    <p class="text-gray-600 text-sm">info@buddha-school.edu</p>
                </div>

                <!--===== Card 4 =====-->
                <div class="bg-white rounded-lg shadow-md p-6 text-center" data-aos="fade-up">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <img src="{{ asset('assets/svg/clock-blue-light.svg') }}" class="w-7 h-7" alt="">
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Working Hours</h3>
                    <p class="text-gray-600 text-sm">Mon - Fri: 7:00 AM - 4:00 PM</p>
                </div>

            </div>
        </div>

        <!--=============== Contact Form and map ===============-->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!--======== Contact Form ==========-->
                <div class="bg-white rounded-lg shadow-md p-8" data-aos="fade-right">
                    <div class="mb-6">
                        <p class="text-blue-500 text-sm font-semibold uppercase tracking-wider mb-2">Send Message</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Get in Touch</h3>
                        <p class="text-gray-600">Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>

                    <div class="space-y-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="Enter your name" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                    placeholder="your@email.com" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                    placeholder="+977 9876543210" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                                placeholder="How can we help you?" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition resize-none"
                                placeholder="Write your message here..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-600 transition duration-200 shadow-md">
                            Send Message
                        </button>
                    </div>
                </div>

                <!--======== Map ==========-->
                <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-left">
                    <div class="h-full" style="min-height: 600px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.0838089307126!2d83.29083367524711!3d27.528855276285327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996ed33d6ebb9ad%3A0x6b9b7483ccc4dba4!2sAppsytech%20Pvt.Ltd!5e0!3m2!1sen!2snp!4v1768106527541!5m2!1sen!2snp"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
