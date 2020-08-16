<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-16 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                    <div class="font-bold text-xl mb-4">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="username">
                                    Username
                                </label>

                                <input id="username"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="username"
                                       value="{{ old('username') }}"
                                       required
                                       autocomplete="username">

                                @error('username')
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                           {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="name"
                                       class="block uppercase font-bold text-xs text-gray-700">
                                    Name
                                </label>

                                <input id="name"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-red-500 text-xs"
                                          role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="email">
                                    email
                                </label>

                                <input id="email"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="email">

                                @error('email')
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="">
                                    password
                                </label>

                                <input id="password"
                                       type="password"
                                       class="border border-gray-400 p-2 w-full"
                                       name="password"
                                       value="{{ old('password') }}"
                                       required
                                       autocomplete="password">

                                @error('password')
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        <div class="mb-4">
                            <label class="block uppercase font-bold text-xs text-gray-700"
                                   for="password_confirmation">
                                Confirm password
                            </label>

                            <input id="password_confirmation"
                                   class="border border-gray-400 p-2 w-full"
                                   name="password_confirmation"
                                   value="{{ old('password_confirmation') }}"
                                   type="password"
                                   required
                                   >

                            @error('password')
                                 <span class="text-red-500 text-xs mt-2"
                                  role="alert">
                                        {{ $message }}
                                 </span>
                            @enderror
                        </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
