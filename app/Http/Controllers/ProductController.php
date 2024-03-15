<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Resources\Product as ProductResource   ;
use App\Models\Product;
use Validator;
use Illuminate\Http\JsonResponse;

class ProductController extends BaseController
{
    //
    public function index(): JsonResponse
    {
        $products = Product::all();

        return $this->sendResponse(ProductResource::collection($products), 'Products Retrieved Successfully.');
    }

    public function store(Request $request):JsonResponse
    {
        // dd("I am here");
        $input = $request->all();

        $validator = Validator::make($input, [
            'name'=>'required', 
            'detail'=> 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $product = Product::create($input);

        return $this->sendResponse(new ProductResource($product), 'Product created successfully.');
    }

    public function show($id):JsonResponse
    {
        $product = Product::find($id);

        if(is_null($product)){
            return $this->sendError('Product not found.');
        }
        return $this->sendResponse(new ProductResource($product), 'Product Retreived Successfully.');
    }

    public function update(Request $request, Product $product):JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name'=>'required',
            'detail'=>'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->error());
        }

        $product->name = $input['name'];
        $product->detail = $input['detail'];
        $product->save();

        return $this->sendResponse(new ProductResource($product), 'Product updated Successfully.');
    }

    public function destroy(Product $product): JsonResponse{
        $product->delete();

        return $this->sendResponse([], 'Product Deleted Successfully.');
    }
}
