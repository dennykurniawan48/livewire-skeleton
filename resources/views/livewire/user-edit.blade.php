<div class="w-96 z-50 p-4 bg-white">
    <form wire:submit.prevent="update">
        <div class="flex justify-between items-center">
            <span class="text-xl font-bold">Edit data</span>
            <span class="p-2 font-bold text-2xl hover:cursor-pointer" wire:click="$dispatch('closeModal')">X</span>
        </div>
        <hr class="my-2"/>

        @if($error)
        <div class="flex flex-col space-y-2">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $error }}</span>
            </div>
        </div>
        @endif

        <div class="flex flex-col space-y-2">
            <label class="text-sm">
                Name:
            </label>
            <input class="outline-none border border-gray p-2" type="text" placeholder="Name" wire:model.blur="name"/>
        </div>
        <div>@error('name')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col space-y-2">
            <label class="text-sm">
                Password:
            </label>
            <input class="outline-none border border-gray p-2" type="text" placeholder="Password" wire:model.blur="password"/>
        </div>
        <div>@error('password')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex justify-around items-center mt-6">
            <button class="bg-red-600 text-white px-3 py-2" type="button" wire:click="$dispatch('closeModal')">
                Close
            </button>
            <button class="bg-green-600 text-white px-3 py-2" type="submit">
                Add
            </button>
        </div>

    </form>
</div>
