<?php

namespace App\Livewire;
use App\Models\Poll;
use APP\Models\Option;
use App\Models\Vote;
use Livewire\Component;

class Polls extends Component
{
    public function render()
    {
        $poLLs=poll::with("options.votes")->latest()->get();
        return view('livewire.poll' , ["polls"=> $poLLs]);
    }
    public function vote( option $option ){
       
        $option->votes()->create();
    }
}
