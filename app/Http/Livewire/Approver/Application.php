<?php

namespace App\Http\Livewire\Approver;

use Livewire\Component;

class Application extends Component
{
    public function render()
    {
        return view('livewire.approver.application')
            ->extends('layouts.layoutBase', ['layout' => config('variables.admin.layout')])
            ->section('content');
    }
}
