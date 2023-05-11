<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Category | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">CATEGORIES</h1>
    </div>
    <x-content class="md:py-14 md:px-2 py-auto px-auto">
        <div class="flex justify-center items-center md:mt-0 mt-5">
            <div class="grid grid-rows-4 gap-12">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 md:gap-16 gap-5">
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=case_fan' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/case_fan.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Case Fan</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=case' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/case.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Case</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=cpu_cooler' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/cpu_cooler.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">CPU Cooler</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=gpu' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/gpu.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Graphics Card</label>
                        </a>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 sm:grid-cols-2 md:gap-16 gap-5">
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=headset' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/headset.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Headset</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=keyboard' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/keyboard.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Keyboard</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=memory' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/memory.png') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Memory</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=moba' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/moba.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Motherboard</label>
                        </a>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 sm:grid-cols-2 md:gap-16 gap-5">
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=monitor' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/monitor.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Monitor</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=mouse' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/mouse.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Mouse</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=power_supply' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/power_supply.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Power Supply</label>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=processor' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/processor.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Processor</label>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center md:items-center">
                    <div class="">
                        <a href="{{ route('user.products') . '/?category=storage' }}">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ asset('images/categories/storage.jpg') }}">
                            <label class="flex justify-center items-center md:text-lg text-2xl text-orange-800 font-bold" for="case_fan">Storage</label>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>