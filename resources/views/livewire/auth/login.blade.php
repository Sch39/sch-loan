<!-- login -->
<div class="bg-[#F9FAFB] flex items-center mt-5">
    <div class="h-max mx-auto flex flex-col items-center">
        <img class="h-[40px] w-[40px] mb-5" src="{{ asset('icon.png') }}" alt="">
        <h1 class="text-xl font-bold text-center pb-5">Sign In to Your Account</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            {{-- @method(POST) --}}
            <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">


                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="email">Email</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2"
                        type="email" name="email" placeholder="user@sch39.dev">
                </div>

                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="password">Password</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2"
                        type="password" name="password" placeholder="******">
                </div>

                <div class="flex">
                    <div class="w-1/2">
                        <input type="checkbox" name="remeberMe">
                        <label for="remeberMe">Remeber me</label>
                    </div>
                    {{-- <div class="w-1/2">
                        <a class="font-bold text-blue-600" href="">Lupa password ?</a>
                    </div> --}}
                </div>

                <div>
                    <input
                        class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]"
                        type="submit" value="Login">
                </div>

            </div>
        </form>
    </div>
</div>