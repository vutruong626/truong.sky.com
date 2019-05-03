<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Post;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetailProducts($slug)
    {
        $products_detail = Post::select('id','title','body','image','slug','price','meta_description','meta_keywords','seo_title','category_id','excerpt')->where('slug',$slug)->orderBy('id','DESC')->first();
        return view('frontend.product.detail_product',compact('products_detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCheckout(Request $request,$idsp,$qty=0)
    {
        $products_cart = Post::select('id','title','body','image','slug','price','meta_description','meta_keywords','seo_title')->first();
        $data = session()->get('cart');
        // print_r($data);die;
        $total=0;
        $ids = [];
        $products_cart = [];
        $cart_detail=[];
        if($qty>0){
            $data[$id]=$qty;
          }
        if(count($data)>0){
            foreach($data as $key => $value){
                $car_shop = Post::select('id','title','image','price')
                        ->where('id',$key)
                        ->first();
                $total += $value;
                @$cart_detail['weight'] += $value*$car_shop->price;
                $car_shop['qty'] = $value;
                array_push($products_cart, $car_shop);
            }
        }else{
            @$cart_detail['weight'] = 0;
        }
        return view('frontend.product.cart',compact('products_cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postSessionCart(Request $request, $id)
    {
        // $session = Product::findOrFail($id)->get();
        $carts = session()->get('cart');
        // print_r($carts);die;
        $params = $request->all();
        $id_products = $params['id_product'];
        $num_products = $params['number_product'];
        //print_r($id_products);
        //print_r($num_products);die;
        
        for($i =0; $i < count($id_products); $i++){
            $carts[$id_products[$i]] = $num_products[$i];
        }
        session()->put('cart',$carts);
        return redirect()->back()->with('msg', 'The Message');;
    }
    /**
     * Show the form for handleCart the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function handleCart($act,$idsp,$qty=0)
    {
        // echo $act,"-",$idsp,"-",$qty;die;
        // $qty=1;
        $data = session()->get('cart');
        if($act=='add'){
        @$data[$idsp]++;
        }
        if($act=='remove'){
            unset($data[$idsp]);
        }
        if($qty>0){
            $data[$idsp]=$qty;
        }
        $cart_detail=[];
        foreach ($data as $key => $value) {
            $product = DB::table('posts')
                        ->select('title','price','image')
                        ->where('id',$key)->first();

            $product->qty = $value;
            $cart_detail[$key]=$product;
            @$cart_detail['total'] += $value*$product->price;
        }
        session()->put('cart',$data);
        session()->put('cart_detail',$cart_detail);
        return redirect()->route('checkout');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPay()
    {
        return view('frontend.product.pay');
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
