<!DOCTYPE html>
<html lang="en">
    <head>
        <x-head_links />
        <title>Landing Page | Tinker</title>
    </head>
    <body>
        {{-- Navigator --}}
        @include('partials._navigator')

        {{-- Content --}}
        {{-- HERO IMAGE 1 --}}
        <x-content class="md:py-14 md:px-2 py-auto px-auto">
            <div class="grid md:grid-cols-3 md:gap-3">
                <div class="flex justify-center md:items-center md:mt-0 mt-10">
                    <a href="{{ route('user.computer.finder') }}" class="bg-orange-300 text-2xl px-11 py-3 text-orange-800 font-bold border border-slate-600 rounded-full">Computer finder</a>
                </div>
                <div class="flex justify-center items-center md:mt-0 mt-5">
                    <a href="{{ route('user.browse') }}" class="bg-orange-300 text-2xl px-24 py-3 text-orange-800 font-bold border border-slate-600 rounded-full">Browse</a>
                </div>
                <div class="flex justify-center items-center md:mt-0 mt-5">
                    <a href="{{ route('user.build.page') }}" class="bg-orange-300 text-2xl px-11 py-3 text-orange-800 font-bold border border-slate-600 rounded-full">Build your own</a>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <h1 class="md:text-5xl text-3xl text-orange-800 font-bold md:mt-10 mt-5 md:p-0 p-6">What is Computer Building?</h1>
            </div>
            <div class="md:grid md:grid-cols-2 md:mt-10 md:mt-6 md:p-0 px-10">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/hero.png') }}">
                </div>
                <div class="flex justify-center items-center p-4">
                    <p class="text-3xl font-semibold flex justify-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae blanditiis quas iusto ratione neque debitis rerum tempora illo! Cumque accusantium saepe dignissimos similique ab fugit ipsa consectetur inventore, delectus nemo.</p>
                </div>
            </div>
            {{-- HERO IMAGE 2 --}}
            <div class="flex justify-center items-center mt-10 md:p-0 px-10">
                <img src="{{ asset('images/hero2.png') }}">
            </div>
            <div class="md:grid md:grid-cols-3 mt-10 p-10">
                <div class="">
                    <div class="flex justify-center items-center">
                        <img class="h-64 w-64" src="{{ asset('images/hero-icon.png') }}">
                    </div>
                    <div class=""></div>
                    <h1 class="flex justify-center text-5xl text-orange-800 font-bold">Cost Saving</h1>
                    <div class="flex justify-center items-center mt-5 px-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Molestias quod sunt consequatur quasi enim culpa repellat atque tempora labore. Optio sint recusandae, 
                        dignissimos earum maxime velit iusto ex esse perferendis!
                    </div>
                </div>
                <div class="md:mt-0 mt-11">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/hero-icon2.png') }}">
                    </div>
                    <h1 class="flex justify-center text-5xl text-orange-800 font-bold">Work Effeciency</h1>
                    <div class="flex justify-center items-center mt-5 px-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Molestias quod sunt consequatur quasi enim culpa repellat atque tempora labore. Optio sint recusandae, 
                        dignissimos earum maxime velit iusto ex esse perferendis!
                    </div>
                </div>
                <div class="md:mt-0 mt-11">
                    <div class="flex justify-center items-center">
                        <img class="h-64 w-64" src="{{ asset('images/hero-icon3.png') }}">
                    </div>
                    <h1 class="flex justify-center text-5xl text-orange-800 font-bold">User Benefit</h1>
                    <div class="flex justify-center items-center mt-5 px-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Molestias quod sunt consequatur quasi enim culpa repellat atque tempora labore. Optio sint recusandae, 
                        dignissimos earum maxime velit iusto ex esse perferendis!
                    </div>
                </div>
            </div>
        </x-content>

        <x-flash_message />

        {{-- Footer --}}
        @include('partials._footer')
    </body>
</html>
