@props(['product','request'])

<div class="bg-white shadow p-4 border border-black group-hover:blur-sm hover:!blur-none group-hover:scale-[0.85] hover:!scale-100 duration-500">
    <div class="flex justify-center items-center ">
        @isset($request)
            @if ($request->build == "unit")
                <a href="/user/build/{{$product->id}}">
                    <img class="w-40 h-40" src="{{$product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo.png') }}">
                </a>
            @elseif($request->build == "full")   
                <a href="/user/build/{{$product->id}}/full">
                    <img class="w-40 h-40" src="{{$product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo.png') }}">
                </a>
            @else
                <a href="/user/specific-product/{{$product->id}}">
                    <img class="w-40 h-40" src="{{$product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo.png') }}">
                </a>
            @endif
        @else
            <a href="/user/specific-product/{{$product->id}}">
                <img class="w-40 h-40" src="{{$product->product_image ? asset('storage/'.$product->product_image) : asset('images/logo.png') }}">
            </a>
        @endisset
    </div>
    <h3 class="flex justify-center items-center text-2xl text-orange-800 font-bold">{{ $product->name }}</h3>
    <p class="flex justify-center items-center text-sm text-orange-800 lead mt-1">{{ $product->brand }}</p>
    <p class="flex justify-center items-center text-md text-orange-800 font-semibold mt-1">PHP {{ $product->price }}</p>
    <div class="duration-500 hidden group-hover:block hover:z-[-1]">
        <p class="flex justify-center items-center text-md text-orange-800 font-semibold mt-1">{{ $product->desc }}</p>
    </div>
</div>
