{{-- FOR BRANDS --}}
<div class="">
    <div class="bg-pink-200 h-auto md:w-56 w-auto border-4 border-pink-300 rounded-3xl py-5">
        <div class="flex justify-center items-center">
            <form class="grid md:grid-rows-10 gap-2" action="{{ route('user.product.brands') }}" method="GET">
                <div class="flex justify-center items-center gap-2">
                    <h1 class="text-3xl text-orange-800 font-bold">Categories</h1>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer mt-8">
                    <input class="w-5 h-5" type="radio" name="category" value="processor">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">CPU / Processor</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="cpu_cooler">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">CPU Cooler</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="moba">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Motherboard</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="memory">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Memory</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="gpu">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Graphics Card</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="storage">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Storage</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="power_supply">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Power Supply</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="case">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Case</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="case_fan">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Case Fan</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="headset">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Headphones</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="keyboard">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Keyboard</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="mouse">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Mouse</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="category" value="monitor">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Monitor</label>
                </div>
                <div class="">
                    <input type="hidden" name="brand" value="{{ $request->brand }}">
                </div>
                <div class="flex items-center justify-center pt-8">
                    <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>