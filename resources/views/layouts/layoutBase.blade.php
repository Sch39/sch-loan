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
  @include('sections.pageNavSide')
  @endif

  @yield('content')


  @if ($showFooter)
  @include('sections.pageFooter')
  @endif
</div>
@endsection