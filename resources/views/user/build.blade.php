<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Build | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">BUILD</h1>
    </div>
    <div id="labelChoose" class="flex items-center justify-center mt-5">
        <h3 class="text-slate-700 text-2xl font-bold">PLEASE CHOOSE A FORMAT :</h3>
    </div>

    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        {{-- Image Selection --}}
        <section id="imageChoose" class="md:mt-5">
            <div class="md:flex md:justify-center md:items-center md:gap-20">
                <div>
                    <div class="flex justify-center items-center">
                        <h3 id="no_exp" class="text-orange-800 text-3xl font-bold flex justify-center">SYSTEM UNIT :</h3>
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('user.unit.build.page') }}">
                            <img src="{{ asset('images/build.png') }}" alt="your-image-alt-text" class="md:h-80 h-auto md:w-80 w-auto mt-5 border-2 border-black">
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center md:my-0 my-10">
                    <p class="text-2xl font-bold text-slate-700">OR</p>
                </div>
                <div>
                    <div class="flex justify-center items-center">
                        <h3 class="text-orange-800 text-3xl font-bold flex justify-center">FULL BUILD :</h3>
                    </div>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('user.full.build.page') }}">
                            <img src="{{ asset('images/build2.png') }}" alt="your-image-alt-text" class="md:h-80 h-auto md:w-80 w-auto mt-5 border-2 border-black">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>