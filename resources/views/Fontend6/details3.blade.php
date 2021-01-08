@extends('Fontend6.master');
@section('title','Chi tiết sản phẩm')
@section('main')
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3>Máy giặt Samsung Inverter 8 kg WW80J52G0KW/SV</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="img/maygiac/product-3.PNG" width="200px" height="200px">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">6.569.000 VND</span></p>
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
							<p class="text-justify">Điện thoại Samsung Galaxy S20 Ultra trắng thiên vân – Phiên bản giới hạn đặc biệt
                                Samsung S20 ultra, Plus ra mắt đầu năm 2020 chỉ với hai màu cơ bản là đen và xám. Mới đây, hãng điện thoại Samsung đã cho ra mắt phiên bản màu sắc mới - Samsung Galaxy S20 Ultra trắng thiên vân đầy sang trọng. Và mới đây thôi, gã khổng lồ công nghệ Hàn Quốc cũng vừa cho ra mắt Samsung Galaxy S20 FE dành riêng cho fan của Samsung với nhiều màu sắc độc đáo, nhiều tính năng mới.
                                
                                Phiên bản giới hạn, màu trắng thiên vân mang lại sự thanh lịch
                                Samsung Galaxy S20 Ultra trắng thiên vân tượng trưng cho sự tinh khiết. Trắng là màu sắc cơ bản nhất, giúp tôn lên những màu sắc khác và màu sắc này được coi là sự khởi điểm của mọi ý tưởng.</p>
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
		