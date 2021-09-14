
@extends('layouts.app')


@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- new additions -->

</head>
<style>
div {
  padding-right: 10px;
  padding-left: 30px;
}
</style>
@endsection

@section('content')

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

<div class="row">
 <div class="col-md-12">
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif
  

  <form method="post" action="{{url('inventories')}}">
   {{csrf_field()}}
   
   <div><H4 >  Cold Storage Closing Stock </H4></div>

   <div align="middle">
   <a href="{{route('inventories.index')}}" class="btn btn-primary">View Closing Stock</a>
   <br />
   <br />
   <br />
  </div>

<div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Site Name</label>
      <select class="form-control w-25" id="selectCategory" name="site_name" required focus>
        <option value="Al Ain" selected>Al Ain</option>        
        <option value="Nahel">{{"Nahel"}}</option>
      </select>
  </div>

  <?php
  date_default_timezone_set('Asia/Dubai');
  ?>
  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Date</label>
    <input class="form-control w-25" type="date" name="date_added" value="<?php echo date('Y-m-d'); ?>"/>
  </div>

  <br />
  <div class="form-group row">
  <table class="table">
    <thead>
      <tr>
        <th>Product Type</th>
        <th>Zone</th>
        <th>Unit</th>
        <th>Value</th>
        <th>Comments</th>
        <th><a href="javascript:;" type="button" class="btn btn-primary addRow" >+</a> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>
        <select class="form-control" id="selectProduct" name="product_type[]" required focus>
        <option value="" disabled selected>Product Type</option>          
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
        <option value="Strawberry - Albion">Strawberry - Albion</option>  
        <option value="Strawberry - Aurora Karima">Strawberry - Aurora Karima</option>
        <option value="Strawberry - Bravura">Strawberry - Bravura</option>
        <option value="Strawberry - Carbillo">Strawberry - Carbillo</option>
        <option value="Strawberry - Furore">Strawberry - Furore</option>
        <option value="Strawberry - Murano">Strawberry - Murano</option>
        <option value="Strawberry - San Andreas">Strawberry - San Andreas</option>
        </select>  
        </td>
      <td><select type="text" name="zone[]" class="form-control" placeholder="Enter Zone" required focus>
      <option value="" disabled selected>Select Zone</option>          
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option> 
      </td>       <td><select type="text" name="unit[]" class="form-control" placeholder="Enter Unit" required focus>
        <option value="" disabled selected>Select Unit</option>          
            <option value="KG">KG</option>
            <option value="Boxes">Boxes</option>
        </td>
         <td><input type="decimal" name="value[]" class="form-control" placeholder="Enter KG/Boxes" /></td>
         <td><input class="form-control" type="text" name="comment[]" class="form-control" placeholder="Addln Comments"/></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
     </tbody>
  </table>
</div>
<br />
<div class="form-group w-25">
    <input style="position: relative; left: 250px" type="submit" value="Submit" class="btn btn-primary" />
    </form>
   </div>

    
  </form>
</div>
</div>
  <script>
$('thead').on('click', '.addRow', function(){
    var tr='<tr>'+
    '<td>'+
        '<select class="form-control" id="selectProduct" name="product_type[]" required focus>'+
        '<option value="" disabled selected>Product Type</option>          '+
        '<option value="Candy">Candy</option>'+
        '<option value="Cocktail">Cocktail</option>'+
        '<option value="COV">COV</option>'+
        '<option value="COV Class_2">COV Class_2</option>'+
        '<option value="COV Orange">COV Orange</option>'+
        '<option value="COV Yellow">COV Yellow</option>'+
        '<option value="Heirloom">Heirloom</option>'+
        '<option value="Mixed Candy">Mixed Candy</option>'+
        '<option value="Orange TOV">Orange TOV</option>'+
        '<option value="Pink TOV">Pink TOV</option>'+
        '<option value="Plum">Plum</option>'+
        '<option value="Plum Class_2">Plum Class_2</option>'+
        '<option value="Round">Round</option>'+
        '<option value="Round Class_2">Round Class_2</option>'+
        '<option value="Strabena">Strabena</option>'+
        '<option value="TOV">TOV</option>'+
        '<option value="Yellow TOV">Yellow TOV</option>'+
        '<option value="Yoom">Yoom</option>'+
        '<option value="Strawberry - Albion">Strawberry - Albion</option>  '+
        '<option value="Strawberry - Aurora Karima">Strawberry - Aurora Karima</option>'+
        '<option value="Strawberry - Bravura">Strawberry - Bravura</option>'+
        '<option value="Strawberry - Carbillo">Strawberry - Carbillo</option>'+
        '<option value="Strawberry - Furore">Strawberry - Furore</option>'+
        '<option value="Strawberry - Murano">Strawberry - Murano</option>'+
        '<option value="Strawberry - San Andreas">Strawberry - San Andreas</option>'+
        '</select>  '+
        '</td>'+
      '<td><select type="text" name="zone[]" class="form-control" placeholder="Enter Zone" required focus>'+
      '<option value="" disabled selected>Select Zone</option>          '+
        '<option value="A">A</option>'+
        '<option value="B">B</option>'+
        '<option value="C">C</option> '+
      '</td>       <td><select type="text" name="unit[]" class="form-control" placeholder="Enter Unit" required focus>'+
        '<option value="" disabled selected>Select Unit</option>          '+
          '  <option value="KG">KG</option>'+
         '   <option value="Boxes">Boxes</option>'+
        '</td>'+
         '<td><input type="decimal" name="value[]" class="form-control" placeholder="Enter KG/Boxes" /></td>'+
         '<td><input class="form-control" type="text" name="comment[]" class="form-control" placeholder="Addln Comments"/></td>'+
        '<td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>'+
      '</tr>';

        $('tbody').append(tr);
});

$('tbody').on('click', '.deleteRow', function(){
    $(this).parent().parent().remove();
});

</script>
@endsection
