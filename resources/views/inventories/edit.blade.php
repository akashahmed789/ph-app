
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
  <h3>Edit Inventory data</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('InventoryController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Name</label>
      <select class="form-control w-25" id="selectCategory" name="site_name" required focus>
      <option value="{{$inventories->site_name}}" selected="selected">{{$inventories->site_name}}</option>
        <option value="Al Ain" selected>Al Ain</option>        
        <option value="Nahel">{{"Nahel"}}</option>
      </select>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Date Added</label>
      <input class="form-control w-25"  type="date" name="date_added" class="form-control" id="dob" value="{{$inventories->date_added}}"/>
  </div>
   
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Product Type</label>
    <select class="form-control w-25" id="selectProduct" name="product_type" required focus>
                <option value="{{$inventories->product_type}}" selected="selected">{{$inventories->product_type}}</option>  
                <option value="Candy">Candy</option>
                <option value="Cocktail">Cocktail</option>
                <option value="COV">COV</option>
                <option value="COV Class_2">COV Class_2</option>
                <option value="COV Orange">COV Orange</option>
                <option value="COV Yellow">COV Yellow</option>
                <option value="Heirloom">Heirloom</option>
                <option value="Mixed Candy">Mixed Candy</option>
                <option value="Orange TOV">Orange TOV</option>
                <option value="Pink TOV">Pink TOV</option>
                <option value="Plum">Plum</option>
                <option value="Plum Class_2">Plum Class_2</option>
                <option value="Round">Round</option>
                <option value="Round Class_2">Round Class_2</option>
                <option value="Strabena">Strabena</option>
                <option value="TOV">TOV</option>
                <option value="Yellow TOV">Yellow TOV</option>
                <option value="Yoom">Yoom</option>
            </select>

   </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Zone</label>
    <select class="form-control w-25" id="text" name="zone" required focus>
                <option value="{{$inventories->zone}}" selected="selected">{{$inventories->zone}}</option>  
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
   </select>
   </div>
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Unit</label>
    <select class="form-control w-25" id="text" name="unit" required focus>
                <option value="{{$inventories->unit}}" selected="selected">{{$inventories->unit}}</option>  
                <option value="KG">KG</option>
                <option value="Boxes">Boxes</option>
   </select>
   </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">KG/Boxes</label>
    <input class="form-control w-25" type="decimal" name="value" class="form-control" value="{{$inventories->value}}" placeholder="Enter Value" />
   </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Comments</label>
      <input class="form-control w-25"  type="text" name="comment" class="form-control" value="{{$inventories->comment}}"/>
  </div>
   <br />
   <div class="form-group">
    <input style="position: relative; left: 250px" type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>


@endsection