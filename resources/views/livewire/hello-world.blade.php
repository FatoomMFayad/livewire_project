<div>
    <h1>Hello From Livewire Component</h1>
    <input wire:model="title" type="text" name="title" />
    <textarea wire:model="body"></textarea>
    <input type="checkbox" wire:model="active"/>
    <select wire:model="country">
        <option>UK</option>
        <option>PS</option>
        <option>US</option>
    </select>
    <p>{{$title}}</p>
    <p>{{ $body }}</p>
    @if($active)<p>Active</p>@endif
    <p>{{ $country }}</p>
    <p>My Name is {{ $name }}</p>
 </div>
