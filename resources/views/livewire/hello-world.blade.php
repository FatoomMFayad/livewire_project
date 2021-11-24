<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>C U</option>
    </select>
    {{$greeting}} {{ $name }}@if($loud)!@endif
 </div>
