<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Products | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto h-full">
        <div class="flex items-center justify-center mt-16">
            @if ($request->brand == "acer")
                <h1 class="text-6xl text-orange-800 font-bold">ACER</h1>
            @elseif ($request->brand == "asus")
                <h1 class="text-6xl text-orange-800 font-bold">ASUS</h1>
            @elseif ($request->brand == "dell")
                <h1 class="text-6xl text-orange-800 font-bold">DELL</h1>
            @elseif ($request->brand == "hp")
                <h1 class="text-6xl text-orange-800 font-bold">HP</h1>
            @elseif ($request->brand == "intel")
                <h1 class="text-6xl text-orange-800 font-bold">INTEL</h1>
            @elseif ($request->brand == "lenovo")
                <h1 class="text-6xl text-orange-800 font-bold">LENOVO</h1>
            @elseif ($request->brand == "lg")
                <h1 class="text-6xl text-orange-800 font-bold">LG</h1>
            @elseif ($request->brand == "nvidia")
                <h1 class="text-6xl text-orange-800 font-bold">NVIDIA</h1>
            @elseif ($request->brand == "samsung")
                <h1 class="text-6xl text-orange-800 font-bold">SAMSUNG</h1>
            @else
                <h1 class="text-6xl text-orange-800 font-bold">ALL PRODUCTS</h1>
            @endif
        </div>
        <div class="lg:grid lg:grid-cols-5 h-full p-10">
            {{-- Sidebar --}}
            @include('partials._categories')

            <div class="col-span-4 md:mt-0 mt-10">
                <div class="flex justify-center items-center">
                    <h1 class="md:text-5xl text-3xl text-orange-800 font-bold">{{ $title ?? False }}</h1>
                </div>
                <div class="py-10">
                    @unless(count($products) == 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 md:p-0 p-10 gap-4">
                            @foreach ($products as $product)
                                {{-- Pass the data to another file --}}
                                <x-product-template :product="$product" />
                            @endforeach
                        </div>
                    @else
                        <div class="flex justify-center items-center">
                            <h1 class="flex justify-center items-center text-3xl text-orange-800 font-bold">No Products available</h1>
                        </div>
                    @endunless
                </div>
            </div>
        </div>
    </x-content>

    <div class="m-10 pt-4">
        {{$products->links()}}
    </div>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>