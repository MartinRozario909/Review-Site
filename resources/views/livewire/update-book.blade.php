<form wire:submit.prevent="submit" class="flex items-start space-x-3">
    <div class="grow">
        <label for="title" class="sr-only">Book Title</label>
        <input type="text" id="title" wire:model.blur="form.title" placeholder="Book Title"
            class="w-full border-slate-300 rounded-lg" value="{{ $book->title }}">
        @error('form.title')
            <div class="mt-1 text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="grow">
        <label for="title" class="sr-only">Book Author</label>
        <input type="text" id="author" wire:model.blur="form.author" placeholder="Book Author"
            class="w-full border-slate-300 rounded-lg" value="{{ $book->author }}">
        @error('form.author')
            <div class="mt-1 text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg font-medium disabled:opacity-50">
        <span wire:loading.delay.long>
            Loading
        </span>
        <span wire:loading.remove.delay.long>
            Save
        </span>
    </button>
</form>
