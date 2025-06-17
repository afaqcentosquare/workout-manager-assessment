<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto"
             src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
             alt="Your Company"/>
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up in to your
            account</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" wire:submit="save">
            <div>
                <label for="name" class="block text-sm/6 font-medium text-gray-900">Full Name</label>
                <div class="mt-2">
                    <input type="text" wire:model="name" id="name"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    <div>
                        @error('name') <span
                            class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input type="email" wire:model="email" id="email" autocomplete="email"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    @error('email') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input type="password" wire:model="password" id="password" autocomplete="current-password"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    @error('password') <span
                        class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <button type="submit"
                        class="cursor-pointer flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Sign up
                </button>
                <p class="text-black text-sm/6 mt-2 font-medium text-center">Already have an account?
                    <a href="{{route('login')}}" class="text-indigo-600">Login here</a></p>
            </div>
        </form>
    </div>
</div>
