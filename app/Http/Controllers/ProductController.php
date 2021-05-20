<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Image;

class ProductController extends ResourceController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = trans('products');
        return $this->jsonResponse($products);
    }


    /**
     * Show full data of the resource
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function showFull(Product $product): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Product::validate($request);
        $product = Product::create($validated);
        return $this->jsonResponse($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function show(Product $product): JsonResponse
    {
        $product = $product->loadLocale();
        return $this->jsonResponse($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return JsonResponse
     */
    public function update(Request $request, Product $product): JsonResponse
    {
        $validated = Product::validate($request);
        $product->update($validated);
        return $this->jsonResponse($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();
        return $this->jsonResponse($product);
    }

    public function destroyImage(Image $image)
    {
        $image->delete();
        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully'
        ]);
    }
}
