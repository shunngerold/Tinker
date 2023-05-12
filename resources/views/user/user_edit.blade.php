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
            <form action="/user/{{ $user->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="md:grid md:grid-cols-2 md:grid-rows-8 md:gap-2 px-20 md:py-10 py-5">
                    <label class="md:text-md text-xl font-semibold" for="fname">First name :</label>
                    <input class="border border-black" type="text" name="fname" value="{{ $user->fname }}" placeholder="Input First name"/>
                    <label class="md:text-md text-xl font-semibold" for="mname">Middle name :</label>
                    <input class="border border-black" type="text" name="mname" value="{{ $user->mname }}" placeholder="Input Middle Name"/>
                    <label class="md:text-md text-xl font-semibold" for="lname">Last name :</label>
                    <input class="border border-black" type="text" name="lname" value="{{ $user->lname }}" placeholder="Input Last Name"/>
                    <label class="md:text-md text-xl font-semibold" for="contact_number">Contact Number :</label>
                    <input class="border border-black" type="text" name="contact_number" value="{{ $user->contact_number }}" placeholder="Input Contact Number"/>
                    <label class="md:text-md text-xl font-semibold" for="email">E-mail :</label>
                    <input class="border border-black" type="text" name="email" value="{{ $user->email }}" placeholder="Input E-mail"/>
                    <label class="md:text-md text-xl font-semibold" for="password">Password :</label>
                    <input class="border border-black" type="password" name="password" value="{{ $user->password }} placeholder="Input Password"/>
                    <label class="md:text-md text-xl font-semibold" for="password_confirmation">Confirm Password :</label>
                    <input class="border border-black" type="password" name="password_confirmation" value="{{ $user->password }} placeholder="Confirm Password"/>
                    <div class="mt-5 flex justify-start items-center">
                        <input class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600" type="submit" value="Update Profile">
                    </div>
                </div>
            </form>
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-2 grid-rows-3 gap-5">
                    <a href="#" class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Check Orders</a>
                    <a href="/user/{{ auth()->user()->id }}/edit" class="flex justify-center bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">Edit Profile</a>
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

    <x-flash_message />

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>