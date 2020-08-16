<?php
/**
 * Created by PhpStorm.
 * User: sireesh
 * Date: 16/8/20
 * Time: 12:11 PM
 */
namespace App\Http\Controllers;
use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function search($srcStr)
    {
        if(empty($srcStr)) {
            return response()->json([]);
        }
        $products = Product::getProducts($srcStr);
        return response()->json($products);
    }


}
