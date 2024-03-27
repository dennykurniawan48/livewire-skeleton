<div class="w-96 z-50 p-4 bg-white">
    <form wire:submit.prevent="save">
        <div class="flex justify-between items-center">
            <span class="text-xl font-bold">Add data</span>
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
            <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-2">
            <label class="text-sm">
                Email:
            </label>
            <input class="outline-none border border-gray p-2" type="text" placeholder="Email" wire:model.blur="email"/>
        </div>
        <div>@error('email')
            <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col space-y-2">
            <label class="text-sm">
                Password:
            </label>
            <input class="outline-none border border-gray p-2" type="text" placeholder="Password" wire:model="password"/>
        </div>
        <div>@error('password')
            <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="w-full flex justify-around items-center mt-6">
            <button type="button" class="bg-red-600 text-white px-3 py-2" wire:click="$dispatch('closeModal')" >
                Close
            </button>
            <button type="submit" class="bg-green-600 text-white px-3 py-2">
                Add
            </button>
        </div>

    </form>
</div>
