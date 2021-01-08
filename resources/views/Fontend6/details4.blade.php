@extends('Fontend6.master');
@section('title','Chi tiết sản phẩm')
@section('main')
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>Máy giặt Electrolux Inverter 8 Kg EWF8025DGWA</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="img/maygiac/product-4.PNG" width="200px" height="200px">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">6.549.000 VND</span></p>
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
							<p class="text-justify">Oppo Find X2 – Hiệu năng đỉnh cao, màn hình chiếm trọn mặt trước
                                Oppo Find X2 và Find X2 Pro là chiếc điện thoại thuộc phân khúc cao cấp vừa được Oppo ra mắt, tiếp nối sự thành công vang dội của người tiền nhiệm Oppo Find X. Đây là mẫu sản phẩm điện thoại Oppo được thừa hưởng những công nghệ mới và tốt nhất ở thời điểm hiện tại so với các đối thủ cùng phân khúc. Ngoài ra, bạn cũng có thể tham khảo điện thoại Oppo Find X3 với nhiều nâng cấp về cấu hình, thiết kế, camera cũng như dung lượng pin.
                                
                                Thiết kế chuyển màu nổi bật, cho cảm giác cực kì nhẹ nhàng
                                Oppo Find X2 nổi bật với mặt sau làm từ chất liệu nhựa nhưng vẫn thể hiện lên tính sang trọng của máy bởi phần màu sắc. Màu sắc gradient ấn tượng xanh đam mê. Đây là màu sắc được lấy cảm hứng từ những màu sắc tự nhiên với sự chuyển màu mượt mà dưới ánh sáng và kiểu thiết kế đối xứng.</p>
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
		