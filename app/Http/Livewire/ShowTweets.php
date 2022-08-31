<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    protected $listeners = ['createTweet'];

    public $tweets;

    public function mount()
    {
        $this->tweets = Tweet::get();
    }

    public function createTweet($id)
    {
        dd($id);
        $this->tweets = Tweet::get();
    }

    public function render()
    {
        return view('livewire.show-tweets');
    }
}
