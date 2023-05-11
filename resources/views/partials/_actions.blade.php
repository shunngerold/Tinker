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
            @isset($request)
                <input class="w-full h-auto border border-black mt-2" type="text" name="category" id="category" value="processor">
            @endisset
        </div>
    </div>
</div>