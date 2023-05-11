<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Brands | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-6xl text-orange-800 font-bold">BRANDS</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="grid grid-cols-3 grid-rows-3 gap-10 p-20">
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=acer' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/acer.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=asus' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/asus.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=dell' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/dell.jpg') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=hp' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/hp.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=intel' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/intel.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=lenovo' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/lenovo.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=lg' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/lg.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=nvidia' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/nvidia.png') }}">
                </a>
            </div>
            <div class="">
                <a href="{{ route('user.product.brands') . '/?brand=samsung' }}">
                    <img id="case_fan" class="border border-black md:h-46 md:w-full w-52 h-52" src="{{ asset('images/brands/samsung.png') }}">
                </a>
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>