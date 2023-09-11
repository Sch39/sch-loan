<?php

namespace App\Http\Livewire;

use Livewire\Component;


class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page')
            ->extends('layouts.layoutBase', ['layout' => config('variables.landing.layout')])
            ->section('content');
    }
}
