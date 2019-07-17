<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;

use App\Product;

class ProductController extends Controller
{

	//Function display list product
    public function displayShop()
    {
    	$products = Product::getListProduct()->get(); 

        $totalPage = $this->countPage();

        return view('shop', ['products' => $products, 'totalPage' => $totalPage]);
    }

    //Function display detail product
    public function displayProduct($id)
    {
    	//Get data product by id
    	$product = Product::findOrFail($id);

    	return view('product', ['product' => $product]);
    }

    public function countPage()
    {
        $productPerPgae = 9;

        $totalProduct = Product::get()->count(); // Get total product

        $totalPage = (int) ceil($totalProduct/$productPerPgae);

        return $totalPage;
    }

    //Function load data ajax of product 
    public function pagination($page)
    {
        $productPerPage = 9;

        $totalPage = $this->countPage();

        if(isset($page))
        {
            $currentPage = $page;
        }else
        {
            $currentPage = 1;
        }

        $from = ($currentPage - 1)*$productPerPage;

        return $from;
    }

    public function loadPagination(Request $rq)
    {
        if ($rq->isMethod('get')){  
            $productPerPage = 9;

            $from = $this->pagination($rq->page);

            $products = Product::where('new', '1')
            ->offset($from)
            ->limit($productPerPage)
            ->get();

            return view('dataAjax.productPerPage', ['products' => $products]);  
        }
    }
}
