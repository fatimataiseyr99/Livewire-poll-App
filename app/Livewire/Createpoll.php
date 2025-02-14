<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Poll;
class Createpoll extends Component
{
    public $title;
    public $options=["first"];
    protected $rules=[
        'title' => 'required|min:3|max:255',
        'options' => 'required|array|min:1|max:10',
        'options.*' => 'required|min:1|max:255'

    ];
    protected $message=[
         'options.*' => 'The option can\'t be empty.'
    ];
    
   
    public function render()
    {
        return view('livewire.createpoll');
    }
   public function addOption(){
    $this->options[]="";
   }
   public function removeOption($index){
   unset( $this->options[$index]);
   $this->options = array_values($this->options);
   
   
   }
   public function createPoll(){
    $this->validate();
     $poll= Poll::create(
        [ "title"=>$this->title]
    );
    foreach($this->options as $optionName){
        $poll->options()->create(
            [ "name"=>$optionName]
        );
    }

   }
}
