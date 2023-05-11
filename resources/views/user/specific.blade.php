<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Product | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <div class="flex justify-center items-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">{{ $products->name }}</h1>
    </div>
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <div class="md:grid md:grid-cols-2 gap-10">
            <div class="mt-10">
                <div class="flex justify-center items-center">
                    <img id="case_fan" class="md:h-80 md:w-80 w-52 h-52 border border-black p-5" src="{{$products->product_image ? asset('storage/'.$products->product_image) : asset('images/logo.png') }}">
                </div>
                <h1 class="mt-5 flex justify-center text-5xl text-black font-bold">{{ $products->name }}</h1>
                <h3 class="mt-5 flex justify-center text-4xl text-black lead">₱ {{ $products->price }}</h3>
                <a href="" class="mt-5 flex justify-center text-4xl text-black font-bold">
                    <ion-icon name="heart-outline"></ion-icon>
                    Add to Favorites
                </a>
            </div>
            <div class="p-10 flex justify-center items-center">
                <p class="text-4xl text-black font-light">{{ $products->desc }}</p>
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>