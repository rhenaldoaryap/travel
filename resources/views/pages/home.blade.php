@extends('layouts.app')

@section('title', 'Travel')

@section('content')
<section class="text-gray-700">
    <div class="border border-black flex flex-col items-center px-5 mt-10 mx-auto lg:px-8 lg:py-10 lg:mt-20 md:flex-row bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
        <div class="w-5/6 my-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
            <img class="object-cover object-center rounded-md" alt="hero" src="{{ asset('images/team.png') }}">
        </div>
        <div class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
            <h2 class="my-4 text-2xl font-bold tracking-tighter text-center text-white lg:text-left lg:text-4xl">
                Every tour packages created by professional teams and an expert at tourism department.
            </h2>
            <p class="mb-8 text-base leading-relaxed text-center text-white lg:text-left lg:text-1xl">
                The tour packages that we already created based on data we have from survey with many travellers, so we always make sure to close enough to know what kind type of tour packages you need to vacation.
            </p>
            <p class="flex items-center mb-2 text-white">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                        </path>
                    </svg>
                </span>
                Every tour packages based on data.
            </p>
            <p class="flex items-center mb-2 text-white">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                </span>
                Created by professional at their field.
            </p>
            <p class="flex items-center mb-2 text-white">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                </span>
                Create cheapest tour packages.
            </p>
        </div>
    </div>
    <div class="text-black">
        <div class="px-5 py-10 mx-auto lg:px-8">
            <div class="flex flex-wrap text-left">
                <a href="#" class="transition duration-500 ease-in-out hover:text-white transform hover:-translate-y-1 hover:scale-110 bg-gradient-to-bl from-gray-400 to-gray-200 hover:from-pink-500 hover:to-yellow-500 px-8 py-6 lg:w-1/4 md:w-full shadow-2xl text-center justify-center items-center">
                    <div class="inline-flex items-center justify-center w-12 h-12 mb-5 text-green-500 bg-gray-200 rounded-full">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-h1 mb-3 text-2xl font-bold">Cheap Price</h3>
                    <p class="font-p mb-4 text-base leading-relaxed">
                        We created cheap tour packages based on our data that we collect by survey from many travellers.
                        <br>
                        But, with cheap price will not decrease our services.
                    </p>
                </a>
                <a href="#" class="px-8 py-6 lg:w-1/4 md:w-full shadow-2xl text-center justify-center items-center">
                    <div class="inline-flex items-center justify-center w-12 h-12 mb-5 text-green-500 bg-gray-200 rounded-full">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-h1 mb-3 text-2xl font-bold text-green-500">Trusted by travellers</h3>
                    <p class="font-p mb-4 text-base leading-relaxed">
                        We trusted by many travellers around the world.
                        We already held many tours and get almost full statisfied by travellers. So no need to worry about our services and tour packages.
                    </p>
                </a>
                <a href="#" class="transition duration-500 ease-in-out hover:text-white transform hover:-translate-y-1 hover:scale-110 bg-gradient-to-bl from-gray-400 to-gray-200 hover:from-pink-500 hover:to-yellow-500 px-8 py-6 lg:w-1/4 md:w-full shadow-2xl text-center justify-center items-center">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-green-500 bg-gray-200 rounded-full">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-h1 mb-3 text-2xl font-bold">Many Types</h3>
                    <p class="font-p mb-4 text-base leading-relaxed">
                        Looking for trip to other countries?
                        <br>
                        We have that trip for you. Want a customize trip? We can do it for you.
                        Anything for our customers.
                    </p>
                </a>
                <a href="#" class="px-8 py-6 lg:w-1/4 md:w-full shadow-2xl text-center justify-center items-center">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-green-500 bg-gray-200 rounded-full">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-h1 mb-3 text-2xl font-bold text-green-500">Always Improve</h3>
                    <p class="font-p mb-4 text-base leading-relaxed">
                        We heard feedback from our customers.
                        <br>
                        That feedback really important for us. We accepted all of feedback whether positive or negative. We heard what our customers wants and needs.
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="text-gray-700">
        <div class="flex flex-col items-center px-5 py-10 mx-auto lg:px-8 lg:py-10 md:flex-row">
            <div class="flex flex-col items-center w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0 lg:text-center">
                <h3 class="font-p mb-1 text-xl font-bold tracking-widest text-black">Make it simple and get lost!</h3>
                <h3 class="mb-8 text-2xl font-bold tracking-tighter text-center text-black lg:text-left lg:text-5xl ">
                    Choose package, confirm to us and go vacation.
                    The rest we will handle for you.
                </h3>
                <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
                    <div class="flex flex-col items-center p-4 mb-6 text-center md:w-1/2 md:mb-0 lg:text-left lg:items-start bg-blue-500 rounded-md">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-blue-800 bg-gray-200 rounded-full">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                height="18" fill="currentColor">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M14 10h-4v4h4v-4zm2 0v4h3v-4h-3zm-2 9v-3h-4v3h4zm2 0h3v-3h-3v3zM14 5h-4v3h4V5zm2 0v3h3V5h-3zm-8 5H5v4h3v-4zm0 9v-3H5v3h3zM8 5H5v3h3V5zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="font-h1 mb-3 text-2xl font-bold tracking-tighter text-black">
                                Full Support.
                            </h2>
                            <p class="font-p text-base leading-relaxed text-black">
                                Our contact support will guide you to the right tour package.
                                <br>
                                Contact support only available at
                                <br>
                                <span class="text-red-700 font-bold">08.00 - 22.00</span>.
                            </p>
                            <a href="#" class="flex items-center justify-center lg:justify-start font-semibold text-white md:mb-2 lg:mb-0 hover:text-blue-400">
                                Contact Us
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4 mb-6 text-center md:w-1/2 md:mb-0 lg:text-left lg:items-start shadow-2xl">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-blue-800 bg-gray-200 rounded-full">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M21 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18zM11 13H4v6h7v-6zm9 0h-7v6h7v-6zm-9-8H4v6h7V5zm9 0h-7v6h7V5z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="font-h1 mb-3 text-2xl font-bold tracking-tighter text-black">
                                Ready to customize.
                            </h2>
                            <p class="font-p text-base leading-relaxed">
                                Not found the tour package what you like?
                                <br>
                                Tell us to customize your tour package and we will add it for you.
                                <br>
                                We always try to give best our services.
                            </p>
                            <a href="#" class="inline-flex items-center justify-center lg:justify-start font-semibold text-blue-700 md:mb-2 lg:mb-0 hover:text-blue-400 ">
                                I want a customize package
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"width="20" height="20" fill="currentColor">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="pict2" src="https://dummyimage.com/720x600/F3F4F7/8693ac">
            </div>
        </div>
    </div>
</section>
@endsection

<!-- @section('script')
<script>
    Swal.fire('Any fool can use a computer')
</script>
@endsection -->
