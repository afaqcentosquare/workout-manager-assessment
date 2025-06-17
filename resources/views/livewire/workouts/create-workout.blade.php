<div class="p-8">
    <div class="overflow-x-auto">
        <h1 class="text-black text-2xl font-semibold mb-4">Create Workout</h1>
        <form class="space-y-6" wire:submit="save">
            <div>
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                    <input type="text" wire:model="title" id="title"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    <div>
                        @error('title') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea type="text" wire:model="description" id="description"
                              class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </textarea>
                    <div>
                        @error('description') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="trainer" class="block text-sm/6 font-medium text-gray-900">Trainer</label>
                <div class="mt-2">
                    <input type="text" wire:model="trainer" id="trainer"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    <div>
                        @error('trainer') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="slots" class="block text-sm/6 font-medium text-gray-900">Slots</label>
                <div class="mt-2">
                    <input type="number" wire:model="slots" id="slots"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    <div>
                        @error('slots') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="date" class="block text-sm/6 font-medium text-gray-900">Date</label>
                <div class="mt-2">
                    <input type="datetime-local" wire:model="date" id="date"
                           class="block border border-gray-200 w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                    <div>
                        @error('date') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <input id="isActive" type="checkbox" wire:model="is_active"
                       class="w-4 h-4 mr-3 focus:ring-1 focus:ring-offset-slate-200 focus:ring-offset-4 focus:ring-[#007bff]" />
                <label for="isActive" class="font-medium text-gray-900 text-sm">Is Active</label>
                <div>
                    @error('is_active') <span class="mt-2 text-xs font-medium text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                        class="cursor-pointer flex w-fit rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
