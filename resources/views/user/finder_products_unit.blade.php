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
        <h1 class="text-5xl text-orange-800 font-bold">SUGGESTED SYSTEM UNIT SETUP</h1>
    </div>
    <div class="flex items-center justify-center mt-2">
        <h1 class="text-xl text-orange-800 font-bold">BASED FROM THE PREVIOUSLY ANSWERED QUESTIONS</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="flex justify-center items-center md:mt-14 mt-5">
            <div class="grid grid-cols-4 gap-12">
                @unless(count($finder) == 0)
                    @foreach ($finder as $product)
                        <div class="border border-black">
                            <a href="/user/filter-finder-specific/{{ $product->id }}">
                                <img id="" class="md:h-52 md:w-52 w-52 h-52" src="{{$product->image ? asset('storage/'.$product->image) : asset('images/logo.png') }}">
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="flex justify-center items-center">
                        <h1 class="flex justify-center items-center text-3xl text-orange-800 font-bold">No Products available</h1>
                    </div>
                @endunless
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>