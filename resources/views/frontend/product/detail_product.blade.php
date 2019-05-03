@extends('frontend.master')

@section('content')
<div class="site-inner">
    <div class="content-sidebar-wrap">
        <main class="content">
            <div class="woocommerce-notices-wrapper"></div>
            <div id="product-112" class="post-112 product type-product status-publish has-post-thumbnail product_cat-uncategorized entry first instock shipping-taxable purchasable product-type-simple">
                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                    data-columns="4" style="opacity: 1; transition: opacity .25s ease-in-out;width: 48%;float: left; ">
                    <figure class="woocommerce-product-gallery__wrapper">
                        <div data-thumb="{{asset('storage/'.$products_detail->image)}}"
                            class="woocommerce-product-gallery__image">
                            <a href="{{asset('css/wp-content/uploads/2019/02/5964f1c65fb89668296bd9d39595411e.jpg')}}">
                                <img width="500" height="493" src="{{asset('storage/'.$products_detail->image)}}"
                                    class="wp-post-image" alt="" title="5964f1c65fb89668296bd9d39595411e" data-caption="" 
                                    data-src="{{asset('storage/'.$products_detail->image)}}"
                                    data-large_image="{{asset('storage/'.$products_detail->image)}}"
                                    data-large_image_width="500" data-large_image_height="493" srcset="{{asset('storage/'.$products_detail->image)}} 500w, 
                                    {{asset('storage/'.$products_detail->image)}} 300w, 
                                    {{asset('storage/'.$products_detail->image)}} 100w"
                                    sizes="(max-width: 500px) 100vw, 500px" />
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="summary rihadd">
                    <h1 class="product_title entry-title">{{$products_detail->title}}</h1>
                    <p class="price">
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span>{{ number_format($products_detail->price)}} VND</span>
                    </p>
                    
                    <form class="cart" action=""
                        method="post" enctype='multipart/form-data'>
                        {{ csrf_field() }}
                        <div class="quantity daswaw">
                            <label class="screen-reader-text" for="quantity_5cc00e6a9a64a">Quantity</label>
                            <input type="number" id="quantity_5cc00e6a9a64a" class="input-text qty text" step="1" min="1" max="" name="quantity"
                                value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Miss Dior Fragrance quantity" />
                        </div>
                        
                        <button type="submit" name="add-to-cart" value="112" class="single_add_to_cart_button button alt"><a href="{{asset('/cart/add/'.$products_detail->id)}}">Add to cart</a></button>
                    </form>
                    <div class="woocommerce-product-details__short-description sgddrfe">
                        <p>{{$products_detail->excerpt}}</p>
                    </div>
                </div>
                <div class="woocommerce-tabs wc-tabs-wrapper">
                    <ul class="tabs wc-tabs" role="tablist">
                        <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                            <a href="#tab-reviews">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews"
                        role="tabpanel" aria-labelledby="tab-title-reviews">
                        <div id="reviews" class="woocommerce-Reviews">
                            <div id="comments">
                                <h2 class="woocommerce-Reviews-title">Reviews</h2>


                                <p class="woocommerce-noreviews">{!! $products_detail->body!!}</p>

                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <aside class="sidebar sidebar-primary widget-area" role="complementary" aria-label="Primary Sidebar" itemscope
            itemtype="https://schema.org/WPSideBar">
            <section id="custom_html-1" class="widget_text widget widget_custom_html">
                <div class="widget_text widget-wrap">
                    <h4 class="widget-title widgettitle">Images &#038; font</h4>
                    <div class="textwidget custom-html-widget">
                        <a href="https://creativemarket.com/?u=lidia.puscas&amp;utm_campaign=pwcm%20product%20embed">
                        <img src="{{asset('css/wp-content/uploads/2019/02/0-1-.jpg')}}" /></a>
                        &nbsp;
                        <a href="https://creativemarket.com/?u=lidia.puscas&amp;utm_campaign=pwcm%20product%20embed">
                        <img src="{{asset('css/wp-content/uploads/2019/02/28-.jpg')}}" /></a></div>
                </div>
            </section>
            <section id="simple-social-icons-1" class="widget simple-social-icons">
                <div class="widget-wrap">
                    <h4 class="widget-title widgettitle">let&#8217;s connect</h4>
                    <ul class="aligncenter">
                        <li class="ssi-email"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-email"
                                    aria-labelledby="social-email-1">
                                    <title id="social-email-1">Email</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-email"></use>
                                </svg></a></li>
                        <li class="ssi-facebook"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-facebook"
                                    aria-labelledby="social-facebook-1">
                                    <title id="social-facebook-1">Facebook</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-facebook"></use>
                                </svg></a></li>
                        <li class="ssi-instagram"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-instagram"
                                    aria-labelledby="social-instagram-1">
                                    <title id="social-instagram-1">Instagram</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-instagram"></use>
                                </svg></a></li>
                        <li class="ssi-linkedin"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-linkedin"
                                    aria-labelledby="social-linkedin-1">
                                    <title id="social-linkedin-1">LinkedIn</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-linkedin"></use>
                                </svg></a></li>
                        <li class="ssi-pinterest"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-pinterest"
                                    aria-labelledby="social-pinterest-1">
                                    <title id="social-pinterest-1">Pinterest</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-pinterest"></use>
                                </svg></a></li>
                        <li class="ssi-twitter"><a href="#" target="_blank" rel="noopener noreferrer"><svg role="img" class="social-twitter"
                                    aria-labelledby="social-twitter-1">
                                    <title id="social-twitter-1">Twitter</title>
                                    <use xlink:href="../../wp-content/plugins/simple-social-icons/symbol-defs.svg#social-twitter"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </section>
            <section id="enews-ext-1" class="widget enews-widget">
                <div class="widget-wrap">
                    <div class="enews">
                        <h4 class="widget-title widgettitle">subscribe</h4>
                        <p>Subscribe to get all the latest</p>
                        <form id="subscribeenews-ext-1" action="https://adalainedesign.us19.list-manage.com/subscribe/post?u=ae0cb14f17ecff0bda9165d91&amp;id=86d36108f6"
                            method="post" target="_blank" onsubmit="if ( subbox1.value == 'First Name') { subbox1.value = ''; } if ( subbox2.value == 'Last Name') { subbox2.value = ''; }"
                            name="enews-ext-1">
                            <label for="subbox1" class="screenread">First Name</label><input type="text" id="subbox1" class="enews-subbox"
                                value="" placeholder="First Name" name="First Name" /> <label for="subbox2" class="screenread">Last Name</label><input
                                type="text" id="subbox2" class="enews-subbox" value="" placeholder="Last Name" name="Last Name" /> <label for="subbox"
                                class="screenread">E-Mail Address</label><input type="email" value="" id="subbox" placeholder="E-Mail Address"
                                name="E-mail Address" required="required" />
                            <input type="submit" value="yes please!" id="subbutton" />
                        </form>
                    </div>
                </div>
            </section>
            <section id="search-3" class="widget widget_search">
                <div class="widget-wrap">
                    <h4 class="widget-title widgettitle">looking for something?</h4>
                    <form class="search-form" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" method="get"
                        action="https://ladyboss.adalainethemes.com/" role="search"><input class="search-form-input" type="search"
                            itemprop="query-input" name="s" id="searchform-5cc00e6a9c76b9.61027204" placeholder="Search this website"><input
                            class="search-form-submit" type="submit" value="Search">
                        <meta itemprop="target" content="../../index1f8a.html?s={s}">
                    </form>
                </div>
            </section>
        </aside>
    </div>
</div>
<div class="site-wide-cta widget-area">
    <div class="wrap">
        <section id="enews-ext-2" class="widget enews-widget">
            <div class="widget-wrap">
                <div class="enews">
                    <p>SUBSCRIBE TO MY NEWSLETTER</p>
                    <form id="subscribeenews-ext-2" action="https://adalainedesign.us19.list-manage.com/subscribe/post?u=ae0cb14f17ecff0bda9165d91&amp;id=86d36108f6"
                        method="post" target="_blank" onsubmit="if ( subbox1.value == 'First Name') { subbox1.value = ''; } if ( subbox2.value == 'Last Name') { subbox2.value = ''; }"
                        name="enews-ext-2">
                        <label for="subbox1" class="screenread">First Name</label><input type="text" id="subbox1" class="enews-subbox"
                            value="" placeholder="First Name" name="FNAME" /> <label for="subbox2" class="screenread">Last Name</label><input
                            type="text" id="subbox2" class="enews-subbox" value="" placeholder="Last Name" name="LNAME" /> <label for="subbox"
                            class="screenread">E-Mail Address</label><input type="email" value="" id="subbox" placeholder="E-Mail Address"
                            name="EMAIL" required="required" />
                        <input type="submit" value="Go" id="subbutton" />
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection