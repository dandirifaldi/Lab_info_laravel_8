@extends('layout.v_template')
@section('title','Insert Asset')

@push('scripts')
<script>
   
</script>
@endpush

@section('content')
	<div class="card card-primary">
              <!-- form start -->
   		<div class="card-body">
        	<form action="/barang/insert" method="POST">
        		@csrf
            		<div>
            			<h3>Informasi Barang</h3>
            			<hr>
            		</div>
            	<div class="row">
                	<div class="col-sm-6">
                		<div class="form-group">
                    		<label for="serial">Serial Number</label>
                    		<input type="text" name="serial" class="form-control form-control-sm @error('serial') is-invalid @enderror" id="serial" placeholder="Masukan Serial Number" autocomplete="off" value="{{ old('serial')}}">
                    		<div class="invalid-feedback">
        						@error('serial')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                  		<div class="form-group">
                    		<label for="tipe">Tipe</label>
                    		<input type="text" class="form-control form-control-sm @error('tipe') is-invalid @enderror" id="tipe" placeholder="Masukan Tipe Barang" name="tipe" autocomplete="off" value="{{ old('tipe')}}">
                    		<div class="invalid-feedback">
        						@error('tipe')
        							{{$message}}
        						@enderror
      						</div>
		            	</div>
		                <div class="form-group">
                       		<label>Kategori Barang</label>
                        	<select class="form-control form-control-sm" name="category">
                          		<option value="Other">Other</option>
                          		<option value="Mouse" {{(old('category')=='Mouse') ? 'selected' : ''}}>Mouse</option>
                          		<option value="Keyboard" {{(old('category')=='Keyboard') ? 'selected' : ''}}>Keyboard</option>
                          		<option value="Monitor" {{(old('category')=='Monitor') ? 'selected' : ''}}>Monitor</option>
                          		<option value="Sound/Speaker" {{(old('category')=='Sound/Speaker') ? 'selected' : ''}}>Sound/Speaker</option>
                          		<option value="Internal Disk" {{(old('category')=='Internal Disk') ? 'selected' : ''}}>Internal Disk</option>
                          		<option value="External Disk" {{(old('category')=='External Disk') ? 'selected' : ''}}>External Disk</option>
                          		<option value="Memory" {{(old('category')=='Memory') ? 'selected' : ''}}>Memory</option>
                          		<option value="Graphics Card" {{(old('category')=='Graphics Card') ? 'selected' : ''}}>Graphics Card</option>
                        	</select>
                    	</div>
		           		<div class="form-group">
                 		 	<label>Tanggal Masuk </label>
                   		 	<div class="input-group date" id="tgl_masuk" data-target-input="nearest">
                        	<input type="date" class="form-control form-control-sm datetimepicker-input @error('tgl_masuk') is-invalid @enderror" data-target="#tgl_masuk"/ name="tgl_masuk" autocomplete="off" value="{{ old('tgl_masuk')}}">
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
                    		<label for="merk">Merk Barang</label>
                    		<input type="text" name="merk" class="form-control form-control-sm @error('merk') is-invalid @enderror" id="soft" placeholder="Masukan Merk Barang" autocomplete="off" value="{{ old('merk')}}">
                    		<div class="invalid-feedback">
        						@error('merk')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                		
<!--                     	<div class="form-group">
                    		<label for="jumlah">Jumlah</label>
                    		<input type="number" class="form-control form-control-sm @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukan Jumlah Barang" name="jumlah" autocomplete="off" value="{{ old('jumlah')}}" id="jumlah" onKeyup="hitung();">
                    		<div class="invalid-feedback">
        						@error('jumlah')
        							{{$message}}
        						@enderror
      						</div>
		            	</div> -->
		            	<div class="form-group">
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
                			
                		</div>
                		<div class="form-group">
                    		<label for="lok">Lokasi Barang</label>
                    		<input type="text" name="lok" class="form-control form-control-sm @error('lok') is-invalid @enderror" id="lok" placeholder="Barang Ingin Disimpan di ..." autocomplete="off" value="{{ old('lok')}}">
                    		<div class="invalid-feedback">
        						@error('lok')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
                		<div class="form-group">
                        	<label>Keterangan</label>
                        <textarea class="form-control form-control-sm" rows="1" placeholder="Masukan Keterangan" name="ket" autocomplete="off" value="">{{ old('ket')}}</textarea>
                      </div>
                	</div>
        		</div>
        		<div>
            			<h3>Informasi Toko</h3>
            			<hr>
            		</div>
            		<!-- <div class="row"> -->
            			<!-- <div class="col-sm-6"> -->
            				<div class="form-group">
                    			<label for="toko">Nama Toko</label>
                    			<input type="text" class="form-control form-control-sm @error('toko') is-invalid @enderror" id="toko" placeholder="Masukan Nama Toko" name="toko" autocomplete="off" value="{{ old('toko')}}">
                    			<div class="invalid-feedback">
        						@error('toko')
        							{{$message}}
        						@enderror
      							</div>
		            		</div>
            			<!-- </div> -->
            			<!-- <div class="col-sm-6"> -->
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
                      </div>
            			<!-- </div> -->

            		<!-- </div> -->

            		<button type="submit" class="btn btn-primary">Submit</button>
		                <a href="/barang" class="btn btn-danger">Kembali</a><br>
            </form>
        </div>
    </div>


@endsection


