<?php

namespace App\Http\Livewire\Approver;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.approver.dashboard')
            ->extends('layouts.layoutBase', ['layout' => config('variables.admin.layout')])
            ->section('content');
    }
}
