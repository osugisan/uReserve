<div>
    <form wire:submit.prevent="register">
        <label for="name">name</label>
        <input id="name" type="text" wire:model.defer="name"> <br>
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label for="email">email</label>
        <input id="email" type="email" wire:model.defer="email"> <br>
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">password</label>
        <input id="password" type="password" wire:model.defer="password"> <br>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        
        <button>登録する</button>
    </form>
</div>
