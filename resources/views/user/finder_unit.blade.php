<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Profile | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">SYSTEM UNIT FINDER</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <form class="p-14" action="{{ route('user.filter.finder.unit') }}" method="GET">
            <div class="border border-black flex justify-center items-center p-10">
                <div class="grid grid-rows-6 gap-10">
                    {{-- Question 1 --}}
                    <div class="">
                        <h1 class="text-4xl text-black font-normal">What will be the type of computer will you need?</h1>
                        <select name="type" class="w-full h-auto border border-black mt-5">
                            <option value="gaming">Gaming</option>
                            <option value="office">Office / Work Station</option>
                            <option value="family">Family / Simple</option>
                        </select>
                    </div>
                    {{-- Question 2 --}}
                    <div class="">
                        <h1 class="text-4xl text-black font-normal">How much storage will you need</h1>
                        <select name="storage" class="w-full h-auto border border-black mt-5">
                            <option value="500mb">500mb below</option>
                            <option value="1gb">1GB</option>
                            <option value="2gb">2GB above</option>
                        </select>
                    </div>
                    {{-- Question 3 --}}
                    <div class="">
                        <h1 class="text-4xl text-black font-normal">How long are you planning to use the computer per day (hours)</h1>
                        <select name="endurance" class="w-full h-auto border border-black mt-5">
                            <option value="2">2 below</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="16">16+</option>
                        </select>
                    </div>
                    {{-- Question 4 --}}
                    <div class="">
                        <h1 class="text-4xl text-black font-normal">What is your price range for the computer</h1>
                        <select name="budget" class="w-full h-auto border border-black mt-5">
                            <option value="15-20">15k to 20k</option>
                            <option value="20-25">20k to 25k</option>
                            <option value="25">25k above</option>
                        </select>
                    </div>
                    {{-- Question 5 --}}
                    <div class="">
                        <h1 class="text-4xl text-black font-normal">What type of Equipment would you prefer</h1>
                        <select name="aesthetic" class="w-full h-auto border border-black mt-5">
                            <option value="wired_rgb">RGB</option>
                            <option value="wired">No RGB</option>
                        </select>
                        <input type="hidden" name="category" value="unit">
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>