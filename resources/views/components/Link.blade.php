@props([
  'ruta' => '',
  'request' => '',
  'text' => '',
  'ico' => false,
  'flecha' => "&rarr;",
  ])

<a href="{{ route($ruta) }}"
   class="{{ request()->is($request) ? 'text-emerald-400' : 'text-white' }} font-semibold text-sm/6 ">{{ $text }}<span
    aria-hidden='true'>{{ $ico ? $flecha : '' }}</span> </a>f