@extends('layouts.layoutMaster')

@php

$showNavSide = ($layout['showNavSide'] ?? false);
$showNavTop = ($layout['showNavTop'] ?? false);
$showFooter = ($layout['showFooter'] ?? false);
@endphp

@section('layoutContent')
<div class='w-full'>
  {{-- @if ($showNavSide)
  <p class="text-left">NavSide</p>
  @endif

  @if ($showNavTop)
  <p class="text-center">NavTop</p>

  @endif

  --}}

  @yield('content')


  @if ($showFooter)
  @include('sections.pageFooter')
  @endif
</div>
@endsection