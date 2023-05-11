<div class="ml-14">
    <div class="bg-pink-400 h-full w-56 border-4 border-pink-500 rounded-3xl p-5">
        <div class="flex justify-center items-center">
            <div class="grid grid-rows-14 gap-4">
                <div class="flex justify-center items-center gap-2 cursor-pointer cursor-pointer">
                    <a href="{{ route('admin.landing') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Dashboard</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer cursor-pointer">
                    <a href="{{ route('admin.products') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Product List</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer cursor-pointer">
                    <a href="{{ route('admin.processor') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Processor</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.cpu.cooler') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">CPU Cooler</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.moba') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Motherboard</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.memory') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Memory</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.gpu') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Graphics Card</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.store') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Storage</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.power.supply') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Power Supply</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.case') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Case</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.case.fan') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Case Fan</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.monitor') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Monitor</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.keyboard') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Keyboard</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.headset') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Headset</label>
                    </a>
                </div>
                <div class="flex justify-center items-center gap-2 cursor-pointer">
                    <a href="{{ route('admin.mouse') }}">
                        <label for="category" class="cursor-pointer text-xl font-semibold">Mouse</label>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<x-flash_message />