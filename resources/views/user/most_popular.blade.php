<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Most Popular | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <div class="flex justify-center items-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">Most Popular</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="grid grid-cols-4 grid-rows-3 gap-10 p-20">
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="}}">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="">
                    <img id="case_fan" class="border border-black md:h-52 md:w-52 w-52 h-52" src="{{ asset('images/logo.png') }}">
                </a>
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>

{{-- Tailwind-Elements JS CDN --}}
<script src="//cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</html>