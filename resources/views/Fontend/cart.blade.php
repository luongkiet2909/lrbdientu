@extends('Fontend.master');
@section('title','Trang Chủ')
@section('main')
					<div id="wrap-inner">
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									<tr>
										<td><img class="img-responsive" src="img/dienthoai/product-3.PNG" width="200", height="200"></td>
										<td>SamSung Galaxy S20 Ultra Trắng Thiên Văn</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number">
											</div>
										</td>
										<td><span class="price">21.190.000 đ</span></td>
										<td><span class="price">21.190.000 đ</span></td>
										<td><a href="#">Xóa</a></td>
									</tr>
									<tr>
										<td><img class="img-responsive" src="img/airpod/product-3.png" width="200px" height="200px"></td>
										<td>Tai Nghe Bluetooth Apple AirPods 2 True Wireless - MV7N2 - Nhập Khẩu Chính Hãng - Hộp Sạc Thường</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number">
											</div>
										</td>
										<td><span class="price">2.190.000 đ</span></td>
										<td><span class="price">2.190.000 đ</span></td>
										<td><a href="#">Xóa</a></td>
									</tr>
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price">23.770.000 đ</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{url('/')}}" class="my-btn btn">Mua tiếp</a>
										<a href="#" class="my-btn btn">Cập nhật</a>
										<a href="#" class="my-btn btn">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form>
								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" >
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" >
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" >
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" >
								</div>
								<div class="form-group text-right">
									<form>
									<button onclick="location.href='{{URL::to('/complete')}}'" type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
									</form>
								</div>
							</form>
						</div>
					</div>

@stop			
	