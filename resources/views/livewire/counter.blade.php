<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <span>{{ $name }}</span> <br>
    {{-- <input type="text" wire:model.debounce.1000ms="name"> --}}
    {{-- <input type="text" wire:model.defer="name"> --}}
    <input type="text" wire:model.lazy="name"> <br>

    <button wire:mouseover="mouseOver">ボタン</button>
</div>
