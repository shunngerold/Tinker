<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Profile | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <x-content class="">
        {{-- Image Profile --}}
        <div class="grid grid-rows-2 bg-gray-300 w-full h-64 border border-black">
            <div class="flex justify-center items-start">
                <img class="h-40 w-40 mt-5 border-2 border-orange-800 rounded-full" src="{{ asset('images/logo.png') }}">
            </div>
            <div class="flex justify-center items-center">
                <h3 class="text-2xl text-orange-800 font-bold mt-10">{{ auth()->user()->fname . " " . auth()->user()->mname . " " . auth()->user()->lname }}</h3>
            </div>
        </div>
        {{-- Personal Information --}}
        <div class="flex justify-center items-center">
            <h1 class="text-3xl text-black font-bold mt-10">Personal Information</h1>
        </div>
        <div class="md:grid md:grid-cols-2 gap-5 p-5">
            <div class="md:grid md:grid-cols-2 md:grid-rows-4 md:gap-2 px-20 md:py-10 py-5">
                <label class="md:text-md text-xl font-semibold" for="fname">First name :</label>
                <p name="fname">{{auth()->user()->fname}}</p>
                <label class="md:text-md text-xl font-semibold" for="mname">Middle name :</label>
                <p name="mname">{{auth()->user()->mname}}</p>
                <label class="md:text-md text-xl font-semibold" for="lname">Last name :</label>
                <p name="lname">{{auth()->user()->lname}}</p>
                <label class="md:text-md text-xl font-semibold" for="contact_number">Contact Number :</label>
                <p name="contact_number">{{auth()->user()->contact_number}}</p>
                <label class="md:text-md text-xl font-semibold" for="email">E-mail :</label>
                <p name="email">{{auth()->user()->email}}</p>
            </div>
            <div class="flex justify-center items-center">
                <div class="grid grid-rows-3 gap-5">
                    <a href="#" class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Check Orders</a>
                    <a href="{{ route('user.saved.build') }}" class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Show Saved Builds</a>
                    @if(auth()->user()->role == 1)
                        <a href="{{ route('admin.landing') }}" class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Open CMS</a>
                    @endif
                    <form action="{{ route('user.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>