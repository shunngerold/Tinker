<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Saved Build | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-6xl text-orange-800 font-bold">SAVED BUILDS</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="p-20">
            @unless(count($saved) == 0)
                @foreach ($saved as $savebuilds)
                    <div class="mt-5 flex justify-between items-center bg-gray-200 w-full py-10 p-20">
                        <div class="text-2xl text-orange-800 font-bold">
                            {{$savebuilds->name}}
                        </div>
                        <div class="text-2xl text-orange-800 font-bold">
                            {{$savebuilds->category}}
                        </div>
                        <div class="text-xl text-orange-800 font-semibold">
                            {{$savebuilds->created_at}}
                        </div>
                    </div>
                @endforeach
            @else
                <div class="flex justify-center items-center">
                    <h1 class="flex justify-center items-center text-3xl text-orange-800 font-bold">No builds available</h1>
                </div>
            @endunless
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>