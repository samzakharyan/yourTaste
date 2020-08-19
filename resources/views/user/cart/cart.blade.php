<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
      <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron text-center">
          <h1>Reservation</h1>
             @foreach($UserReserve as $reserve)
               Date:{{$reserve->date}},<br>
               Start Time: {{$reserve->start_time}},<br>
               End Time:{{$reserve->end_time}},<br>
               Table for {{$reserve->people}} person(s):{{$reserve->table_number}},
                <h4>Your Details</h4> 
               Email:{{$reserve->email}},<br>
               Phone:{{$reserve->phone}},<br>
               {{-- <a href="{{route('reserve')}}"class="btn btn-success">Chenge Sellection</a> --}}

             @endforeach
      </div>
      </div>
    </div>
   <div class="row">
      <div class="col-md-12"><pre id="token_response"></pre></div>
    </div>
  
    <div class="row">
        <div class="col-md-4">
        Payment is required to secure your reservation
         </div>
      <div class="col-md-4">
        <button class="btn btn-success btn-block" onclick="pay(50)">Pay $50</button>
      </div>
    </div>
</div>
  <script src="https://checkout.stripe.com/checkout.js"></script>
      <script src="{{asset('_admin/js/switch-alert.js')}}"></script>
  <script type="text/javascript">
  $(document).ready(function () {  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
  
  function pay(amount) {
    var handler = StripeCheckout.configure({
      key: 'pk_test_ODKT6UdRoSZvqa6VNfhGqNsd00rb1rkwND',
      locale: 'auto',
      token: function (token) {
      // console.log('Token Created!!');
      //console.log(token)
        // $('#token_response').html(JSON.stringify(token));
  
        $.ajax({
          url: '{{ route('stripe.store') }}',
          method: 'post',
          data: { tokenId: token.id, amount: amount },
          success: (response) => {
  
            // console.log(response)  
          },
          error: (error) => {
            console.log(error);
            alert('There is an error in processing.')
          }
        })
      }
    });
   
    handler.open({
      name: 'Some Site',
      description: '10 widgets',
      amount: amount
    });
  }
</script>
</body>
</html>
