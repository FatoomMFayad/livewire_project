<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    Hello {{ $name }}@if($loud)!@endif
 </div>
