<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Fontend.Home');
});
Route::get('/chitietsanpham', function () {
    return view('Fontend.details1');
});
Route::get('/chitietsanpham1', function () {
    return view('Fontend.details2');
});
Route::get('/chitietsanpham2', function () {
    return view('Fontend.details3');
});
Route::get('/chitietsanpham3', function () {
    return view('Fontend.details4');
});
Route::get('/chitietsanpham4', function () {
    return view('Fontend.details5');
});
Route::get('/chitietsanpham5', function () {
    return view('Fontend.details6');
});
Route::get('/chitietsanpham6', function () {
    return view('Fontend.details7');
});
Route::get('/chitietsanpham7', function () {
    return view('Fontend.details8');
});
Route::get('/chitietsanpham8', function () {
    return view('Fontend.details9');
});
Route::get('/chitietsanpham9', function () {
    return view('Fontend.details10');
});
Route::get('/chitietsanpham10', function () {
    return view('Fontend.details11');
});
Route::get('/chitietsanpham11', function () {
    return view('Fontend.details12');
});
Route::get('/chitietsanpham12', function () {
    return view('Fontend.details13');
});
Route::get('/chitietsanpham13', function () {
    return view('Fontend.details14');
});
Route::get('/chitietsanpham14', function () {
    return view('Fontend.details15');
});
Route::get('/chitietsanpham15', function () {
    return view('Fontend.details16');
});
Route::get('/chitietsanpham16', function () {
    return view('Fontend.details17');
});
Route::get('/timkiemsanpham', function () {
    return view('Fontend.search');
});
Route::get('/Xacnhanthanhtoan', function () {
    return view('Fontend.complete');
});
Route::get('/chitiethoadon', function () {
   return view('Fontend.cart');
});
Route::get('/dienthoai', function () {
    return view('Fontend1.home');
 });
 /*dienthoai*/
 Route::get('/chitietsanphamdienthoai', function () {
    return view('Fontend1.details1');
});
Route::get('/chitietsanphamdienthoai1', function () {
    return view('Fontend1.details2');
});
Route::get('/chitietsanphamdienthoai2', function () {
    return view('Fontend1.details3');
});
Route::get('/chitietsanphamdienthoai3', function () {
    return view('Fontend1.details4');
});
Route::get('/chitietsanphamdienthoai4', function () {
    return view('Fontend1.details5');
});
Route::get('/chitietsanphamdienthoai5', function () {
    return view('Fontend1.details6');
});
Route::get('/chitietsanphamdienthoai6', function () {
    return view('Fontend1.details7');
});
Route::get('/chitietsanphamdienthoai7', function () {
    return view('Fontend1.details8');
});
Route::get('/chitietsanphamdienthoai8', function () {
    return view('Fontend1.details9');
});
Route::get('/chitietsanphamdienthoai9', function () {
    return view('Fontend1.details10');
});
Route::get('/chitietsanphamdienthoai10', function () {
    return view('Fontend1.details11');
});
Route::get('/chitietsanphamdienthoai11', function () {
    return view('Fontend1.details12');
});
Route::get('/chitietsanphamdienthoai12', function () {
    return view('Fontend1.details13');
});
Route::get('/chitietsanphamdienthoai13', function () {
    return view('Fontend1.details14');
});
Route::get('/chitietsanphamdienthoai14', function () {
    return view('Fontend1.details15');
});
Route::get('/chitietsanphamdienthoai15', function () {
    return view('Fontend1.details16');
});
Route::get('/Thongtinkhachhang', function () {
    return view('Fontend.email');
 });
 Route::get('/muathanhcong', function () {
    return view('Fontend.complete');
 });
 Route::get('/laptop', function () {
    return view('Fontend2.home');
 });
 /*laptop*/
 Route::get('/chitietsanphamlaptop', function () {
    return view('Fontend2.details1');
});
Route::get('/chitietsanphamlaptop1', function () {
    return view('Fontend2.details2');
});
Route::get('/chitietsanphamlaptop2', function () {
    return view('Fontend2.details3');
});
Route::get('/chitietsanphamlaptop3', function () {
    return view('Fontend2.details4');
});
Route::get('/chitietsanphamlaptop4', function () {
    return view('Fontend2.details5');
});
Route::get('/chitietsanphamlaptop5', function () {
    return view('Fontend2.details6');
});
Route::get('/chitietsanphamlaptop6', function () {
    return view('Fontend2.details7');
});
Route::get('/chitietsanphamlaptop7', function () {
    return view('Fontend2.details8');
});
Route::get('/chitietsanphamlaptop8', function () {
    return view('Fontend2.details9');
});
Route::get('/chitietsanphamlaptop9', function () {
    return view('Fontend2.details10');
});
Route::get('/chitietsanphamlaptop10', function () {
    return view('Fontend2.details11');
});
Route::get('/chitietsanphamlaptop11', function () {
    return view('Fontend2.details12');
});
Route::get('/chitietsanphamlaptop12', function () {
    return view('Fontend2.details13');
});
Route::get('/chitietsanphamlaptop13', function () {
    return view('Fontend2.details14');
});
Route::get('/chitietsanphamlaptop14', function () {
    return view('Fontend2.details15');
});
Route::get('/chitietsanphamlaptop15', function () {
    return view('Fontend2.details16');
});
/*airpod*/
Route::get('/airpod', function () {
    return view('Fontend3.home');
});
Route::get('/chitietsanphamairpod', function () {
    return view('Fontend3.details1');
});
Route::get('/chitietsanphamairpod1', function () {
    return view('Fontend3.details2');
});
Route::get('/chitietsanphamairpod2', function () {
    return view('Fontend3.details3');
});
Route::get('/chitietsanphamairpod3', function () {
    return view('Fontend3.details4');
});
Route::get('/chitietsanphamairpod4', function () {
    return view('Fontend3.details5');
});
Route::get('/chitietsanphamairpod5', function () {
    return view('Fontend3.details6');
});
Route::get('/chitietsanphamairpod6', function () {
    return view('Fontend3.details7');
});
Route::get('/chitietsanphamairpod7', function () {
    return view('Fontend3.details8');
});
Route::get('/chitietsanphamairpod8', function () {
    return view('Fontend3.details9');
});
Route::get('/chitietsanphamairpod9', function () {
    return view('Fontend3.details10');
});
Route::get('/chitietsanphamairpod10', function () {
    return view('Fontend3.details11');
});
Route::get('/chitietsanphamairpod11', function () {
    return view('Fontend3.details12');
});
Route::get('/chitietsanphamairpod12', function () {
    return view('Fontend3.details13');
});
Route::get('/chitietsanphamairpod13', function () {
    return view('Fontend3.details14');
});
Route::get('/chitietsanphamairpod14', function () {
    return view('Fontend3.details15');
});
Route::get('/chitietsanphamairpod15', function () {
    return view('Fontend3.details16');
});
/*TV*/
Route::get('/TV', function () {
    return view('Fontend4.home');
});
Route::get('/chitietsanphamTV', function () {
    return view('Fontend4.details1');
});
Route::get('/chitietsanphamTV1', function () {
    return view('Fontend4.details2');
});
Route::get('/chitietsanphamTV2', function () {
    return view('Fontend4.details3');
});
Route::get('/chitietsanphamTV3', function () {
    return view('Fontend4.details4');
});
Route::get('/chitietsanphamTV4', function () {
    return view('Fontend4.details5');
});
Route::get('/chitietsanphamTV5', function () {
    return view('Fontend4.details6');
});
Route::get('/chitietsanphamTV6', function () {
    return view('Fontend4.details7');
});
Route::get('/chitietsanphamTV7', function () {
    return view('Fontend4.details8');
});
Route::get('/chitietsanphamTV8', function () {
    return view('Fontend4.details9');
});
Route::get('/chitietsanphamTV9', function () {
    return view('Fontend4.details10');
});
Route::get('/chitietsanphamTV10', function () {
    return view('Fontend4.details11');
});
Route::get('/chitietsanphamTV11', function () {
    return view('Fontend4.details12');
});
Route::get('/chitietsanphamTV12', function () {
    return view('Fontend4.details13');
});
Route::get('/chitietsanphamTV13', function () {
    return view('Fontend4.details14');
});
Route::get('/chitietsanphamTV14', function () {
    return view('Fontend4.details15');
});
Route::get('/chitietsanphamTV15', function () {
    return view('Fontend4.details16');
});
/*TULANH*/
Route::get('/tulanh', function () {
    return view('Fontend5.home');
});
Route::get('/chitietsanphamTL', function () {
    return view('Fontend5.details1');
});
Route::get('/chitietsanphamTL1', function () {
    return view('Fontend5.details2');
});
Route::get('/chitietsanphamTL2', function () {
    return view('Fontend5.details3');
});
Route::get('/chitietsanphamTL3', function () {
    return view('Fontend5.details4');
});
Route::get('/chitietsanphamTL4', function () {
    return view('Fontend5.details5');
});
Route::get('/chitietsanphamTL5', function () {
    return view('Fontend5.details6');
});
Route::get('/chitietsanphamTL6', function () {
    return view('Fontend5.details7');
});
Route::get('/chitietsanphamTL7', function () {
    return view('Fontend5.details8');
});
Route::get('/chitietsanphamTL8', function () {
    return view('Fontend5.details9');
});
Route::get('/chitietsanphamTL9', function () {
    return view('Fontend5.details10');
});
Route::get('/chitietsanphamTL10', function () {
    return view('Fontend5.details11');
});
Route::get('/chitietsanphamTL11', function () {
    return view('Fontend5.details12');
});
Route::get('/chitietsanphamTL12', function () {
    return view('Fontend5.details13');
});
Route::get('/chitietsanphamTL13', function () {
    return view('Fontend5.details14');
});
Route::get('/chitietsanphamTL14', function () {
    return view('Fontend5.details15');
});
Route::get('/chitietsanphamTL15', function () {
    return view('Fontend5.details16');
});
/*MayGiac*/
Route::get('/maygiac', function () {
    return view('Fontend6.home');
});
Route::get('/chitietsanphamMG', function () {
    return view('Fontend6.details1');
});
Route::get('/chitietsanphamMG1', function () {
    return view('Fontend6.details2');
});
Route::get('/chitietsanphamMG2', function () {
    return view('Fontend6.details3');
});
Route::get('/chitietsanphamMG3', function () {
    return view('Fontend6.details4');
});
Route::get('/chitietsanphamMG4', function () {
    return view('Fontend6.details5');
});
Route::get('/chitietsanphamMG5', function () {
    return view('Fontend6.details6');
});
Route::get('/chitietsanphamMG6', function () {
    return view('Fontend6.details7');
});
Route::get('/chitietsanphamMG7', function () {
    return view('Fontend6.details8');
});
Route::get('/chitietsanphamMG8', function () {
    return view('Fontend6.details9');
});
Route::get('/chitietsanphamMG9', function () {
    return view('Fontend6.details10');
});
Route::get('/chitietsanphamMG10', function () {
    return view('Fontend6.details11');
});
Route::get('/chitietsanphamMG11', function () {
    return view('Fontend6.details12');
});
Route::get('/chitietsanphamMG12', function () {
    return view('Fontend6.details13');
});
Route::get('/chitietsanphamMG13', function () {
    return view('Fontend6.details14');
});
Route::get('/chitietsanphamMG14', function () {
    return view('Fontend6.details15');
});
Route::get('/chitietsanphamMG15', function () {
    return view('Fontend6.details16');
});

//login
Route::get('/login', function () {
    return view('Fontend.login');
});

Route::post('/admin', function () {
    return view('admin_layout');
});
Route::get('/complete', function () {
    return view('Fontend.complete');
});



