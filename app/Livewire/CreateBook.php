<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\BookForm;

class CreateBook extends Component
{
    public BookForm $bookForm;

    public function submitForm()
    {
        $this->bookForm->validate();
        //sleep(2);
        $book = $this->bookForm->create();

        $this->dispatch('book.created', $book->id);

        $this->dispatch('alert', [
            'body' => 'Book "' . $book->title . '"was created.'
        ]);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
