@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Danh sách các sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Sản phẩm {{$theloai->name}}</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						@foreach($cate as $c)
						<li><a href="{{route('loai-sp',$c->id)}}">{{$c->name}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>{{$theloai->name}}</h4>
						<div class="beta-products-details">
							<p class="pull-left">Có {{count($sp_theoloai)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($sp_theoloai as $sp)
							<div class="col-sm-4">
								<div class="single-item">
									@if($sp->promotion_price!=0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="{{route('chitietsp',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" height="250px;" style="margin: 30px 0px;" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp->name}}</p>
										<p class="single-item-price">
											@if($sp->promotion_price!=0)
											<span class="flash-del">{!! number_format($sp["unit_price"],0,",",".") !!} VNĐ</span>
											<span class="flash-sale">{!! number_format($sp["promotion_price"],0,",",".") !!} VNĐ</span>
											@else
											<span>{!! number_format($sp["unit_price"],0,",",".") !!} VNĐ</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsp',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản Phẩm Khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">Có {{count($sp_khac)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($sp_khac as $spkhac)
							<div class="col-sm-4">
								<div class="single-item">
									@if($spkhac->promotion_price!=0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="{{route('chitietsp',$spkhac->id)}}"><img src="source/image/product/{{$sp->image}}" height="250px;" style="margin: 30px 0px;" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$spkhac->name}}</p>
										<p class="single-item-price">
											@if($spkhac->promotion_price!=0)
											<span class="flash-del">{!! number_format($spkhac["unit_price"],0,",",".") !!} VNĐ</span>
											<span class="flash-sale">{!! number_format($spkhac["promotion_price"],0,",",".") !!} VNĐ</span>
											@else
											<span>{!! number_format($spkhac["unit_price"],0,",",".") !!} VNĐ</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class=",$new->id-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsp',$spkhac->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row" align="center">{{$sp_khac->links()}}</div>
						<div class="space40">&nbsp;</div>
						
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div>
@endsection