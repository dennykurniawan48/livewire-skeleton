<div class="relative px-4 my-8">
    <div class="w-full flex justify-between items-center">
        <button class="bg-green-600 px-3 py-2 text-white" wire:click="$dispatch('openModal', {component: 'user-add'})">+ Add User</button>
        <input type="text" placeholder="Search" class="px-3 py-2 outline-none border border-b-slate-300" wire:model="search"/>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-4"  wire:poll="refresh">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4 space-x-6">
                    <button class="bg-yellow-400 text-white  px-2 py-1" wire:click="$dispatch('openModal', { component: 'user-edit', arguments: { id: {{ $user->id }} }})">Edit</button>
                    <button class="bg-red-400 text-white px-2 py-1" wire:click="$dispatch('openModal', { component: 'user-delete', arguments: { id: {{ $user->id }} }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
