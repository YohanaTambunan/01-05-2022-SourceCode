@extends('layouts.navbar')

@section('container')
    <title>{{ $title }}</title>
    <!DOCTYPE html>
    <html>
    <body>
        <style>
            fieldset{
                background-color: #8FBDD3;
            }
           .ab{
                  text-decoration:none;
                  color:dodgerblue;
           }
           .a{
                  font-size:22px;
                  font-weight:bold;
           }
           body{
                  padding:20px;
           } 
           input{
                  width:40%;
                  padding:7px 10px;
           }
           input[type=submit]{
                  background-color:#03256C;
                  border-radius: 8px;
                  width: 80px;
                  border: 1px solid black;
                  color:white;
                  margin:15px 60px 0px 0px;
                  padding:8px;
    
                  <h1>style="background-color:LightGray;">LightGray</h1>
           }
           label{
               color: black;
           }
    </style>
    <body>
        <br><br><br>
        <div class="container">		
            <fieldset>
                <legend><h2>Laporkan Barang Temuan</h2></legend>
            <form>
                <br>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nama" placeholder="Nama">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">No HP:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nohp" placeholder="No HP">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Ditemukan:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="lokasiditemukan" placeholder="Lokasi Ditemukan">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu Ditemukan:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nama" placeholder="Waktu ditemukan">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="waktu" class="col-sm-2 col-form-label">Ciri-ciri Barang:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nama" placeholder="Ciri-ciri">
                        </div>
                    </div>  
        
                    <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Photo Barang:</label>
                        <div class="col-sm-10">
                            <input type="file" value="upload gambar"></tr>
                        </div>
                    </div> 
                    
        
        
                    <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Kategori Barang</label>
                        <div class="radio-inline">
                            <label><input type="radio" name="posradio1">Uang &nbsp &nbsp &nbsp &nbsp </label>
                          </div>
                          <div class="radio-inline">
                            <label><input type="radio" name="posradio2">Sehari-hari &nbsp &nbsp &nbsp &nbsp</label>
                          </div>
                          <div class="radio-inline">
                            <label><input type="radio" name="posradio3">Elektronik &nbsp &nbsp &nbsp &nbsp</label>
                          </div>
                          <div class="radio-inline">
                            <label><input type="radio" name="posradio3">Buku &nbsp &nbsp &nbsp &nbsp</label>
                          </div>
                           
        
                           
                        
                    </div>
           
                    <input type="submit" name="action" value="Submit">
        </form>  
    </fieldset>      
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <br><br><br><br>   
    </body>
    </html>
@endsection