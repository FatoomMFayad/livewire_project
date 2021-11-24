<div>
    @foreach($names as $name)
        @livewire('say-hi', ['name' => $name], key($name))
    @endforeach
</div>
