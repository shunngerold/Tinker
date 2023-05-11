{{-- FOR MOUSE --}}
<div>
    <div class="bg-pink-200 h-auto md:w-56 w-auto border-4 border-pink-300 rounded-3xl py-5">
        <div class="flex justify-center items-center">
            <form class="grid md:grid-rows-10 gap-2" action="{{ route('user.products') }}" method="GET">
                <div class="flex justify-center items-center gap-2">
                    <h1 class="text-3xl text-orange-800 font-bold">Brands</h1>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer mt-8">
                    <input class="w-5 h-5" type="radio" name="brand" value="logitech">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Logitech</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="brand" value="rog">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">ROG</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="brand" value="steelseries">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Steelseries</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="brand" value="razer">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Razer</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="brand" value="hp">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">HP</label>
                </div>
                <div class="flex justify-start items-center gap-2 cursor-pointer">
                    <input class="w-5 h-5" type="radio" name="brand" value="microsoft">
                    <label for="category" class="cursor-pointer text-xl font-semibold uppercase">Microsoft</label>
                </div>
                <div class="">
                    <input type="hidden" name="category" value="{{ $request->category }}">
                </div>
                <div class="flex items-center justify-center pt-8">
                    <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>