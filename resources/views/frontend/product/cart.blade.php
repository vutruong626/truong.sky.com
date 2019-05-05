@extends('frontend.master')

@section('content')
<div class="site-inner">
	<div class="content-sidebar-wrap">
		<main class="content" style="width: 100%;">
			<article class="post-322 page type-page status-publish entry" itemscope="" itemtype="https://schema.org/CreativeWork">
				<header class="entry-header">
					<h1 class="entry-title" itemprop="headline">Cart</h1>
				</header>
				<div class="entry-content" itemprop="text">
					<div class="woocommerce">
						<div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form" action="{{route('update_giohang')}}" method="post">
                            {{ csrf_field() }}
							<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($products_cart as $item_products_cart)
									<tr class="woocommerce-cart-form__cart-item cart_item">
										<td class="product-remove">
											<a href="{{asset('/cart/remove/'.$item_products_cart->id),0}}" class="remove" aria-label="Remove this item" data-product_id="112" data-product_sku="">×</a>							
										</td>
										<td class="product-thumbnail" style="width: 12%;">
											<a href="">
                                                <img width="500" height="493" src="{{asset('storage/'.$item_products_cart->image)}}" 
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" 
                                                srcset="{{asset('storage/'.$item_products_cart->image)}} 500w, 
                                                {{asset('storage/'.$item_products_cart->image)}} 300w, 
                                                {{asset('storage/'.$item_products_cart->image)}} 100w" 
                                                sizes="(max-width: 500px) 100vw, 500px">
											</a>						
										</td>

										<td class="product-name" data-title="Product">
											<a href="">{{$item_products_cart->title}}</a>						
										</td>

										<td class="product-price" data-title="Price">
											<span class="woocommerce-Price-amount amount" id="total_price_money_{{$item_products_cart->id}}" data-price="{{$item_products_cart->price}}" data-id="{{$item_products_cart->id}}">{{number_format($item_products_cart->price)}} VND</span>						
										</td>

										<td class="product-quantity" data-title="Quantity">
											<div class="quantity">
												<label class="screen-reader-text" for="quantity_5ccbf63c36e8f">Quantity</label>
                                                <input type="number" 
                                                        class="input-text qty text" 
                                                        step="1" min="0" max="" 
                                                        name="quantity" 
                                                        value="{{$item_products_cart['qty']}}" 
                                                        title="Qty" 
                                                        size="4" 
                                                        pattern="[0-9]*" inputmode="numeric" 
                                                        aria-labelledby="Miss Dior Fragrance quantity"
                                                        onchange="myFunction({{$item_products_cart->id}}, this.value)">
											</div>
										</td>

										<td class="product-subtotal" data-title="Total">
											<span class="woocommerce-Price-amount amount"  id="p_{{$item_products_cart->id}}">
                                                <span class="woocommerce-Price-currencySymbol"></span>{{number_format($item_products_cart->price * $item_products_cart['qty'] )}} VNĐ</span>						
										</td>
														
                                    </tr>
                                    		<input type="hidden" name="id_product[]" id="id_{{$item_products_cart->id}}">
                                            <input type="hidden" name="number_product[]" id="num_{{$item_products_cart->id}}" >
                                    @endforeach

									<tr>
										@if(count($products_cart) > 0)
										<td colspan="6" class="actions">
											<!-- <div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> 
												<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
											</div> -->
											<button type="submit" class="button" name="update_cart" value="Update cart">Update cart</button>
											<input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="2b741283dc">
											<input type="hidden" name="update_cart" value="/cart/">				
										</td>
										@endif
									</tr>

								</tbody>
							</table>
						</form>
						<div class="cart-collaterals">
							<div class="cart_totals ">
								<h2>Cart totals</h2>
								<table cellspacing="0" class="shop_table shop_table_responsive">
									<tbody>
										<!-- <tr class="cart-subtotal">
											<th>Subtotal</th>
											<td data-title="Subtotal">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
											</td>
										</tr> -->
										<tr class="order-total">
											<th>Total</th>
											<td data-title="Total">
												<strong>
													<span class="woocommerce-Price-amount amount" id="p_">
														<span class="woocommerce-Price-currencySymbol"></span>{{number_format($cart_detail['weight'],0)}} VNĐ</span>
												</strong> 
											</td>
										</tr>


									</tbody>
								</table>

								<div class="wc-proceed-to-checkout">

									<a href="{{route('pay')}}" class="checkout-button button alt wc-forward">
									Proceed to checkout</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</article>
		</main>
	</div>
</div>
<script>
    function myFunction(id, num) {

        // var x = document.getElementById("quantity_5c999d74bcddd").value;
        var total_price_money = document.getElementById("total_price_money_" + id).getAttribute('data-price');
        document.getElementById("p_" + id).innerHTML = currencyFormat(total_price_money*num);
        var id = document.getElementById("total_price_money_" + id ).getAttribute('data-id');
        document.getElementById("id_" + id).value = id;
        document.getElementById("num_" + id).value = num;
    }
    function currencyFormat(num) {
        return   num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + 'VND'
    }
</script>
@endsection