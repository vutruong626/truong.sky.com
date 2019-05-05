<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Mail;
use App\Models\Post;
use App\Models\Order;
use App\Models\DetailOrder;
use TongVanDuc\NganLuong;
use Symfony\Component\Routing\Route;
use App\Services\NganluongServices;
use League\Flysystem\Config;
use Illuminate\Support\Facades\Redirect;

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
        return view('frontend.product.cart',compact('products_cart','cart_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postSessionCart(Request $request)
    {
        // $session = Product::findOrFail($id)->get();
        $carts = session()->get('cart');
        // print_r($carts);die;
        $params = $request->all();
        $id_products = $params['id_product'];
        $num_products = $params['number_product'];
        //print_r($id_products);
        // print_r($num_products);die;
        
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
        // print_r($data);die;
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
    public function getPay(Request $request,$idsp,$qty=0)
    {
        $products_cart = Post::select('id','title','body','image','slug','price','meta_description','meta_keywords','seo_title')->first();
        // print_r($products_cart);die;
        
        $data = session()->get('cart');
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
        return view('frontend.product.pay',compact('products_cart','cart_detail'));
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postPay(Request $request,$idsp,$qty=0)
    {
        
        // print_r($request->all());die;
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
            'district' => 'required',
            // 'note' => 'required'
              ];
              $messages = [
            'name.required' => 'Vui lòng nhập họ tên',
            'city.required' => 'Vui lòng chọn Tỉnh/TP',
            'address.required' => 'Vui lòng chọn địa chỉ   ',
            'district.required' => 'Vui lòng chọn Quận/huyện',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            // 'note.required' => 'Vui lòng ghi chú đơn hàng',
            'area.required' => 'Vui nhập lòng Phường Xã',
            'email.required' => 'Vui lòng nhập email',
                  'email.email' => 'Vui lòng nhập đúng định dạng email',
              ];      

              $validator = Validator::make($request->all(), $rules,$messages);
            //   dd($validator);
              if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
              }else {
                    $data_dh = new Order();
                    $data_dh->name = $request->name;
                    $data_dh->phone = $request->phone;
                    $data_dh->address = $request->address;
                    $data_dh->email = trim($request->email);
                    $data_dh->city = $request->city;
                    $data_dh->district = $request->district;
                    $data_dh->area = $request->area;
                    $data_dh->note = $request->note;
                    }

                if($data_dh->save()){
                    $data = session()->get('cart');
                    // print_r($data);die;
                    // update chuyen qua mail
                    $cart_detail = [];
                    $total=0;
                    foreach($data as $key => $value){
                        $shop_pay = Post::select('id','title','image','price')
                                ->where('id',$key)
                                ->first();
                        $shop_pay['qty'] =$value;
                        $total += $value*$shop_pay->price;  // update chuyen qua mail
                        array_push($cart_detail, $shop_pay); // update chuyen qua mail
                        $ctdonhang = new DetailOrder();
                        $ctdonhang->amount = $value;
                        $ctdonhang->price = $shop_pay->price;
                        $ctdonhang->id_products = $shop_pay->id;
                        $ctdonhang->id_orders = $data_dh->id;
                        $ctdonhang->save();
                    }
                    $cart_detail['total'] = $total; // update chuyen qua mail
                    
                }
                // $provinces = Province::select('id','name')
                //                 ->where('id',$request->city)
                //                 ->first();
                // $area['city'] = trim($provinces->name);
                // // print_r($area['city']);die;
                // $district = District::select('id','name')
                //                 ->where('id',$request->district)
                //                 ->first();
                // $area['district'] = trim($district->name);
            //     $area['payment_label'] = trim($request->payment_label);
            //     Mail::send('frontend.email.email', ['data_dh'=>$data_dh,'area'=>$area,'cart_detail'=>$cart_detail], function ($message) use ($data_dh){
            //     $message->from('websitedfm@gmail.com', 'greenliving.vip');
            //     $message->subject('Đơn hàng #');
            //     $message->bcc($data_dh->email);
            //     $message->to('websitedfm@gmail.com');
            // });
            $request->session()->forget('cart');
            $request->session()->forget('cart_detail');
            $url = $this->connectNganLuong($data_dh->id,$total);
            // $data = session()->get('cart');
            // print_r($data);die;
            return Redirect::to($url);
            
    }

    public function getSuccess(Request $request){
        $price = $request->get('price');
        $order_code = $request->get('order_code');
        // dd($request->get('order_code'));

        return view('frontend.product.success',compact('order_code','price'));
    }

    public function connectNganLuong ($order_code, $price) {
        // Lấy các tham số để chuyển sang Ngânlượng thanh toán:
        
        //Khai báo url trả về 
        $return_url= Route('success');
        // Link nut hủy đơn hàng
        $cancel_url= $_SERVER['HTTP_REFERER'];	
        	
        //Thông tin giao dịch
        $transaction_info="Thong tin giao dich";
                //Khai báo đối tượng của lớp NL_Checkout= 
        $nl= new NganluongServices();
        // dd('ss');
        $nl->nganluong_url = Config('nganluong.url_api');
        $nl->merchant_site_code = Config('nganluong.merchant_id');
        $nl->secure_pass = Config('nganluong.merchant_password');
        $receiver=Config('nganluong.receiver_email');
        //Tạo link thanh toán đến nganluong.vn
        $url= $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info, $order_code, $price);
        // dd(Config('nganluong'), $url);
        //$url= $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info, $order_code, $price);
        // dd($url);
        return $url;
    }
}
