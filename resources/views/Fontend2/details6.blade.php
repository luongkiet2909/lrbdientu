@extends('Fontend2.master');
@section('title','Chi tiết sản phẩm')
@section('main')
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>Laptop Dell Inspiron 5593 N5I5513W (Core i5-1035G1/ 8GB DDR4 2666MHz/ 256GB PCIe NVMe/ MX230 2GB/ 15.6 FHD/ Win10) - Hàng Chính Hãng</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="img/laptop/product-6.PNG" width="180px" height="250px">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">24.600.000 VND</span></p>
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
							<p class="text-justify">Máy tính All in one ASUS V222FAK - Tiện lợi, đa năng & mạnh mẽ cho mọi nhu cầu
                                Với những người dùng làm việc chuyên nghiệp như thiết kế đồ họa, chỉnh sửa video hoặc biên soạn content, máy tính All in one ASUS V222FAK sẽ là chiếc máy tính hoàn hảo. Trang bị màn hình hiển thị 21.5 inch cùng hiệu năng mượt mà trong một thiết kế all-in-one gọn gàng, ASUS V222FAK sẽ cùng bạn hoàn thành mọi công việc một cách thoải mái.
                                
                                Thiết kế all-in-one liền mạch & thanh lịch với màu đen ấn tượng
                                Với ASUS V222FAK, bạn sẽ hoàn toàn được thay đổi khái niệm về chiếc máy tính để bàn thông thường. Không còn thùng PC cồng kềnh chiếm chỗ, ASUS V222FAK được thiết kế all-in-one - tất cả thành phần linh kiện hệ thống được gói gọn trong một chiếc màn hình, từ đó giúp công việc bố trí máy tính cho không gian làm việc trở nên thuận tiện hơn.</p>
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
		