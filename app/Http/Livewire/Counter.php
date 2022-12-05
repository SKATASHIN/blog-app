<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public $name = 'shiro';
    private $hobby = '';

    // public function boot()
    // {
    //     $this->name = 'shiro';
    // }

    public function mount()
    {
        $this->hobby = 'tennis';
    }
    
    public function increment(int $num = 1)
    {
        $this->counter += $num;

        if($this->counter > 100) {
            $this->counter = 1;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
