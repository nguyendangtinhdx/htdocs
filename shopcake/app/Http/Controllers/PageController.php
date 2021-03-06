<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\BillDetail;
class PageController extends Controller
{
	public function getIndex(){
		$slide = Slide::all();
		$new_product = Product::where('new',1)->paginate(4);
		$sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(4);
		return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
	}
	public function getLoaiSP($type){
		$cate = ProductType::all();
		$sp_theoloai = Product::where('id_type',$type)->get();
		$sp_khac = Product::where('id_type','<>',$type)->paginate(3);
		$theloai = ProductType::where('id',$type)->first();
		return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','cate','theloai'));
	}
	public function getChiTietSP(Request $req){
		$sanpham = Product::where('id',$req->id)->first();
		$sanphamtuongtu = Product::where('id_type',$sanpham->id_type)->paginate(3);
		return view('page.chitiet_sanpham',compact('sanpham','sanphamtuongtu'));
	}
	public function getLienhe(){
		return view('page.lienhe');
	}
	public function getGioithieu(){
		return view('page.gioithieu');
	}
	public function getAddtoCart(Request $req, $id){
		$product = Product::find($id);
		$oldCart = Session('cart')?Session::get('cart'):null;
		$cart=new Cart($oldCart);
		$cart->add($product,$id);
		$req->Session()->put('cart',$cart);
		return redirect()->back();
	}
	public function getDelItemCart($id){
		$oldCart=Session::has('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->removeItem($id);
		if(count($cart->items)>0){
			Session::put('cart',$cart);
		}else{
			Session::forget('cart');
		}
		return redirect()->back();
	}
	public function getDathang(){
		return view('page.dathang');
	}
	public function postDathang(Request $req){
		$cart = Session::get('cart');
		$customer = new Customer;
		$customer->name= $req->name;
		$customer->address = $req->address;
		$customer->email = $req->email;
		$customer->phone_number=$req->phone;
		$customer->note = $req->notes;
		$customer->save();
		$bill = new Bill;
		$bill->id_customer = $customer->id;
		$bill->date_order = date('Y-m-d');
		$bill->total = $cart->totalPrice;
		$bill->payment = $req->payment;
		$bill->note = $req->notes;
		$bill->save();
		foreach ($cart->items as $key => $value) {
			$bill_detail = new BillDetail;
			$bill_detail->id_bill = $bill->id;
			$bill_detail->id_product = $key;
			$bill_detail->quantity = $value['qty'];
			$bill_detail->unit_price = $value['price']/$value['qty'];
			$bill_detail->save();
		}
		Session::forget('cart');
		return redirect()->back()->with('thongbao','Đặt hàng thành công');

	}
}
