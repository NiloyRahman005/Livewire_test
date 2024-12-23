<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public $title;
    public $content;
    public $posts; // To hold all posts

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function mount()
    {
        // Fetch all posts initially
        $this->posts = Post::all();
    }

    public function createPost()
    {
        $this->validate();

        // Create a new post in the database
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Reset form fields
        $this->reset(['title', 'content']);

        // Refresh the posts list
        $this->posts = Post::all();

        // Display a success message
        session()->flash('message', 'Post created successfully!');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
