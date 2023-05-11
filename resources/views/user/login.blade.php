<!DOCTYPE html>
<html lang="en">
    <head>
        <x-head_links />
        <title>Login | Tinker</title>
    </head>
    <body>
        {{-- Navigator --}}
        @include('partials._navigator')

        {{-- Content --}}
        <x-content class="md:flex md:items-center md:justify-center md:py-14 md:px-20 py-auto px-auto">
            <form method="POST" action="{{ route('user.authenticate') }}" class="grid grid-cols-1 grid-rows-3 gap-4 p-5 md:w-[30rem] w-auto">
                @csrf

                <h1 class="text-5xl text-orange-800 font-bold">Login</h1>
                <div class="">
                    <label class="text-2xl text-orange-800 font-bold mt-5">E-Mail Address:</label>
                    <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="email">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <label class="text-2xl text-orange-800 font-bold mt-5">Password:</label>
                    <input type="password" class="w-full border border-slate-600 p-1 mt-5" name="password">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="grid grid-cols-1 grid-rows-2 gap-3 text-slate-600 text-lg italic underline">
                        <a href="#">Forgot Password?</a>
                        <a href="{{ route('user.register') }}">Create Account</a>
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Login</button>
                    </div>
                </div>
            </form>
        </x-content>

        {{-- Footer --}}
        @include('partials._footer')
    </body>
</html>