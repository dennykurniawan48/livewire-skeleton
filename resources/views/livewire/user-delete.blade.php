<div class="bg-white p-2 w-80 sm:w-80 z-50">
    <form wire:submit.prevent="delete">
    <div class="flex justify-between items-center">
            <span class="text-xl font-bold">Delete data</span>
            <span class="p-2 font-bold text-2xl hover:cursor-pointer" wire:click="$dispatch('closeModal')">X</span>
    </div>
    <hr class="my-2"/>
    <div>
        <span>Apakah anda yakin untuk menghapus data?</span>
    </div>
    <hr class="my-2"/>
    <div class="mt-3 flex justify-center space-x-12 text-white">
        <span class="bg-red-500 p-2 hover:cursor-pointer" wire:click="$dispatch('closeModal')">Cancel</span>
        <button type="submit" class="bg-green-500 p-2">Delete</button>
    </div>
    </form>
</div>
