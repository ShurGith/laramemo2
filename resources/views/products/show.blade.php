@extends('layouts.main')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      @if($product->image)
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
      @endif
      <div class="p-4">
        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
        <p class="text-gray-600">{{ $product->description }}</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-xl font-bold">${{ number_format($product->price, 2) }}</span>
        
        </div>
      </div>
    </div>
  </div>
@endsection
