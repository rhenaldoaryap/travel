@extends('layouts.app')

@section('title', 'Travel')

@section('content')
<div class="relative overflow-hidden">
    <div class="relative z-0 pb-8 bg-white sm:py-10 md:pb-10 lg:max-w-3xl lg:w-full lg:pb-10 xl:pb-32">
        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-center lg:text-left text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    Forget Work
                    <br class="sm:hidden">
                    <span class="text-red-500">get vacation!</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Give reward for your self, you have been working so hard it's time to get break and enjoy vacation.
                    <br>
                    <br>
                    Just sit tight, tell us where you want to vacation, we will create for you!
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{ url('register') }}" class="transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white focus:outline-none focus:shadow-outline md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#price" class="w-full flex items-center justify-center py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-green-500 focus:outline-none focus:shadow-outline focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
                            Check Price
                            <svg class="animate-bounce w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-full md:h-full lg:h-full rounded-lg" src="{{ asset('images/hero.jpg') }}" alt="hero">
    </div>
</div>
<section class="text-gray-700">
    <div class="border border-black flex flex-col items-center px-5 mt-10 mx-auto lg:px-8 lg:py-5 lg:mt-20 md:flex-row bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
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
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z">
                                </path>
                                <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z">
                                </path>
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
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd">
                                </path>
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
                <img class="object-cover object-center rounded-lg " alt="pict2" src="{{ asset('images/package.jpg') }}">
            </div>
        </div>
    </div>
    <div class="relative text-center font-h1 my-5 bg-gray-300 py-3 px-6 rounded-3xl">
        <h3 class="text-4xl">What they said about us?</h3>
        <div class="text-black">
            <div class="container px-8 mx-auto py-2 lg:px-4">
                <div class="flex flex-wrap -m-4">
                    <div class="p-8 mx-auto mb-6 lg:w-1/3 lg:mb-0">
                        <div class="h-full p-4 text-justify border rounded-xl">
                            <p class="text-base font-medium leading-relaxed">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aliquid facere dolorem deserunt provident nostrum, nihil aliquam laboriosam cumque, hic eveniet? Ipsum placeat, eius qui cum deleniti explicabo molestias optio."
                            </p>
                            <span class="flex flex-col flex-grow text-center items-center">
                                <a class="mt-6">
                                    <img alt="testimonial" class="inline-block object-cover object-center w-16 h-16 mb-4 rounded-full " src="{{ asset('images/cust1.jpg') }}">
                                </a>
                                <span class="font-medium text-gray-900">Gabriel Svensson</span>
                                <span class="text-sm uppercase">Country Manager</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-8 mx-auto mb-6 lg:w-1/3 lg:mb-0">
                        <div class="h-full p-4 text-left border rounded-xl">
                            <p class="text-base font-medium leading-relaxed">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis labore dolore necessitatibus, eligendi earum atque? Laudantium nulla aperiam suscipit facilis perferendis. Magnam natus nihil nisi quod obcaecati accusamus itaque fugit."
                            </p>
                            <span class="flex flex-col flex-grow text-center items-center">
                                <a class="mt-6">
                                    <img alt="testimonial" class="inline-block object-cover object-center w-16 h-16 mb-4 rounded-full " src="{{ asset('images/cust2.png') }}">
                                </a>
                                <span class="font-medium text-gray-900">Earlee Joshua</span>
                                <span class="text-sm uppercase">Head of Marketing JL Inc.</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-8 mx-auto mb-6 lg:w-1/3 lg:mb-0">
                        <div class="h-full p-4 text-left border rounded-xl">
                            <p class="text-base font-medium leading-relaxed">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores laborum quam similique fuga distinctio aliquam illo voluptatem architecto eaque minus ut totam rem consequatur quia molestiae, laudantium, adipisci maxime."
                            </p>
                            <span class="flex flex-col flex-grow text-center items-center">
                            <a class="mt-6">
                                <img alt="testimonial" class="inline-block object-cover object-center w-16 h-16 mb-4 rounded-full" src="{{ asset('images/cust3.jpg') }}">
                            </a>
                                <span class="font-medium text-gray-900">Shivaz Shamoon</span>
                                <span class="text-sm uppercase">CEO MG Group</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row items-start px-20">
        <a href="#">
            <h4 class="inline-flex items-center font-h1 text-bold text-2xl bg-green-500 px-5 py-2 rounded-md text-white" id="price">
                Cheapest
                <svg class="ml-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd">
                    </path>
                </svg>
            </h4>
        </a>
    </div>
    <div class="text-gray-700">
        <div class="container px-8 pt-2 mx-auto">
            <div class="flex flex-wrap ">
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/cheap1.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2
                                    class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 250K
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Explore Holy Temple
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit eaque dolor sapiente rerum neque itaque? Alias at, harum ut pariatur quos, iure facilis maiores cum ratione sapiente enim autem eaque.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="animate-pulse border border-black rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/cheap2.png') }}" alt="content">
                            <div class="p-6 ">
                                <h2
                                    class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 200K
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Semeru Hiking
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae iusto ipsam eaque illo saepe deserunt officia quidem consequatur ab, doloremque ullam nobis reiciendis nisi inventore labore nostrum beatae obcaecati eos.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/cheap3.png') }}" alt="content">
                            <div class="p-6 ">
                                <h2 class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 150K
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Jakarta City Tour
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, aut ullam cumque nisi reiciendis quo debitis optio, fugiat, ratione eius earum vitae eos nam. Quas similique culpa est dolor praesentium.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row items-start px-20 mt-10">
        <a href="#">
            <h4 class="inline-flex items-center font-h1 text-bold text-2xl bg-green-500 px-5 py-2 rounded-md text-white">
                Luxurious
                <svg class="ml-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd">
                    </path>
                </svg>
            </h4>
        </a>
    </div>
    <div class="text-gray-700">
        <div class="container px-8 pt-2 mx-auto">
            <div class="flex flex-wrap ">
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/lux1.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2
                                    class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 30000K
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Veligandu Island Resort & Spa, Veligandu Island, Maldives
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus autem dignissimos nam repellendus similique dolores ab saepe doloribus, dolore ad pariatur aspernatur recusandae, enim accusamus nobis impedit. Iure, fugit sunt.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/lux2.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2
                                    class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 35000K
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Arc de Triomphe, Paris, France
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sit at voluptatibus exercitationem cumque voluptas? Et voluptatibus voluptates nemo magni fuga atque odit. Ea quaerat sit molestias placeat id nostrum?
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl bg-gradient-to-br from-yellow-300 via-orange-500 to-white">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/lux3.jpg') }}" alt="content">
                            <div class="p-6">
                                <h2 class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 50000K
                                    <span class="ml-1 text-base text-black">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-black lg:text-2xl">
                                    Rokers Point Settlement, Exuma, The Bahamas
                                </h2>
                                <p class="mb-4 text-base leading-relaxed text-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ab ullam nobis minima iure eligendi eum dignissimos, earum sit magni blanditiis itaque sequi. Dolorum, assumenda quisquam! Sed maiores et dolore?
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row items-start px-20 mt-10">
        <a href="#">
            <h4 class="inline-flex items-center font-h1 text-bold text-2xl bg-green-500 px-5 py-2 rounded-md text-white">
                Nature
                <svg class="ml-2 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd">
                    </path>
                </svg>
            </h4>
        </a>
    </div>
    <div class="text-gray-700">
        <div class="container px-8 pt-2 mx-auto">
            <div class="flex flex-wrap ">
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/nature1.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2 class="flex items-baseline justify-start mb-4 text-xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 8500k
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    Horseshoe Bend Parking, Page, United States
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veniam officia quaerat dolorum provident alias, doloribus cumque eveniet labore quibusdam, ut repudiandae, in accusantium?
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl bg-gradient-to-bl from-green-500 via-teal-400 to-yellow-300">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/nature2.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2 class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 9000k
                                    <span class="ml-1 text-base text-black">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-black lg:text-2xl">
                                    Obernberger See, Obernberg am Brenner, Austria
                                </h2>
                                <p class="mb-4 text-base leading-relaxed text-black">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut non, officia quia molestias sed, maxime doloremque commodi voluptate eius accusantium aliquid est qui dignissimos repellat impedit illum, nisi quidem facilis!
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="px-2 py-2 lg:w-1/3 md:w-full">
                    <a href="#">
                        <div class="border rounded-xl">
                            <img class="object-cover object-center w-full mb-2 h-52 rounded-t-xl"
                                src="{{ asset('images/nature3.jpg') }}" alt="content">
                            <div class="p-6 ">
                                <h2
                                    class="flex items-baseline justify-start mb-4 text-3xl font-bold leading-none text-left text-black lg:text-6xl">
                                    Rp. 8000k
                                    <span class="ml-1 text-base text-gray-600">/person</span>
                                </h2>
                                <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl">
                                    BLago di Braies, Italy
                                </h2>
                                <p class="mb-4 text-base leading-relaxed">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente libero ea fuga saepe velit eveniet deleniti, dolor magni laudantium delectus ad harum ducimus molestias error aspernatur! Laboriosam voluptatibus similique fuga.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="px-20">
        <div class="flex flex-col lg:flex-row justify-between bg-gradient-to-tr from-green-400 via-white to-yellow-300 rounded-md my-10 py-10 items-center">
            <div class="px-5 lg:px-20">
                <h4 class="font-h1 text-2xl text-black">
                    Start Scheduling
                    <br>
                    <span class="font-bold text-red-500">your trip.</span>
                </h4>
            </div>
            <div class="mt-5 lg:mt-0 text-black">
                <div class="px-5 lg:px-20 flex flex-row">
                    <a href="{{ url('register') }}">
                        <h4 class="font-h1 text-2xl bg-orange-300 hover:bg-orange-500 rounded-full px-3 py-3 mr-5">
                            Register
                        </h4>
                    </a>
                    <a href="{{ url('login') }}">
                        <h4 class="font-h1 text-2xl rounded-full px-3 py-3 text-center bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">
                            Login
                        </h4>
                    </a>
                </div>
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
