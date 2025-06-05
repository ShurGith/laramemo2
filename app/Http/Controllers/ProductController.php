<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Product;
    use Illuminate\View\View;
    
    class ProductController extends Controller
    {
        /**
         * Muestra la lista de productos con paginación.
         *
         * @return View
         */
        public function index(): View
        {
            $products = Product::query()
              ->latest()
              ->paginate(6); // 12 productos por página
            
            return view('products.index', ['products' => $products, 'title' => 'Lista de productos']);
        }
        
        /**
         * Muestra un producto específico.
         *
         * @param  Product  $product
         * @return View
         */
        public function show(Product $product): View
        {
            // Laravel automáticamente resuelve el modelo mediante Route Model Binding
            return view('products.show', compact('product'));
        }
    }