@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Đặt Hàng</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Đặt Hàng</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content">
		<div class="row">@if(Session::has('thongbao')) <?php echo "<script>alert('Thanh toán thành công');</script>"?> @endif</div>
		<form action="{{route('dathang')}}" method="post" class="beta-form-checkout">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-sm-6">
					<h4>Hóa Đơn</h4>
					<div class="space20">&nbsp;</div>

					<div class="form-block">
						<label for="name">Họ Tên*</label>
						<input type="text" id="name" name="name" required>
					</div>
					<div class="form-block">
						<label for="adress">Địa chỉ*</label>
						<input type="text" id="apartment" value="" name="address" required>
					</div>

					<div class="form-block">
						<label for="email">Email*</label>
						<input type="email" id="email" name="email" required>
					</div>

					<div class="form-block">
						<label for="phone">Số điện thoại*</label>
						<input type="text" id="phone" name="phone" required>
					</div>
					
					<div class="form-block">
						<label for="notes">Ghi chú</label>
						<textarea id="notes" name="notes"></textarea>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="your-order">
						<div class="your-order-head"><h5>Đơn hàng</h5></div>
						<div class="your-order-body">
							<div class="your-order-item">
							@if(Session::has('cart'))
							@foreach($product_cart as $product)
								<div>
								<!--  one item	 -->
									<div class="media">
										<img width="35%" src="source/image/product/{{$product['item']['image']}}" alt="" class="pull-left">
										<div class="media-body">
											<p class="font-large">{{$product['item']['name']}}</p>
											<span class="color-gray your-order-info">Số lượng: {{$product['qty']}}</span>
											<span class="color-gray your-order-info">Giá: {{$product['item']['unit_price']}}</span>
										</div>
									</div>
								<!-- end one item -->
								</div>
							@endforeach
							@endif
								<div class="clearfix"></div>
							</div>
							<div class="your-order-item">
								<div class="pull-left"><p class="your-order-f18">Tổng Tiền:</p></div>
								<div class="pull-right"><h5 class="color-black">@if(Session::has('cart')){{number_format(Session('cart')->totalPrice)}}@else 0 @endif VNĐ</h5></div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="your-order-head"><h5>Tiến hành đặt hàng</h5></div>
						
						<div class="your-order-body">
							<ul class="payment_methods methods">

								<li class="payment_method_cheque">
									<input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="COD" data-order_button_text="" checked="checked">
									<label for="payment_method_cheque">Thanh toán qua đường bưu điện</label>
									<div class="payment_box payment_method_cheque">
										Gửi hàng, thanh toán khi nhận
									</div>						
								</li>
								
								<li class="payment_method_paypal">
									<input id="payment_method_paypal" type="radio" class="input-radio" name="payment" value="ATM" data-order_button_text="Proceed to PayPal">
									<label for="payment_method_paypal">Thanh toán bằng thẻ ATM</label>
									<div class="payment_box payment_method_paypal">
										Chuyển khoản:<br>
										-xxxxxxxxxxxxxxxxxxxxxxxx <br>
										-xxxxxxxxxxxxxxxxxxxxxxxx <br>
										-xxxxxxxxxxxxxxxxxxxxxxxx
									</div>						
								</li>
							</ul>
						</div>

						<div class="text-center"><button type="submit" class="beta-btn primary">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
					</div> <!-- .your-order -->
				</div>
			</div>
		</form>
	</div> <!-- #content -->
</div>
@endsection