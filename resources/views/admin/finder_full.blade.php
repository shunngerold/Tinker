<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>CMS | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <form action="{{ route('admin.finder.full.process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 w-full h-full mt-10">
                {{-- SideBar --}}
                @include('partials._sidebar')
                {{-- Data Entry --}}
                <div class="">
                    <div class="flex justify-start items-center">
                        <h1 class="text-5xl text-orange-800 font-bold">Computer Finder (Full Setup)</h1>
                    </div>
                    <div class="grid grid-rows-12 gap-5 mt-10">
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="processor_id">Processor</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="processor_id" id="processor_id" value="{{ old('processor_id') }}">
                            @error('processor_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="cpu_cooler_id">CPU Cooler</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="cpu_cooler_id" id="cpu_cooler_id" value="{{ old('cpu_cooler_id') }}">
                            @error('cpu_cooler_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="moba_id">Motherboard</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="moba_id" id="moba_id" value="{{ old('moba_id') }}">
                            @error('moba_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="memory_id">Memory</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="memory_id" id="memory_id" value="{{ old('memory_id') }}">
                            @error('memory_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="gpu_id">Graphics Card</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="gpu_id" id="gpu_id" value="{{ old('gpu_id') }}">
                            @error('gpu_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="storage_id">Storage</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="storage_id" id="storage_id" value="{{ old('storage_id') }}">
                            @error('storage_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="power_supply_id">Power Supply</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="power_supply_id" id="power_supply_id" value="{{ old('power_supply_id') }}">
                            @error('power_supply_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="case_id">Case</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="case_id" id="case_id" value="{{ old('case_id') }}">
                            @error('case_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="monitor_id">Monitor</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="monitor_id" id="monitor_id" value="{{ old('monitor_id') }}">
                            @error('monitor_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="mouse_id">Mouse</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="mouse_id" id="mouse_id" value="{{ old('mouse_id') }}">
                            @error('mouse_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="headset_id">Headset</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="headset_id" id="headset_id" value="{{ old('headset_id') }}">
                            @error('headset_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="keyboard_id">Keyboard</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="keyboard_id" id="keyboard_id" value="{{ old('keyboard_id') }}">
                            @error('keyboard_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                
                {{-- Actions --}}
                <div class="p-10">
                    <div class="flex items-center justify-center gap-4">
                        <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Add</button>
                        <button type="button" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Remove</button>
                    </div>
                    <div class="mt-1 flex justify-center items-center mt-6">
                        <div class="">
                            <label for="file-input" class="flex flex-col items-center px-4 py-6 border border-black mt-4 cursor-pointer">
                                <span class="text-lg text-orange-800 font-bold text-center">Upload Image</span>
                                <input id="file-input" name="image" type="file" class="form-input mt-5">
                            </label>
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-6">
                        <label class="text-lg text-orange-800 font-bold" for="brand">Computer Type</label>
                        <select name="type" class="w-full h-auto border border-black mt-2 mb-4">
                            <option value="gaming">Gaming</option>
                            <option value="office">Office / Work Station</option>
                            <option value="family">Family / Simple</option>
                        </select>
                        @error('type')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <label class="text-lg text-orange-800 font-bold" for="brand">Storage</label>
                        <select name="storage" class="w-full h-auto border border-black mt-2 mb-4">
                            <option value="500mb">500mb below</option>
                            <option value="1gb">1GB</option>
                            <option value="2gb">2GB above</option>
                        </select>
                        @error('storage')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <label class="text-lg text-orange-800 font-bold" for="brand">Endurance</label>
                        <select name="endurance" class="w-full h-auto border border-black mt-2 mb-4">
                            <option value="2">2 below</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="16">16+</option>
                        </select>
                        @error('endurance')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <label class="text-lg text-orange-800 font-bold" for="brand">Budget</label>
                        <select name="budget" class="w-full h-auto border border-black mt-2 mb-4">
                            <option value="15-20">15k to 20k</option>
                            <option value="20-25">20k to 25k</option>
                            <option value="25">25k above</option>
                        </select>
                        @error('budget')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <label class="text-lg text-orange-800 font-bold" for="brand">Peripherals</label>
                        <select name="peripherals" class="w-full h-auto border border-black mt-2 mb-4">
                            <option value="wired_rgb">Wired and RGB</option>
                            <option value="wired">Wired and No RGB</option>
                            <option value="wireless_rgb">Wireless and RGB</option>
                            <option value="wireless">Wireless and No RGB</option>
                        </select>
                        @error('peripherals')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="mt-8">
                            <input class="w-full h-auto border border-black mt-2" type="hidden" name="category" id="category" value="full">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>