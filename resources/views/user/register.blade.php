<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Register | Tinker</title>
</head>
<body>
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <div class="flex items-center justify-center mt-16">
        <h1 class="text-5xl text-orange-800 font-bold">REGISTRATION</h1>
    </div>
    <div id="labelChoose" class="flex items-center justify-center mt-5 hidden">
        <h3 class="text-slate-700 text-xl font-bold">CHOOSE ONE OF THE FOLLOWING :</h3>
    </div>
    <x-content class="md:flex md:items-center md:justify-center md:py-14 md:px-20 py-auto px-auto">
        <form id="form" method="POST" action="{{ route('user.registration') }}" class="grid grid-rows-2 p-5 gap-10 md:w-[65rem] w-auto">
            @csrf

            <div id="div_one" class="grid grid-cols-2 gap-10 border-b-2 border-slate-600 pb-14">
                {{-- Info Group 1 --}}
                <div class="grid grid-cols-1 grid-rows-3 gap-5">
                    {{-- First name --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">First Name:</label>
                        <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="fname">
                        @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- Middle name --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Middle Name:</label>
                        <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="mname">
                        @error('mname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- Last name --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Last Name:</label>
                        <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="lname">
                        @error('lname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                {{-- Info Group 2 --}}
                <div class="grid grid-cols-1 grid-rows-3 gap-5">
                    {{-- Age --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Age:</label>
                        <input type="number" class="w-full border border-slate-600 p-1 mt-5" name="age">
                        @error('age')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- Contact Number --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Contact Number:</label>
                        <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="contact_number">
                        @error('contact_number')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div id="div_two" class="grid grid-cols-2 gap-10">
                {{-- Info Group 3 --}}
                <div class="grid grid-cols-1 grid-rows-3 gap-5">
                    {{-- Email Address --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">E-Mail Address:</label>
                        <input type="text" class="w-full border border-slate-600 p-1 mt-5" name="email">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                {{-- Info Group 4 --}}
                <div class="grid grid-cols-1 grid-rows-3 gap-5">
                    {{-- Password --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Password:</label>
                        <input type="password" class="w-full border border-slate-600 p-1 mt-5" name="password">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- Confirm Password --}}
                    <div class="">
                        <label class="text-2xl text-orange-800 font-bold mt-5">Confirm Password:</label>
                        <input type="password" class="w-full border border-slate-600 p-1 mt-5" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Image Selection --}}
            <section id="imageChoose" class="hidden md:mt-5 z-40">
                <div class="md:flex md:justify-center md:items-center md:gap-20">
                    <div>
                        <div class="flex justify-center items-center">
                            <input type="radio" class="h-6 w-6 mr-5 cursor-pointer" name="experience" value="No Experience">
                            <h3 id="no_exp" class="text-orange-800 text-3xl font-bold flex justify-center">NO EXPERIENCE :</h3>
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/exp1.png') }}" alt="your-image-alt-text" class="md:h-80 h-auto md:w-80 w-auto mt-5 border-2 border-black">
                        </div>
                    </div>
                    <div class="flex justify-center items-center md:my-0 my-10">
                        <p class="text-2xl font-bold text-slate-700">OR</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center">
                            <input type="radio" class="h-6 w-6 mr-5 cursor-pointer" name="experience" value="With Experience">
                            <h3 class="text-orange-800 text-3xl font-bold flex justify-center">WITH EXPERIENCE :</h3>
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/exp2.png') }}" alt="your-image-alt-text" class="md:h-80 h-auto md:w-80 w-auto mt-5 border-2 border-black">
                        </div>
                    </div>
                </div>
            </section>

            {{-- Button Next --}}
            <div id="buttonCont" class="flex justify-center items-start w-full h-24">
                <div style="user-select: none;" onclick="Next(this)" id="next" class="next cursor-pointer bg-orange-300 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">NEXT</div>
                <button id="submit" type="submit" class="hidden bg-orange-300 ml-5 px-11 py-2 text-lg text-orange-800 font-bold border border-slate-600">SIGN-UP</button>
            </div>
        </form>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>

<script>
    function Next(e) {
        // Original Page
        const buttonCont = document.getElementById('buttonCont')
        const element = document.getElementById('next')
        const element2 = document.getElementById('div_one')
        const element3 = document.getElementById('div_two')
        const form = document.getElementById('form')

        // By Next
        let labelChoose = document.getElementById('labelChoose')
        let imageChoose = document.getElementById('imageChoose')
        let submit = document.getElementById('submit')

        e.next === 'back' ? 
            (
                e.next = "next", 
                element.innerHTML = 'NEXT', 
                form.classList.remove('h-[42rem]'),
                buttonCont.classList.remove('md:items-end'),
                buttonCont.classList.remove('mt-14'),
                buttonCont.classList.add('md:items-start'),
                element2.classList.remove('hidden'), 
                element3.classList.remove('hidden'),
                labelChoose.classList.add('hidden'),
                imageChoose.classList.add('hidden'),
                submit.classList.add('hidden')
            ): 
            (
                e.next = "back", 
                element.innerHTML = 'BACK', 
                form.classList.add('h-[42rem]'),
                buttonCont.classList.add('md:items-end'),
                buttonCont.classList.add('mt-14'),
                buttonCont.classList.remove('md:items-start'),
                element2.classList.add('hidden'), 
                element3.classList.add('hidden'),
                labelChoose.classList.remove('hidden'),
                imageChoose.classList.remove('hidden'),
                submit.classList.remove('hidden')
            )
    }
    
</script>
</html>