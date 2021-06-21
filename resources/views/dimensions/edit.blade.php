
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
  padding-left: 80px;
}
</style>

@endsection

@section('content')


<div class="row">
 <div class="col-md-12">
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  
  <form method="post" action="{{action('DimensionsController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date Added</label>
      <input class="form-control w-25" type="date" name="date_added" class="form-control" id="dob" value="{{$dimensions->date_added}}" placeholder="Enter Date" />
   </div>
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Product Type</label>
    <select class="form-control w-25" id="selectProduct" name="product_type" required focus>
                <option value="{{$dimensions->product_type}}" selected="selected">{{$dimensions->product_type}}</option>  
                <option value="Candy">Candy</option>
                <option value="Cocktail">Cocktail</option>
                <option value="COV">COV</option>
                <option value="Heirloom">Heirloom</option>
                <option value="Mixed Candy">Mixed Candy</option>
                <option value="Orange TOV">Orange TOV</option>
                <option value="Plum">Plum</option>
                <option value="Strabena">Strabena</option>
                <option value="TOV">TOV</option>
                <option value="Yellow TOV">Yellow TOV</option>
                <option value="Yoom">Yoom</option>
            </select>

   </div>
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Length</label>
    <input type="decimal" name="length" class="form-control" value="{{$dimensions->length}}" placeholder="Enter Length" />
   </div>
   <div class="form-group">
    <input type="decimal" name="width" class="form-control" value="{{$dimensions->width}}" placeholder="Enter Width" />
   </div>
   <div class="form-group">
    <input type="decimal" name="weight" class="form-control" value="{{$dimensions->weight}}" placeholder="Enter Weight" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>


@endsection