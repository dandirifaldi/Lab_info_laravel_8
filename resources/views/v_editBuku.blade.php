@extends('layout.v_template')
@section('title','Edit Buku')

@section('content')
	<div class="card card-primary">
              <!-- form start -->
   		<div class="card-body">
        	<form action="/barang/updateBuku/{{$buku->id_buku}}" method="POST">
        		@csrf
            		<div>
            			<h3>Informasi Buku</h3>
            			<hr>
            		</div>
            	<div class="row">
                	<div class="col-sm-6">
                		<div class="form-group">
                    		<label for="judul">Judul<span style="color: red;">*</span></label>
                    		<input type="text" name="judul" class="form-control form-control-sm @error('judul') is-invalid @enderror" id="judul" placeholder="Masukan Judul Buku" autocomplete="off" value="{{ $buku->judul}}">
                    		<div class="invalid-feedback">
        						@error('judul')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                  		<div class="form-group">
                    		<label for="tahun">Tahun<span style="color: red;">*</span></label>
                    		<input type="text" class="form-control form-control-sm @error('tahun') is-invalid @enderror" id="tahun" placeholder="Masukan Tahun " name="tahun" autocomplete="off" value="{{ $buku->tahun}}">
                    		<div class="invalid-feedback">
        						@error('tahun')
        							{{$message}}
        						@enderror
      						</div>
		            	</div>
		            	<div class="form-group">
                    		<label for="jumlah">Jumlah Buku<span style="color: red;">*</span></label>
                    		<input type="number" class="form-control form-control-sm @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukan Jumlah Buku" name="jumlah" autocomplete="off" value="{{ $buku->jumlah_buku}}">
                    		<div class="invalid-feedback">
        						@error('jumlah')
        							{{$message}}
        						@enderror
      						</div>
		            	</div>
		           		<div class="form-group">
                 		 	<label>Tanggal Masuk <span style="color: red;">*</span></label>
                   		 	<div class="input-group date" id="tgl_masuk" data-target-input="nearest">
                        	<input type="date" class="form-control form-control-sm datetimepicker-input @error('tgl_masuk') is-invalid @enderror" data-target="#tgl_masuk"/ name="tgl_masuk" autocomplete="off" value="{{ $buku->tgl_masuk}}">
                        	<div class="input-group-append" data-target="#tgl_masuk" data-toggle="datetimepicker">
                            <!-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> -->
                        	</div>
                        	<div class="invalid-feedback">
        						@error('tgl_masuk')
        							{{$message}}
        						@enderror
      						</div>
                    		</div>
               			 </div>

 <!--               			 <div class="form-group">
               			 	<label>Harga Total :</label>
               			 	<div class="input-group input-group-sm">
                  				<div class="input-group-prepend">
                    				<span class="input-group-text">Rp</span>
                  				</div>
                  				<input type="text" class="form-control form-control-sm @error('total') is-invalid @enderror uang" name="total" autocomplete="off" value="{{ old('total')}}" disabled id="total">
                  				<div class="input-group-append">
                    				<span class="input-group-text">.00</span>
                  				</div>
                  				<div class="invalid-feedback">
        							@error('purchs_cost')
        								{{$message}}
        							@enderror
      							</div>
                			</div>
                			
                		</div> -->
		                
                	</div>      

   <!-- /.card-body Kanan -->

                	<div class="col-sm-6">
                		<div class="form-group">
                    		<label for="penulis">Penulis Buku</label>
                    		<input type="text" name="penulis" class="form-control form-control-sm @error('penulis') is-invalid @enderror" id="soft" placeholder="Masukan Penulis Buku" autocomplete="off" value="{{ $buku->penulis}}">
                    		<div class="invalid-feedback">
        						@error('penulis')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                		<div class="form-group">
                       		<label>Tipe Buku</label>
                        	<select class=" form-control form-control-sm" name="tipe">
                          		<option value="Other" {{($buku->tipe === "Other") ? 'selected' : ''}}>Other</option>
                          		<option value="Modul" {{($buku->tipe === "Modul") ? 'selected' : ''}}>Modul</option>
                          		<option value="Buku Paket" {{($buku->tipe === "Buku Paket") ? 'selected' : ''}}>Buku Paket</option>
                          		<option value="Jurnal/Makalah" {{($buku->tipe === "Jurnal/Makalah") ? 'selected' : ''}}>Jurnal/Makalah</option>
                          		<!-- <option value="Tugas Akhir" {{($buku->tipe === "Tugas Akhir") ? 'selected' : ''}}>Tugas Akhir</option> -->
                        	</select>
                    	</div>
<!-- 		            	<div class="form-group">
               			 	<label>Harga </label>
               			 	<div class="input-group input-group-sm">
                  				<div class="input-group-prepend">
                    				<span class="input-group-text">Rp</span>
                  				</div>
                  				<input type="text" class="form-control form-control-sm @error('harga') is-invalid @enderror" name="harga" autocomplete="off" value="{{ old('harga')}}" onKeyup="hitung();" id="harga">
                  				<div class="input-group-append">
                    				<span class="input-group-text">,00</span>
                  				</div>
                  				<div class="invalid-feedback">
        							@error('harga')
        								{{$message}}
        							@enderror
      							</div>
                			</div>
                			
                		</div> -->
                		<div class="form-group">
                    		<label for="lok">Lokasi Barang<span style="color: red;">*</span></label>
                    		<input type="text" name="lok" class="form-control form-control-sm @error('lok') is-invalid @enderror" id="lok" placeholder="Barang Ingin Disimpan di ..." autocomplete="off" value="{{ $buku->lokasi}}">
                    		<div class="invalid-feedback">
        						@error('lok')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                		<div class="form-group">
                        	<label>Keterangan</label>
                        <textarea class="form-control form-control-sm" rows="1" placeholder="Masukan Keterangan" name="ket" autocomplete="off" value="">{{ $buku->keterangan}}</textarea>
                      </div>
                	</div>
        		</div>
        		<!-- <div>
            			<h3>Informasi Toko</h3>
            			<hr>
            		</div> -->
            				<!-- <div class="form-group">
                    			<label for="toko">Nama Toko</label>
                    			<input type="text" class="form-control form-control-sm @error('toko') is-invalid @enderror" id="toko" placeholder="Masukan Nama Toko" name="toko" autocomplete="off" value="{{ old('toko')}}">
                    			<div class="invalid-feedback">
        						@error('toko')
        							{{$message}}
        						@enderror
      							</div>
		            		</div>

            				<div class="form-group">
                    			<label for="no_toko">No. Telp Toko</label>
                    			<input type="text" class="form-control form-control-sm @error('no_toko') is-invalid @enderror" id="no_toko" placeholder="Masukan Nomor Telepon Toko" name="no_toko" autocomplete="off" value="{{ old('no_yoko')}}">
                    			<div class="invalid-feedback">
        						@error('no_toko')
        							{{$message}}
        						@enderror
      							</div>
		            		</div>
            				<div class="form-group">
                        	<label>Alamat Toko</label>
                        <textarea class="form-control form-control-sm" rows="1" placeholder="Masukan Alamat" name="alamat_toko" autocomplete="off" value="">{{ old('alamat_toko')}}</textarea>
                      </div> -->


            		<button type="submit" class="btn btn-primary">Submit</button>
		                <a href="/barang" class="btn btn-danger">Kembali</a><br>
            </form>
        </div>
    </div>


@endsection


