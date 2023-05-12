<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Products | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">SPECIFICATIONS</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="md:grid md:grid-cols-2 gap-10">
            <div class="mt-10">
                <div class="flex justify-center items-center">
                    <img id="case_fan" class="md:h-80 md:w-80 w-52 h-52 border border-black p-5" src="{{$finder->image ? asset('storage/'.$finder->image) : asset('images/logo.png') }}">
                </div>
                <a href="" class="mt-5 flex justify-center text-4xl text-black font-bold">
                    <ion-icon name="heart-outline"></ion-icon>
                    Add to Favorites
                </a>
            </div>
            <div class="p-10 grid grid-rows-12 gap-5">
                <h1 class="flex justify-start text-xl text-black font-bold">Processor: <span class="ml-2 font-normal"> {{$finder->processor_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Cpu Cooler: <span class="ml-2 font-normal"> {{$finder->cpu_cooler_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Motherboard: <span class="ml-2 font-normal"> {{$finder->moba_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Memory: <span class="ml-2 font-normal"> {{$finder->memory_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Graphics Card: <span class="ml-2 font-normal"> {{$finder->gpu_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Storage: <span class="ml-2 font-normal"> {{$finder->storage_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Power Supply: <span class="ml-2 font-normal"> {{$finder->power_supply_id}}</span></h1>
                <h1 class="flex justify-start text-xl text-black font-bold">Case: <span class="ml-2 font-normal"> {{$finder->case_id}}</span></h1>
                @if ($finder->category == "full")
                    <h1 class="flex justify-start text-xl text-black font-bold">Monitor: <span class="ml-2 font-normal"> {{$finder->monitor_id}}</span></h1>
                    <h1 class="flex justify-start text-xl text-black font-bold">Headset: <span class="ml-2 font-normal"> {{$finder->headset_id}}</span></h1>
                    <h1 class="flex justify-start text-xl text-black font-bold">Keyboard: <span class="ml-2 font-normal"> {{$finder->keyboard_id}}</span></h1>
                @elseif ($finder->category == "unit")
                    <h1 class="flex justify-start text-xl text-black font-bold">Case Fan: <span class="ml-2 font-normal"> {{$finder->case_fan_id}}</span></h1>
                @endif
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>