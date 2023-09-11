@extends('layouts.layoutMaster')

@php

$showNavSide = ($layout['showNavSide'] ?? false);
$showNavTop = ($layout['showNavTop'] ?? false);
$showFooter = ($layout['showFooter'] ?? false);
@endphp

@section('layoutContent')
<div class='w-full'>



  @if ($showNavTop)
  @include('sections.pageNavTop')
  @endif


  @if ($showNavSide)


  <div class="absolute top-0 left-0 z-[20 !important] h-screen">
    @include('sections.pageNavSide')
  </div>

  <div class="absolute top-0 right-0 z-[20 !important] h-screen">
    @yield('content')
  </div>

  @else
  @yield('content')
  @endif



  @if ($showFooter)
  @include('sections.pageFooter')
  @endif
</div>
@endsection