@extends("layouts.user-layout")
    @section("title")
      Reserve Table
    @endsection
    @section("content")
            <main>
                <div class="container-fluid">
                    <div class="card mb-4">
                       <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                              <thead>
                                 <tr>


                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Data</th>
                                   <th>Start Time</th>
                                   <th>End Time</th>
                                   <th>Table Number</th>
                                   <th>Type</th>
                                   <th>Cancle</th>
                                 </tr>
                              </thead>
                      @foreach($order as $order)
                          @foreach($order->reserve as $orderReserve)
{{-- @php
 $start_time =  $orderReserve->start_time;
 $end_time =    $orderReserve->end_time;
 Reserve::where($start_time, '>=', Carbon::createFromDate(1975, 5, 21);) ->where($start_time, '<=', Carbon::createFromDate(2015, 5, 21);)->get();
@endphp --}}


                              <tbody >
                                 <tr>
                                   <td>{{$orderReserve->id}}</td>
                                   <td>{{$orderReserve->name}}</td>
                                   <td>{{$orderReserve->phone}}</td>
                                   <td>{{$orderReserve->email}}</td>
                                   <td>{{$orderReserve->date}}</td>
                                   <td>{{$orderReserve->start_time}}</td>
                                   <td>{{$orderReserve->end_time}}</td>
                                   <td>{{$orderReserve->table_number}}</td>
                                   <td>{{$orderReserve->type}}</td>
                                   <td> 
                                   <button type="button"  class="cancle btn btn-danger" id="{{$orderReserve->id}}"  data-url="{{route('cancle-reserve',['id' => $orderReserve->id])}}">
                                    Cancle
                                   </button>
                                   </td>
                                  
                                </tr>
                              </tbody>
                           @endforeach    
                      @endforeach


{{-- @php
$employee_booking = $bookings->where('employee_id',$employeedetails->id)->where('start_date', date('Y-m-d', strtotime($_GET['booking_date'])))->all();
@endphp

@for ($i=$start_time;$i<=$end_time;$i = $i + 30*60)
    @foreach($employee_booking as $booking)
        @if($i >= strtotime($booking->start_time) && $i <= strtotime($booking->end_time))
            Booking [unavailable] {{ $booking->start_time }} - {{ $booking->end_time }} ({{$booking->title}}) <br>
        @else
            {{ date('H:i a', $i) }} [available] <br>
        @endif
    @endforeach
@endfor
 --}}










                            </table>
                          </div>
                    </div>
                </div>
            </main>          
    @endsection
