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
        <div class="lg:grid lg:grid-cols-5 h-full p-10">
            {{-- Sidebar --}}
            @if ($request->category == "keyboard")
                @php
                    $title = "KEYBOARD"
                @endphp
                @include('partials.category_sidebars.sidebar_one')
            @elseif($request->category == "headset")
                @php
                    $title = "HEADSET"
                @endphp
                @include('partials.category_sidebars.sidebar_one')
            @elseif ($request->category == "cpu_cooler")
                @php
                    $title = "CPU COOLER"
                @endphp
                @include('partials.category_sidebars.sidebar_two')
            @elseif ($request->category == "power_supply")
                @php
                    $title = "POWER SUPPLY"
                @endphp
                @include('partials.category_sidebars.sidebar_three')
            @elseif ($request->category == "case")
                @php
                    $title = "CASE"
                @endphp
                @include('partials.category_sidebars.sidebar_four')
            @elseif ($request->category == "case_fan")
                @php
                    $title = "CASE FAN"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "storage")
                @php
                    $title = "STORAGE"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "memory")
                @php
                    $title = "MEMORY"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "monitor")
                @php
                    $title = "MONITOR"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "cpu")
                @php
                    $title = "CPU"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "moba")
                @php
                    $title = "MOTHERBOARD"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "gpu")
                @php
                    $title = "GRAPHICS CARD"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "processor")
                @php
                    $title = "PROCESSOR"
                @endphp
                @include('partials.category_sidebars.sidebar_five')
            @elseif ($request->category == "mouse")
                @php
                    $title = "MOUSE"
                @endphp
                @include('partials.category_sidebars.sidebar_six')
            @else
                @php
                    $title = "ALL PRODUCTS"
                @endphp
                @include('partials.category_sidebars.sidebar_two')
            @endif
            
            <div class="col-span-4 md:mt-0 mt-10">
                <div class="flex justify-center items-center">
                    <h1 class="md:text-5xl text-3xl text-orange-800 font-bold">{{ $title ?? False }}</h1>
                </div>
                <div class="py-10">
                    @unless(count($products) == 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 md:p-0 p-10 gap-4">
                            @foreach ($products as $product)
                                {{-- Pass the data to another file --}}
                                <x-product-template :product="$product" :request="$request" />
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