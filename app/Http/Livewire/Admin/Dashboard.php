<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard')
            ->extends('layouts.layoutBase', ['layout' => config('variables.admin.layout')])
            ->section('content');
    }
}
