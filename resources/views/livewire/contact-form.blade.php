<div>
    <form action="/contact"><p>{{$name}}</p>
        <div><label for="name">Name</label><input wire:model.live="name" id="name" name="name" type="text"></div>
        <div><label for="email">Email</label><input wire:model="email" id="email" name="email" type="text"></div>
        <div><label for="phone">Phone</label><input id="phone" name="phone" wire:model="phone" type="text"></div>
        <div><label for="message">Message</label><input id="message" name="message" wire:model="message" type="text">
        </div>
    </form>
</div>
