<div>
    <div>
        <div class="h-[100vh] p-4" data-theme="{{ $theme }}">
            <form wire:submit.prevent="register">
                <label for="name">name</label>
                <input id="name" type="text" wire:model.lazy="name"> <br>
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror

                <label for="email">email</label>
                <input id="email" type="email" wire:model.lazy="email"> <br>
                @error('email')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror

                <label for="password">password</label>
                <input id="password" type="password" wire:model.lazy="password"> <br>
                @error('password')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror

                <button>登録する</button>
            </form>

            <div class="label">
                <span class="label-text">Pick the THEME</span>
            </div>
            <select class="select select-bordered w-full max-w-xs" wire:model.change="theme">
                <option disabled>Select a theme...</option>
                @foreach (['light', 'dark', 'cupcake', 'bumblebee', 'emerald', 'corporate', 'synthwave', 'retro', 'cyberpunk', 'valentine', 'halloween', 'garden', 'forest', 'aqua', 'lofi', 'pastel', 'fantasy', 'wireframe', 'black', 'luxury', 'dracula', 'cmyk', 'autumn', 'business', 'acid', 'lemonade', 'night', 'coffee', 'winter', 'dim', 'nord', 'sunset'] as $themeLabel)
                    <option value="{{ $themeLabel }}">{{ $themeLabel }}</option>
                @endforeach
            </select>
            <div class="p-4">Buttons</div>
            <button class="btn">Button</button>
            <button class="btn btn-neutral">Neutral</button>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-secondary">Secondary</button>
            <button class="btn btn-accent">Accent</button>
            <button class="btn btn-ghost">Ghost</button>
            <button class="btn btn-link">Link</button>
            <button class="btn btn-info">Info</button>
            <button class="btn btn-success">Success</button>
            <button class="btn btn-warning">Warning</button>
            <button class="btn btn-error">Error</button>
        </div>
    </div>
</div>
