
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
  

  <form method="post" action="{{url('overtimes')}}">
   {{csrf_field()}}
   
   <div><H4 >  Add OT Requests </H4></div>

   <div align="middle">
   <a href="{{route('overtimes.index')}}" class="btn btn-primary">Edit OT Hours</a>
   <br />
   <br />
   <br />
  </div>

<div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Site Name</label>
      <select class="form-control w-25" id="selectCategory" name="site_name" required focus>
        <option value="Al Ain" selected>Al Ain</option>        
        <option value="Nahel">{{"Nahel"}}</option>     
        <option value="KSA">{{"KSA"}}</option>
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
        <th>Employee</th>
        <th>Requested OT</th>
        <th>Reason</th>
        <th>Remarks</th>
        <th><a href="javascript:;" type="button" class="btn btn-primary addRow" >+</a> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><input type="text" name="employee[]" class="form-control" placeholder="Enter Employee" /></td>
      <td><input type="decimal" name="ot_requested[]" class="form-control" placeholder="Enter hours" /></td>
      <td><select type="text" name="reason[]" class="form-control" placeholder="Enter Reason" required focus>
      <option value="" disabled selected>Select Workstation</option>          
        <option value="Excess orders">Excess orders</option>
        <option value="Quality issues">Quality issues</option>
        <option value="Shortage of labour">Shortage of labour</option>
        <option value="Cleaning">Cleaning</option>
        <option value="Admin work">Admin work</option>
        <option value="Others">Others</option>
      </td>
      <td><input class="form-control" type="text" name="comment[]" class="form-control"  placeholder="Addln Comments"/></td>
  
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
      '<td><input type="text" name="employee[]" class="form-control" placeholder="Enter Employee" /></td>'+
      '<td><input type="decimal" name="ot_requested[]" class="form-control" placeholder="Enter hours" /></td>'+
      '<td><select type="text" name="reason[]" class="form-control" placeholder="Enter Reason" required focus>'+
      '<option value="" disabled selected>Select Workstation</option>          '+
        '<option value="Excess orders">Excess orders</option>'+
        '<option value="Quality issues">Quality issues</option>'+
        '<option value="Shortage of labour">Shortage of labour</option>'+
        '<option value="Cleaning">Cleaning</option>'+
        '<option value="Admin work">Admin work</option>'+
        '<option value="Others">Others</option>'+
      '</td>'+
      '<td><input class="form-control" type="text" name="comment[]" class="form-control"  placeholder="Addln Comments"/></td>'+  
      '<td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>'+
      '</tr>';

        $('tbody').append(tr);
});

$('tbody').on('click', '.deleteRow', function(){
    $(this).parent().parent().remove();
});

</script>
@endsection
