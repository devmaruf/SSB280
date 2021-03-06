<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Slider;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use App\Models\Backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class PagesController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $slider   = Slider::orderBy('id','asc')->get();
        $newarraivals = Product::orderBy('id','desc')->get();
        $featureditems = Product::orderBy('id','desc')->where('is_featured',1)->get();
        return view('frontend.pages.home',compact('slider','newarraivals','featureditems'));
    }
    /**
     * Display All Products
     *
     * @return \Illuminate\Http\Response
     */

    //All Product Show
    public function products()
    {
        $products = Product::orderBy('id','desc')->paginate(30);
        return view('frontend.pages.products.products', compact('products') );
    }
    /**
     * Display All Products
     *
     * @return \Illuminate\Http\Response
     */

    //Show Product Details
    public function productshow($slug)
    {
        $value = Product::where('slug',$slug)->first();
        if (!is_null($value)) {
            return view('frontend.pages.products.details' , compact('value'));
        }else{
            return back();
        }
    }
    /**
     * Display All Products
     *
     * @return \Illuminate\Http\Response
     */

    //Show Product Category Wise
    public function categoryshow()
    {
        #
    }
    /**
     * Display All Products
     *
     * @return \Illuminate\Http\Response
     */


    //Show Product details Category Wise
    public function categoryproduct($slug)
    {
        $value = Category::where('slug',$slug)->first();
        if( !is_null( $value ) ){
            return view('frontend.pages.products.category' , compact('value'));
        }
        else{
            return back();
        }
    }
    /**
     * Display All Products
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
