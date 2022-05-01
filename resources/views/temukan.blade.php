@extends('layouts.navbar')

@section('container')
    <title>{{ $title }}</title>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan</title>
    <style>

    @import url(https://fonts.googleapis.com/css?family=Abhaya Libre:400,700,900,300);

    body { 
        height: 50%;
        background-color: #FFF9F2;   
    } 
    h1 {
		font-family : Abhaya Libre;
		font-size: 50px;
    }
	h4 {
		font-family : Abhaya Libre;
		font-size: 25px;
        color: #000000;
    }
    p { 
        margin: 0 0 15px; 
        line-height: 24px; 
        color: #000000; 
    }

    .wrapper { 
        max-width: 1400px; 
        height: 100%;
        margin: 0 auto; 
        padding: 20px;
    }


    .tabs {
        position: relative;
        display: flex;
        min-height: 380px;
        border-radius: 8px 8px 0 0;
        margin: 2rem 0;
        overflow: hidden;
		font-family : Abhaya Libre;
		font-size: 18px;
		font-weight: bold;
    }
	
    .tabby-tab {
        flex: 1;
    }
	
	.tabby-tab label {
        display: block;
        box-sizing: border-box;
        /* tab content must clear this */
            height: 40px;
        
        padding: 10px;
        text-align: center;
        background: #B3D6E7;
        cursor: pointer;
        transition: background 0.5s ease;
        
    }
    .tabby-tab label:hover {
        background: #367792;
    }
	
    .tabby-content {
        position: absolute;
        left: 0; bottom: 0; right: 0;
        /* clear the tab labels */
            top: 40px; 
        
        padding: 20px;
        border-radius: 0 0 8px 8px;
        background: #F3FAFD;
        /* show/hide */
            opacity: 0;
            transform: scale(0.1);
            transform-origin: top left;
        
    }
    .tabby-content img {
        float: left;
        margin-right: 20px;
        border-radius: 8px;
    }
    .tabby-tab [type=radio] { display: none; }
    [type=radio]:checked ~ label {
        background: #367792;
        z-index: 2;
    }

    [type=radio]:checked ~ label ~ .tabby-content {
        z-index: 1;
        
        /* show/hide */
            opacity: 1;
            transform: scale(1);
    }

    @media screen and (max-width: 767px) {
        .tabs { min-height: 400px;}
    }
	
    @media screen and (max-width: 480px) {
        .tabs { min-height: 580px; }
        .tabby-tab label { 
            height: 60px;
        }
        .tabby-content { top: 60px; }
        .tabby-content img {
            float: none;
            margin-right: 0;
            margin-bottom: 20px;
        }
    }
    ol li {
        color: #000000;
        text-indent: 10px;
		font-weight: bold;
		font-size: 20px;
		padding-bottom: 20px;
		list-style:none;
    	border-bottom:1px solid #d6dde0;
    	padding-top:15px;
    }


</style>
</head>
<body>
    <br><br>

    <h1 align="center">Temukan Barangmu</h1>
	<br>
    <div class="wrapper">
	<h4>Cari Barang yang Hilang</h4>

	<div class="tabs">
		<div class="tabby-tab">
			<input type="radio" id="tab-1" name="tabby-tabs" checked>
			<label for="tab-1">Barang Elektronik</label>
			<div class="tabby-content">
				<img src="https://cdn.vox-cdn.com/thumbor/w9t5YbaSQs7-a4DaVb5q9ewggrI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22863273/vpavic_210916_4760_0240.jpg" width="250" height="300">
				<ol>
                    <li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-2" name="tabby-tabs">
			<label for="tab-2">Barang Sehari-hari</label>
			<div class="tabby-content">
				<img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXTqatT-O2fKP7j9lwNY4J0oS3QCd0p16Erg&usqp=CAU" width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-3" name="tabby-tabs">
			<label for="tab-3">Uang</label>
			<div class="tabby-content">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRufbSfw8CmCO54_7vJplfYYXy1GDs4ZSK1PWYxPvJ_mfRprGpjt3cXpUo4sadx5-J9pMA&usqp=CAU" width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-4" name="tabby-tabs">
			<label for="tab-4">Perlengkapan Tulis</label>
			<div class="tabby-content">
				<img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/06/28/20-alat-tulis-dan-kantor-terbaik-20210628081403.jpg"width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>
        </div>

		<br><br>
        <div class="wrapper">
        <h4>Ambil Barang Temuan</h4>

        <div class="tabs">
		<div class="tabby-tab">
			<input type="radio" id="tab-5" name="tabby-tabs-1" checked>
			<label for="tab-5">Barang Elektronik</label>
			<div class="tabby-content">
				<img src="https://cdn.vox-cdn.com/thumbor/w9t5YbaSQs7-a4DaVb5q9ewggrI=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22863273/vpavic_210916_4760_0240.jpg" width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-6" name="tabby-tabs-1">
			<label for="tab-6">Barang Sehari-hari</label>
			<div class="tabby-content">
			<img src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXTqatT-O2fKP7j9lwNY4J0oS3QCd0p16Erg&usqp=CAU" width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-7" name="tabby-tabs-1">
			<label for="tab-7">Uang</label>
			<div class="tabby-content">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRufbSfw8CmCO54_7vJplfYYXy1GDs4ZSK1PWYxPvJ_mfRprGpjt3cXpUo4sadx5-J9pMA&usqp=CAU" width="250" height="300">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>

		<div class="tabby-tab">
			<input type="radio" id="tab-8" name="tabby-tabs-1">
			<label for="tab-8">Perlengkapan Tulis</label>
			<div class="tabby-content">
			<img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/06/28/20-alat-tulis-dan-kantor-terbaik-20210628081403.jpg"width="250" height="250">
				<ol>
					<li>Nama Barang :</li>
                    <li>Lokasi Hilang :</li>
                    <li>Waktu Hilang :</li>
                    <li>Ciri-ciri Barang :</li>
                </ol>
			</div>
		</div>
		
    </div>
</body>
</html>
@endsection