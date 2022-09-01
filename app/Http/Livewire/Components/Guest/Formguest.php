<?php

namespace App\Http\Livewire\Components\Guest;

use App\Models\Tweet;
use Livewire\Component;

class Formguest extends Component
{
    public $content;

    protected $rules = [
        'content'=> 'required|min:3|max:255',
    ];

    public function render()
    {
        return view('livewire.components.guest.formguest');
    }

    public function create()
    {
        $this->validate();

        $id = Tweet::create([
            'content'=> $this->content,
            'user_id'=> 8
        ]);

        $this->emit('createTweet',$id);

        $this->reset('content');
    }
}
