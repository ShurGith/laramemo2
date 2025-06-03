<div class="space-y-4">
    @forelse ($products as $product)
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            <p class="text-gray-600">{{ $product->description }}</p>
            <div class="mt-2">
                <span class="font-bold">${{ number_format($product->price, 2) }}</span>
            </div>
        </div>
    @empty
        <div class="text-center py-4">
            <p class="text-gray-500">No hay productos disponibles</p>
        </div>
    @endforelse

    @if($products->hasPages())
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    @endif
</div>