<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Product List | Tinker</title>
</head>
    <body class="flex flex-col h-screen justify-between">
        {{-- Navigator --}}
        @include('partials._navigator')
        
        {{-- Content --}}
        <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
            <div class="grid grid-cols-4 w-full h-full mt-10">
                {{-- SideBar --}}
                @include('partials._sidebar')
                {{-- Data Entry --}}
                <div class="col-span-3">
                    <h1 class="flex justify-start items-center w-full text-5xl text-orange-800 font-bold">Product List</h1>
                    
                        @unless(count($products) == 0)
                            @foreach($products as $product)
                                <div class="mt-5 flex justify-between items-center bg-gray-200 w-full py-5 p-20">
                                    <div class="text-2xl text-orange-800 font-bold">
                                        {{ $product->name }}
                                    </div>
                                    <div class="text-2xl text-orange-800 font-bold">
                                        {{ $product->category }}
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Edit</button>
                                        <form method="POST" action="/admin/product/{{$product->id}}">
                                            @csrf
                                            @method("DELETE")
                            
                                            <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Delete</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="flex justify-center items-center">
                                <h1 class="flex justify-center items-center text-3xl text-orange-800 font-bold">No Products available</h1>
                            </div>
                        @endunless
                    <div class="m-10 pt-4">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </x-content>

        {{-- Footer --}}
        @include('partials._footer')
    </body>
</html>