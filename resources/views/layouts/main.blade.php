@props(['banner' => true, 'forms' => false])
  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
  
  <title>{{ $title ?? 'Página de inicio'}}</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
  
  <!-- Styles / Scripts -->
  {{--  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))--}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  {{--  @else--}}
</head>
<body class="grid min-h-dvh grid-rows-[auto_1fr_auto]">
<header>
  @if($banner)
    @include('_partials/header-banner')
  @endif
  <x-header/>
</header>
<main class="bg-gray-900">
  @yield('content')
</main>
<x-footer/>

