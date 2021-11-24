<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>C U</option>
    </select>

    {{implode(', ', $greeting)}} {{ $name }}@if($loud)!@endif

    <button wire:click="resetName">Reset Name</button>
</div>
