<div class="">

    <livewire:counter title="Counter" />

    <form action="/contact" wire:submit="submitForm">
        <div><label for="name"></label>
            <input class="border rounded border-gray-500 px-1 py-0.5 mb-2" wire:model.live="name" id="name" name="name"
                   type="text" placeholder="name">
            @error('name')
            <span class="text-red-600 ml-1.5">{{$message}}</span>
            @enderror
        </div>
        <div><label for="email"></label>
            <input class="border rounded border-gray-500 px-1 py-0.5 mb-2" wire:model.live="email" id="email" name="email" type="text" placeholder="email">
            @error('email')
            <span class="text-red-600 ml-1.5">{{$message}}</span>
            @enderror
        </div>
        <div><label for="phone"></label>
            <input class="border rounded border-gray-500 px-1 py-0.5 mb-2" id="phone" name="phone" wire:model.live="phone" type="text" placeholder="phone">
            @error('phone')
            <span class="text-red-600 ml-1.5">{{$message}}</span>
            @enderror
        </div>
        <div><label for="message"></label>
            <input class="border rounded border-gray-500 px-1 py-0.5 mb-2" id="message" name="message" wire:model.live="message" type="text" placeholder="message">
            @error('message')
            <span class="text-red-600 ml-1.5">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white p-2 border rounded">Submit</button>
    </form>

    @if(session()->has('success_message'))
        <p>{{session('success_message')}}</p>
   @endif
</div>
