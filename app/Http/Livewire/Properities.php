<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properities extends Component
{

    public $name = "hassan malik";

    public function mount()
    {
        $this->reset('name');

        $this->fill([
            'name' =>  'osman mohammed osman'
        ]);
    }

    public function resetName()
    {

    }

    /***
     * @return int
     * computed properties
     * call $this->len in view
     */
    public function getLenProperty()
    {
        return strlen($this->name);
    }

    public function render()
    {
        return view('livewire.properities');
    }
}
