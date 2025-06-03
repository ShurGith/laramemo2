@extends('layouts.main')
@section('content')
  <div class="w-full min-h-32 bg-gray-100 flex flex-col items-center justify-center px-4 py-6">
    <h1>Lista de productos</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse ($products as $product)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          @if($product->main_image)
            <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
          @else
            <img src="{{'https://placehold.co/600x400/orange/white?text=' . $product->name }}"
                 alt="{{ $product->name }}" class="w-full h-48 object-cover">
          @endif
          <div class="p-4">
            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            <p class="text-gray-600">{{ $product->description }}</p>
            <div class="mt-4 flex justify-between items-center">
              <span class="text-xl font-bold">${{ number_format($product->price, 2) }}</span>
              <a href="{{ route('products.show', $product) }}"
                 class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Ver detalles
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-span-full text-center py-8">
          <p class="text-gray-500">No hay productos disponibles</p>
        </div>
      @endforelse
    </div>
  
  
  </div>    @if($products->hasPages())
    <div class="mt-4">
      {{ $products->links() }}
    </div>
  @endif
@endsection