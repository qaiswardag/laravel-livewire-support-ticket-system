<div class="mb-8">

    <form wire:submit.prevent="addComment"
          class="border-2 border-emerald-500 p-4 mt-8 mb-4 mx-2 rounded-xl">
        <div class="my-4">
            <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Enter new ticket
            </label>
            <input
                wire:model.lazy="newComment"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter new ticket"
                autocomplete="off">
            @error('newComment')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
            @enderror
        </div>
        <button
            type="submit"
            class="text-white bg-emerald-500 hover:bg-emerald-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Submit
        </button>
    </form>


    <div>
        @foreach($comments as $comment)
            <div class="border-2 border-red-500 p-4 my-8 mx-2 rounded-xl">
                <div class="text-right">
                    <span
                        wire:click="remove({{$comment->id}})"
                        class="text-xl cursor-pointer font-semibold">×</span>
                </div>
                <p class="mb-4 text-2xl">{{$comment->creator->name}}</p>
                <p class="mb-4 text-xl">{{$comment->body}}</p>
                <p class="mb-4 text-sm">{{$comment->created_at->diffForHumans()}}</p>
            </div>
        @endforeach
    </div>
</div>
