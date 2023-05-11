<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Unit Build | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">BUILD (System Unit)</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <form action="{{ route('user.saved.unit.build') }}" method="POST">
            @csrf
            <div class="grid grid-cols-5 grid-rows-2 gap-10 p-10">
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=processor' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->processor_image ? asset('storage/'.$build->processor_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="processor_id" value="{{ $build->processor_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">CPU / Processor</label>
                    </a>
                    @error('processor_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=cpu_cooler' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->cpu_cooler_image ? asset('storage/'.$build->cpu_cooler_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="cpu_cooler_id" value="{{ $build->cpu_cooler_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">CPU Cooler</label>
                    </a>
                    @error('cpu_cooler_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=moba' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->moba_image ? asset('storage/'.$build->moba_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="moba_id" value="{{ $build->moba_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Motherboard</label>
                    </a>
                    @error('moba_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=memory' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->memory_image ? asset('storage/'.$build->memory_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="memory_id" value="{{ $build->memory_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Memory</label>
                    </a>
                    @error('memory_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=gpu' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->gpu_image ? asset('storage/'.$build->gpu_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="gpu_id" value="{{ $build->gpu_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Graphics Card</label>
                    </a>
                    @error('gpu_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=storage' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->storage_image ? asset('storage/'.$build->storage_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="storage_id" value="{{ $build->storage_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Storage</label>
                    </a>
                    @error('storage_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=power_supply' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->power_supply_image ? asset('storage/'.$build->power_supply_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="power_supply_id" value="{{ $build->power_supply_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Power Supply</label>
                    </a>
                    @error('power_supply_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=case' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->case_image ? asset('storage/'.$build->case_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="case_id" value="{{ $build->case_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Case</label>
                    </a>
                    @error('case_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <a href="{{ route('user.products') . '/?build=unit&category=case_fan' }}">
                        <div class="border-4 border-black flex justify-center items-center">
                            <img id="case_fan" class="md:h-32 md:w-32 w-52 h-52" src="{{ $build->case_fan_image ? asset('storage/'.$build->case_fan_image) : asset('images/plus.svg') }}">
                            <input type="hidden" name="case_fan_id" value="{{ $build->case_fan_id ?? false }}">
                        </div>
                        <label class="flex justify-center items-center md:text-xl text-2xl text-orange-800 font-bold">Case Fan</label>
                    </a>
                    @error('case_fan_id')
                        <p class="flex justify-center items-center text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="hidden">
                    <input type="hidden" name="category" value="unit">
                </div>
            </div>
            <div class="flex justify-center items-center gap-10 px-10 p-10">
                <button type="button" class="bg-orange-300 px-11 py-5 text-lg text-orange-800 font-bold border border-slate-600">Order Now</button>
                <button type="submit" class="bg-orange-300 px-11 py-5 text-lg text-orange-800 font-bold border border-slate-600">Save Build</button>
            </div>
        </form>
    </x-content>

    <x-flash_message />

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>