@props(['usersCount'])
<div class="grid grid-cols-4 gap-10 mt-6">
    <div class="bg-white shadow-md rounded-lg px-4 py-6">
        <h4 class="text-gray-500 font-medium">Users</h4>
        <select name="selectedDays" id="selectedDays" wire:change="updateStats" wire:model="selectedDays" class="border bg-gray-100 right-0">
            <option value="30">30</option>
            <option value="60">60</option>
            <option value="90">90</option>
        </select>
        <div class="text-3xl font-bold mt-4">{{ $usersCount }}</div>
    </div>
</div>
