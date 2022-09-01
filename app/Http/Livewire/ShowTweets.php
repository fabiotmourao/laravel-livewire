<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    protected $listeners = ['createTweet'];

    public $search;
    public $showinput = false;

    public function createTweet()
    {
        $this->toggle();
    }

    public function toggle()
    {
        $this->showinput = !$this->showinput;
    }

    public function render()
    {
        return view('livewire.show-tweets',[
            'tweets'=> Tweet::orderBy('id','desc')->paginate(3)
        ]);
    }
}
