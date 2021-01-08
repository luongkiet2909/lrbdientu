@extends('Fontend3.master');
@section('title','Chi tiết sản phẩm')
@section('main')
				
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>BAO CASE AIRPODS VỎ ỐP BẢO VỆ CHO TAI NGHE AIRPODS 1, AIRPODS 2, AIRPODS PRO</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="img/airpod/product-16.PNG" width="200px" height="200px">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">450.000 VND</span></p>
									<p>Bảo hành: 1 đổi 1 trong 12 tháng</p> 
									<p>Phụ kiện: Dây cáp sạc, tai nghe</p>
									<p>Tình trạng: Máy mới 100%</p>
									<p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
									<p>Còn hàng: Còn hàng</p>
									<p class="add-cart text-center"><a href="#">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">Thiết kế trang nhã, tinh tế
                                Smart Tivi Sony 4K 55 inch KD-55X7000G sở hữu kiểu dáng tinh tế cùng tông màu đen lịch lãm mang đến phong cách hiện đại, trang nhã về căn phòng của bạn.
                                
                                Tivi 55 inch màn hình rộng
                                Kích thước tivi 55 inch vừa phải, thích hợp bố trí vào nhiều không gian nội thất khác nhau như phòng khách, phòng ăn, phòng họp, Ngoài ra, với chân đế hình chữ V bằng kim loại chắc chắn, giúp giữ vững tivi trên nhiều dạng bề mặt phẳng khác nhau.
                                
                                Độ phân giải Ultra HD 4K rõ nét
                                Sony KD-55X7000G được trang bị độ phân giải 4K, chuẩn Ultra HD cho độ nét hình ảnh cao gấp 4 lần độ phân giải Full HD, cho hiển thị hình ảnh chân thực và sống động giúp bạn trải nghiệm hình ảnh chất lượng nhất. Bên cạnh đó, chiếc tivi còn duy trì màu sắc chính xác hơn và cho phép người xem thưởng thức hình ảnh đẹp tuyệt hảo cho dù họ ngồi ở bất cứ vị trí nào.
                                
                                </p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form>
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list">
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2020-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2020-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
							<ul>
								<li class="com-title">
									Vietpro Education
									<br>
									<span>2020-19-01 10:00:00</span>	
								</li>
								<li class="com-details">
									HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
								</li>
							</ul>
						</div>
					</div>					
					<!-- end main -->
@stop
		