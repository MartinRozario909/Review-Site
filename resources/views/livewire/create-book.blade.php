<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <form wire:submit.prevent="submitForm" class="flex items-start space-x-3">
            <div class="grow">
                <label for="title" class="sr-only">Book Title</label>
                <input type="text" id="title" wire:model.blur="bookForm.title" placeholder="Book Title"
                    class="w-full border-slate-300 rounded-lg">
                @error('bookForm.title')
                    <div class="mt-1 text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="grow">
                <label for="title" class="sr-only">Book Author</label>
                <input type="text" id="author" wire:model.blur="bookForm.author" placeholder="Book Author"
                    class="w-full border-slate-300 rounded-lg">
                @error('bookForm.author')
                    <div class="mt-1 text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg font-medium disabled:opacity-50">
                <span wire:loading.delay.long>
                    Loading
                </span>
                <span wire:loading.remove.delay.long>
                    Add Book
                </span>
            </button>
        </form>
        {{-- <div wire:loading.delay.long>
                Loading
            </div> --}}
    </div>
</div>
