<div class="my-2.5">
    <h1 class="font-bold text-3xl">{{$title}}</h1>

    <h1>{{$counter}}</h1>
    <button wire:click="increment" class="bg-green-800 rounded text-white p-2">Plus</button>
    <button wire:click="decrement" class="bg-blue-800 rounded text-white p-2">Minus</button>
</div>
