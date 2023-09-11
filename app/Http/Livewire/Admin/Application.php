<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Application extends Component
{
    public function render()
    {
        return view('livewire.admin.application')
            ->extends('layouts.layoutBase', ['layout' => config('variables.admin.layout')])
            ->section('content');
    }
}
