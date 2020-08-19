@extends("layouts.user-layout")
    @section("title")
      Reserve Table
    @endsection
    @section("content")
            <main>
                <div class="container-fluid">
                    <div class="card mb-4">
                       <div class="card-body">
                          <header class="panel-heading">
				              <div class="text-center pjRbHeaderTitle">Select date and time for your reservation</div>
	                      </header>
	                    <form action="{{route('teble-reserve')}}"method="post" >
	                    	    {{csrf_field()}}
                            {{method_field('post')}} 
		                   <div class="form-group col-md-6">
		    @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                             Name:<input type="text" name="name" class="form-control">	
		    @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                             	 	
                             Your Phone:<input type="number" name="phone" class="form-control">
		    @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                             Your Email:<input type="email" name="email" class="form-control">
		    @error('date')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                             
	                         Data:<input type="date" name="date" class="form-control">	
		    @error('start_time')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror	                         
                             Start Time:<input type="time" name="start_time" class="form-control">
		    @error('end_time')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                             
                             End Time:<input type="time" name="end_time" class="form-control"> 
        @error('people')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                             
                             People:<input type="number" name="people" class="form-control"><br>                              
                                                       
                             <img src="https://www.cloudapp.com.my/images/restaurant/prb1-r.jpg" style="width: 100%">
		    @error('table_number')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                             
                             Choose Number Table:<select name="table_number" class="form-control">
                               <option disabled="" selected="">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                            </select>
		    @error('type')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                            
                            Reservation Type:<select name="type" class="form-control">
                              <option disabled="" selected="">Select</option>
                            	<option value="dinner">Dinner</option>
                            	<option value="brthday">Brthday</option>
                            	<option value="weeding">Weeding</option>
                            	<option value="corporate">Corporate</option>
                            	<option value="nightlife">Nightlife</option>
                            	<option value="other">Other</option>
                            </select>
                            <button class="btn btn-success">Reserve</button>
{{-- {{dump($reserve->id)}} --}}
                            </div>
                        </form>
                     </div>
                    </div>
                </div>
            </main>          
    @endsection



