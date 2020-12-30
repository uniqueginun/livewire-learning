<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Actions extends Component
{

    public Post $post;

    public function mount()
    {
        $this->fill([
            'post' => Post::first()
        ]);
    }

    public function like(Post $post, $times = 1)
    {
        $this->fill([
            'post' => $post
        ]);
        
        $post->addLikes($times);
    }

    public function listenForDropdown($value)
    {
        $this->dispatchBrowserEvent('listenForDropdown', [
            'value' => $value
        ]);
    }

    public function handleCheckboxStatus($value)
    {
        $this->dispatchBrowserEvent('listenForCheckbox', [
            'value' => $value
        ]);
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
