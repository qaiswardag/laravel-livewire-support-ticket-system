<div class="my-24 text-center py-12 border border-gray-500 rounded">
    <button
        wire:click="increment"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    +
    </button>
    <h1>{{$count}}</h1>
    <button
        wire:click="decrement"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        -
    </button>
</div>
