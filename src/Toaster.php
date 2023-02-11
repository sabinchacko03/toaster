<?php

namespace SabinChacko\Toaster;

use Livewire\Component;

class Toaster extends Component
{
    public $class = 'hidden';
    public $svgClass = '';
    public $message;
    public $type = '';

    public function render()
    {
        if (session('warning')) {
            $this->message = session('warning');
            $this->class = '';
            $this->type = 'warning';
        } elseif (session('fail')) {
            $this->message = session('fail');
            $this->class = '';
            $this->type = 'fail';
        } elseif (session('success')) {
            $this->message = session('success');
            $this->class = '';
            $this->type = 'success';
        }
        return view('toaster::index');
    }
}
