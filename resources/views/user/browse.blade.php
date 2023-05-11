<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Browse | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div id="carouselExampleControls" class="relative mt-14" data-te-carousel-init data-te-carousel-slide>
            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item data-te-carousel-active>
                    <img src="//mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full" alt="Wild Landscape" />
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
                    <img src="//mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full" alt="Exotic Fruits" />
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
                    <img src="//mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full" alt="Exotic Fruits" />
                </div>
            </div>

            <!--Carousel controls - prev item-->
            <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="//www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            <!--Carousel controls - next item-->
            <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="//www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>

        {{-- SPECIAL OFFERS --}}
        <div class="flex justify-center items-center">
            <div class="mt-10">
                <div class="flex justify-center">
                    <h1 class="text-3xl text-orange-800 font-extrabold">SPECIAL OFFERS</h1>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('user.special.offer') }}" class="text-xl text-orange-800 underline">View All</a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-4 md:gap-0 gap-5 sm:grid-cols-2 px-20 py-10">
            <div class="flex justify-center items-center">
                <img class="h-48 w-48 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-48 w-48 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-48 w-48 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-48 w-48 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
        </div>
        {{-- MOST POPULAR --}}
        <div class="flex justify-center items-center">
            <div class="mt-10">
                <div class="flex justify-center">
                    <h1 class="text-3xl text-orange-800 font-extrabold">MOST POPULAR</h1>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('user.most.popular') }}" class="text-xl text-orange-800 underline">View All</a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-5 md:gap-0 gap-5 sm:grid-cols-2 px-20 py-10">
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
        </div>
        {{-- NEW ARRIVAl --}}
        <div class="flex justify-center items-center">
            <div class="mt-10">
                <div class="flex justify-center">
                    <h1 class="text-3xl text-orange-800 font-extrabold">NEW ARRIVAL</h1>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('user.new.arrival') }}" class="text-xl text-orange-800 underline">View All</a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-5 md:gap-0 gap-5 sm:grid-cols-2 px-20 py-10">
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <img class="h-36 w-36 border-4 border-black rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>

{{-- Tailwind-Elements JS CDN --}}
<script src="//cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</html>