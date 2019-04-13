<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\ProductType;
// cart gio hang
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
        Schema::defaultStringLength(191);
        view()->composer('blocks/header',function($view){
            $loai_sp = ProductType::all();

            // // gio hang
            // if(Session('cart')){
            //     $oldCart=Session::get('cart');
            //     $cart = new Cart($oldCart);
            // }

            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('blocks/header',function($view){
            // gio hang
            if(Session('cart')){
                $oldCart=Session::get('cart');
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

        // view()->composer('page/loai_sanpham',function($view){
        //     $loaisp = ProductType::all();
        //     $view->with('loaisp',$loaisp);
        // });
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
