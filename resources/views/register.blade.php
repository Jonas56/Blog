<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl p-6 ">

           <h1 class="text-center font-bold text-xl">Register!</h1>

            <form action="/register" method="POST" class="mt-10">

                @csrf

                <div class="mb-6">
                    <label for="username" class="bloock mb-2 upercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" value="{{ old('username') }}">
                    
                    @error('username')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                
                </div>
                
                <div class="mb-6">
                    <label for="name" class="bloock mb-2 upercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{ old('name') }}">
                    
                    @error('name')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                
                
                <div class="mb-6">
                    <label for="email" class="bloock mb-2 upercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" value="{{ old('email') }}">
                    
                    @error('email')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>


                <div class="mb-6">
                    <label for="password" class="bloock mb-2 upercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" value="">
                    
                    @error('password')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                {{-- <div class="mb-6">
                    <label for="conf-pass" class="bloock mb-2 upercase font-bold text-xs text-gray-700">Confirm password</label>
                    <input type="password" name="conf-pass" id="conf-pass" class="border border-gray-400 p-2 w-full">
                </div> --}}

                <div class="mb-6">
                    <input type="submit" name="submit" id="submit" class="text-white bg-blue-400 py-2 px-4 hover:bg-blue-500 w-full cursor-pointer" value="Register">
                </div>
            </form>

        </main>

    </section>
</x-layout>