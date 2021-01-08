@extends('Fontend6.master');
@section('title','Chi tiết sản phẩm')
@section('main')
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>Máy Giặt Mini Bán Tự Động, Tia UV Khử Khuẩn</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="img/maygiac/product-7.PNG" width="200px" height="200px">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">1.169.000 VND</span></p>
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
							<p class="text-justify">Chắc chắn cái tên Asus là một trong những thương hiệu không hề xa lạ với những tín đồ công nghệ, các sản phẩm đến từ thương hiệu này đều có thiết kế đẹp mắt, cấu hình mạnh đi kèm với một mức giá cực kì phải chăng. Laptop Asus Vivobook D409DA-EK095T sẽ là một trong những laptop không nên bỏ qua.

                                Kích thước nhỏ gọn, màn hình 14 inch Full HD
                                Laptop Asus Vivobook D409DA- EK151T có thiết kế độc đáo với kích thước máy cực kì nhỏ gọn 32.5(W) x 21.6(D) x 2.31 ~ 2.31(H) cm và trọng lượng của máy chỉ nặng 1.6 kg. Người dùng có thể dễ dàng bỏ vừa túi để mang theo sử dụng ở bất cứ nơi nào cho công việc của mình.
                                
                                Các chi tiết được nhà sản xuất hoàn thiện một cách rất tỉ mỉ và chau chuốt mang tới cảm giác sang trọng cho sản phảm, góc cạnh bo cong êm ái cầm nắm cực kì chắc tay.
                                
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
		