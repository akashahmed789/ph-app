
@extends('layouts.app')

@section('header')

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
        });
    } );
    </script>

<style>
div {
  padding-right: 30px;
  padding-left: 30px;
}
</style>

@endsection

@section('content')


<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit PO</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('POStatusController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />

 
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Requested Date</label>
      <input class="form-control w-25"  type="date" name="request_date" class="form-control" id="dob" 
      value="{{$postatus->request_date}}"/>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Requestor</label>
    <input class="form-control w-25" type="text" name="requestor" class="form-control" value="{{$postatus->requestor}}" placeholder="Enter Color A" />
   </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Account</label>
    <input class="form-control w-25" type="text" name="account" class="form-control" value="{{$postatus->account}}" placeholder="Enter Color A" />
   </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Amount</label>
    <input class="form-control w-25" type="decimal" name="amount" class="form-control" value="{{$postatus->amount}}" placeholder="Enter Color A" />
   </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Terms</label>
    <input class="form-control w-25" type="text" name="terms" class="form-control" value="{{$postatus->terms}}" placeholder="Enter Color A" />
   </div>
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Status</label>
    <select class="form-control w-25" id="text" name="status" required focus>
                <option value="{{$postatus->status}}" selected="selected">{{$postatus->status}}</option>  
                <option value="Pending Approval">Pending Approval</option>
                <option value="Approved">Approved</option>
                <option value="Shared with Supplier">Shared with Supplier</option>
                <option value="Billed">Billed</option>
                <option value="Closed">Closed</option>
   </select>
   </div>
   
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Payment</label>
    <select class="form-control w-25" id="text" name="payment" required focus>
                <option value="{{$postatus->payment}}" selected="selected">{{$postatus->payment}}</option>  
                <option value="Pending">Pending</option>
                <option value="Initiated">Initiated</option>
                <option value="Paid">Paid</option>
                <option value="Partial Payment">Partial Payment</option>
   </select>
   </div>    

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Comments</label>
      <input class="form-control w-25"  type="text" name="comments" class="form-control" id="dob" value="{{$postatus->comments}}"/>
  </div>
   <br />
   <div class="form-group">
    <input style="position: relative; left: 250px" type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>


@endsection