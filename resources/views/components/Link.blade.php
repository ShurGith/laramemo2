@props([
  'ruta' => '',
  'request' => '',
  'text' => '',
  ])

<a href="{{ route($ruta) }}"
   class="{{ request()->is($request) ? 'text-emerald-400' : 'text-white' }} font-semibold text-sm/6 ">{{ $text }}</a>