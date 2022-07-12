
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
<style>
div {
  padding-right: 30px;
  padding-left: 30px;
}
</style>

@endsection

@section('content')

<div class="row" padding="10px 20px 10px 200px">
 <div class="col-md-12">
  <br />
  <h3 align="center">Shelf Life Testing</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('leafy_shelf_lives.create')}}" class="btn btn-primary">Add Shelf Life Test</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Site</th>
    <th>Testing Date</th>
    <th>Day of Testing</th>
    <th>Date Harvested</th>
    <th>Product type</th> 
    <th>Smell</th>
        <th>Texture</th>
        <th>Cracks</th>
        <th>Presence of Wrinkles</th>
        <th>Color</th>
        <th>Presence of Spots</th>
        <th>Dryness</th>
        <th>Crunch</th>
        <th>Remarks</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($leafy_shelf_lives as $row)
   <tr>
    <td>{{$row['site_name']}}</td>
    <td>{{$row['testing_date']}}</td>
    <td>{{$row['day_of_testing']}}</td>
    <td>{{$row['date_harvested']}}</td>
    <td>{{$row['product_type']}}</td>
    <td>{{$row['smell']}}</td>
    <td>{{$row['texture']}}</td>
    <td>{{$row['cracks']}}</td>
    <td>{{$row['wrinkles']}}</td>
    <td>{{$row['color']}}</td>
    <td>{{$row['spots']}}</td>
    <td>{{$row['dryness']}}</td>
    <td>{{$row['crunch']}}</td>
    <td>{{$row['remarks']}}</td>
    <td><img src="{{ asset('uploads/shelflifetesting/' . $row['image']) }}" width="100px;" height="100px;" alt="No Image"></td>
     
    <td><a href="{{action('Leafy_Shelf_Life_Controller@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
    <form method="post" class="delete_form" action="{{action('Leafy_Shelf_Life_Controller@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection