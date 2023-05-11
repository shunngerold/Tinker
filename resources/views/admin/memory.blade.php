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
        <form action="{{ route('admin.memory.entry') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 w-full h-full mt-10">
                {{-- SideBar --}}
                @include('partials._sidebar')
                {{-- Data Entry --}}
                <div class="">
                    <div class="flex justify-start items-center">
                        <h1 class="text-5xl text-orange-800 font-bold">Memory</h1>
                    </div>
                    <div class="grid grid-rows-7 gap-5">
                        <div class="mt-6">
                            <label class="text-lg text-orange-800 font-bold" for="brand">Brand</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="brand" id="brand" value="{{ old('brand') }}">
                            @error('brand')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="name">Name</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="name" id="name" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="memory_size">Memory Size</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="memory_size" id="memory_size" value="{{ old('memory_size') }}">
                            @error('memory_size')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="ram_type">RAM Type</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="ram_type" id="ram_type" value="{{ old('ram_type') }}">
                            @error('ram_type')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="memory_speed">Speed</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="memory_speed" id="memory_speed" value="{{ old('memory_speed') }}">
                            @error('memory_speed')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="physical_size">Physical Size</label>
                            <input class="w-full h-auto border border-black mt-2" type="text" name="physical_size" id="physical_size" value="{{ old('physical_size') }}">
                            @error('physical_size')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg text-orange-800 font-bold" for="desc">Description</label>
                            <input class="w-full h-32 border border-black mt-2" type="text" name="desc" id="desc" value="{{ old('desc') }}">
                            @error('desc')
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
                                <input id="file-input" name="product_image" type="file" class="form-input mt-5">
                            </label>
                            @error('product_image')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="mt-10">
                            <label for="quantity" class="text-lg text-orange-800 font-bold flex justify-center items-center">Quantity</label>
                            <input class="w-full h-auto border border-black mt-2" type="number" name="quantity" id="quantity" value="{{ old('quantity') }}">
                            @error('quantity')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="mt-8">
                            <label for="price" class="text-lg text-orange-800 font-bold flex justify-center items-center">Price</label>
                            <input class="w-full h-auto border border-black mt-2" type="number" name="price" id="price" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="mt-8">
                            <input class="w-full h-auto border border-black mt-2" type="hidden" name="category" id="category" value="memory">
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