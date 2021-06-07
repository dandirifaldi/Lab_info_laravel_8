@extends('layout.v_template')
@section('title','Insert License')

@section('content')
	<div class="card card-primary">
              <!-- form start -->
   		<div class="card-body">
        	<form action="/license/insert" method="POST">
        		@csrf
            	<div class="row">
                	<div class="col-sm-6">
                  		<div class="form-group">
                    		<label for="soft">Software Name</label>
                    		<input type="text" name="soft_name" class="form-control @error('soft_name') is-invalid @enderror" id="soft" placeholder="Enter Software Name" autocomplete="off" value="{{ old('soft_name')}}">
                    		<div class="invalid-feedback">
        						@error('soft_name')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
		                <div class="form-group">
                    		<label for="key">Product Key</label>
                    		<input type="text" class="form-control @error('key') is-invalid @enderror" id="key" placeholder="Enter Product Key" name="key" autocomplete="off" value="{{ old('key')}}">
                    		<div class="invalid-feedback">
        						@error('key')
        							{{$message}}
        						@enderror
      						</div>
		                </div>
		                <div class="form-group">
                    		<label for="lcs_name">License To Name</label>
                    		<input type="text" class="form-control @error('lcs_name') is-invalid @enderror" id="lcs_name" placeholder="Enter License To Name" name="lcs_name" autocomplete="off" value="{{ old('lcs_name')}}">
                    		<div class="invalid-feedback">
        						@error('lcs_name')
        							{{$message}}
        						@enderror
      						</div>
		           		</div>
		           		<div class="form-group">
                 		 	<label>Purchase Date:</label>
                   		 	<div class="input-group date" id="purchs_date" data-target-input="nearest">
                        	<input type="date" class="form-control datetimepicker-input @error('purchs_date') is-invalid @enderror" data-target="#purchs_date"/ name="purchs_date" autocomplete="off" value="{{ old('purchs_date')}}">
                        	<div class="input-group-append" data-target="#purchs_date" data-toggle="datetimepicker">
                            <!-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> -->
                        	</div>
                        	<div class="invalid-feedback">
        						@error('purchs_date')
        							{{$message}}
        						@enderror
      						</div>
                    		</div>
               			 </div>
               			 <div class="form-group">
               			 	<label>Purchase Cost:</label>
               			 	<div class="input-group">
                  				<div class="input-group-prepend">
                    				<span class="input-group-text">Rp</span>
                  				</div>
                  				<input type="text" class="form-control @error('purchs_cost') is-invalid @enderror uang" name="purchs_cost" autocomplete="off" value="{{ old('purchs_cost')}}">
                  				<div class="input-group-append">
                    				<span class="input-group-text">.00</span>
                  				</div>
                  				<div class="invalid-feedback">
        							@error('purchs_cost')
        								{{$message}}
        							@enderror
      							</div>
                			</div>
                			
                		</div>
		                <button type="submit" class="btn btn-primary">Submit</button>
                	</div>      

   <!-- /.card-body Kanan -->

                	<div class="col-sm-6">
                		<div class="form-group">
                    		<label for="manu">Manufacturer</label>
                    		<input type="text" class="form-control @error('manu') is-invalid @enderror" id="manu" placeholder="Enter Manufacturer By" name="manu" autocomplete="off" value="{{ old('manu')}}">
                    		<div class="invalid-feedback">
        						@error('manu')
        							{{$message}}
        						@enderror
      						</div>
		            	</div>
		            
		           		 <div class="form-group">
                       		<label>Software Category</label>
                        	<select class="custom-select" name="category" value="{{ old('category')}}">
                          		<option value="Other">Other</option>
                          		<option value="Office Software">Office Software</option>
                          		<option value="Graphic Software">Graphic Software</option>
                          		<option value="Programming Software">Programming Software</option>
                          		<option value="Software Tools">Software Tools</option>
                          		<option value="Game">Game</option>
                        	</select>
                    	</div>
                    	<div class="form-group">
                    		<label for="lcs_email">License To Email</label>
                    		<input type="email" class="form-control @error('lcs_email') is-invalid @enderror" id="lcs_email" placeholder="Enter License To Email" name="lcs_email" autocomplete="off" value="{{ old('lcs_email')}}">
                    		<div class="invalid-feedback">
        						@error('lcs_email')
        							{{$message}}
        						@enderror
      						</div>
		            	</div>
		            	<div class="form-group">
                  			<label>Expired Date:</label>
                   			<div class="input-group date" id="exp_date" data-target-input="nearest">
                        	<input type="date" class="form-control datetimepicker-input @error('exp_date') is-invalid @enderror" data-target="#exp_date"/ name="exp_date" autocomplete="off" value="{{ old('exp_date')}}">
                        	<div class="input-group-append" data-target="#exp_date" data-toggle="datetimepicker">
                        	<!-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> -->
                    		</div>
                    		<div class="invalid-feedback">
        						@error('exp_date')
        							{{$message}}
        						@enderror
      						</div>
                    		</div>
                    		
                		</div>
                		<div class="form-group">
                        	<label>Note:</label>
                        <textarea class="form-control" rows="1" placeholder="Enter Note" name="note" autocomplete="off" value="{{ old('note')}}"></textarea>
                      </div>
                	</div>
        		</div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $('.uang').mask('000.000.000.000.000,00', {reverse: true});

            })
        </script>
@endsection

