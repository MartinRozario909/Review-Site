<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 space-y-4">
        @if ($editing)
            <livewire:update-book :book="$book" />
        @else
            <div>
                <h2 class="text-lg font-medium leading-snug">{{ $book->title }}</h2>
                <div>{{ $book->author }}</div>
            </div>
        @endif
        <div>
            <label for="notes" class="sr-only">Notes</label>
            <textarea wire:model.live.debounce.500ms="form.notes" id="notes" rows="4"
                class="w-full border-slate-300 rounded-lg" placeholder="Your notes for this book"></textarea>
        </div>
        <ul class="flex items-center space-x-2">
            <li>
                <button wire:click="$toggle('editing')"
                    class="text-blue-500 rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                    Edit
                </button>
            </li>
            <li>
                <button x-data
                    x-on:click="
                        if(window.confirm('Are you sure?')){
                        $wire.$parent.deleteBook({{ $book->id }})
                        }
                    "
                    class="text-blue-500 rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                    Delete
                </button>
                {{-- <button wire:click="$parent.deleteBook({{ $book->id }})"
                    class="text-blue-500 rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                    Delete
                </button> --}}
            </li>
        </ul>
    </div>
</div>
