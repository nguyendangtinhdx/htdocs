<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = ProductType::all(); // lấy tất cả loại sản phẩm
            // $view->with('loai_sp',$loai_sp);
            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('header',function($view){// truyền thông tin giỏ hàng đi và in ra sản phẩm
            if (Session('cart')) { // kt nếu có giỏ hàng thì mới get('cart'), không thì không lấy
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
        view()->composer('page/dathang',function($view){
            // gio hang
            if(Session('cart')){
                $oldCart=Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
