<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" wire:submit="save">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input type="email" wire:model="email" id="email" autocomplete="email" required class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    <div>
                        @error('email') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input type="password" wire:model="password" id="password" autocomplete="current-password" required class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    <div>
                        @error('password') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="cursor-pointer flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                <p class="text-black text-sm/6 mt-2 font-medium text-center">Don't have an account? <a href="{{route('register')}}" class="text-indigo-600">Register here</a></p>
            </div>
        </form>
    </div>
</div>
