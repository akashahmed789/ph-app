
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
  

  <form method="post" action="{{url('plant_datas')}}">
   {{csrf_field()}}
   
   <div><H4 >  Add Plant Data </H4></div>

   <div align="middle">
   <a href="{{route('plant_datas.index')}}" class="btn btn-primary">View History</a>
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
 
  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Product Type</label>
      <select class="form-control w-25" id="selectCategory" name="product_type" required focus>
        <option value="TOV" selected>TOV</option>        
        <option value="COV">COV</option>       
        <option value="Candy">Candy</option>
      </select>
  </div>

  <br />
  <div class="form-group row">
  <table class="table">
    <thead>
      <tr>
        <th>Metric</th>
        <th>Plant 1</th>
        <th>Plant 2</th>
        <th>Plant 3</th>
        <th>Plant 4</th>
        <th>Plant 5</th>
        <th><a href="javascript:;" type="button" class="btn btn-primary addRow" >+</a> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="DotsDevCluster"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="DotsFlwCluster"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="FlwHeight"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="FlwOpen"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="FlwPollinated"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="PolScore"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Stem diameter"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="ClusterStemDiameter"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Length growth"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="DiaF1"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="DiaF2"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="DiaF3"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Fruiting cluster length"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Fruiting cluster stem length"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>

      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Ripening speed"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Leaf length"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>

      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Leaf Width"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Leaf Area"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>

      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Total Leaves Big"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
        <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
      </tr>
      <tr>
      <td><input type="text" name="metric[]" class="form-control" value="Total leaves Small"/></td>
      <td><input type="decimal" name="pl_1[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_2[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_3[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_4[]" class="form-control" /></td>
      <td><input type="decimal" name="pl_5[]" class="form-control" /></td>
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
    '<td><input type="text" name="metric[]" class="form-control"/></td>'+
    '<td><input type="decimal" name="pl_1[]" class="form-control" /></td>'+
      '<td><input type="decimal" name="pl_2[]" class="form-control" /></td>'+
      '<td><input type="decimal" name="pl_3[]" class="form-control" /></td>'+
      '<td><input type="decimal" name="pl_4[]" class="form-control" /></td>'+
      '<td><input type="decimal" name="pl_5[]" class="form-control" /></td>'+
        '<td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>'+
        '</tr>';

        $('tbody').append(tr);
});

$('tbody').on('click', '.deleteRow', function(){
    $(this).parent().parent().remove();
});

</script>
@endsection