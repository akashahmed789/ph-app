
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
  
  
  <form action="{{url('leafy_shelf_lives')}}"  method="post" enctype="multipart/form-data">
   {{csrf_field()}}
   
   <div><H4 >  Add Shelf Life Testing Leafy Greens</H4></div>

   <div align="middle">
   <a href="{{route('leafy_shelf_lives.index')}}" class="btn btn-primary">View Shelf Life Testing</a>
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
    <label class="col-sm-2 col-form-label">Date of Testing</label>
    <input class="form-control w-25" type="date" name="testing_date" value="<?php echo date('Y-m-d'); ?>"/>
  </div> 
  
  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Date Harvested</label>
    <input class="form-control w-25" type="date" name="date_harvested" value=""/>
  </div> 
  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Day of Testing</label>
        <select class="form-control w-25" id="selectProduct" name="day_of_testing" required focus>
        <option value="" disabled selected>Day of Testing</option>          
        <option value="Day 1">Day 1</option>
        <option value="Day 4">Day 4</option>
        <option value="Day 6">Day 6</option>
        <option value="Day 8">Day 8</option>
        <option value="Day 11">Day 11</option>
        <option value="Day 13">Day 13</option>
        </select>  
        </div>
  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Product Type</label>
        <select class="form-control w-25" id="selectProduct" name="product_type" required focus>
        <option value="" disabled selected>Product Type</option>          
        <option value="Red lettuce">Red lettuce</option>
        <option value="Green lettuce">Green lettuce</option>
        <option value="Baby Spinach">Baby Spinach</option>
        <option value="Rucola">Rucola</option>
        <option value="Mixed Salad">Mixed Salad</option>
        <option value="Green Tatsoi">Green Tatsoi</option>
        <option value="Red Totsoi">Red Totsoi</option>
        <option value="Mix Kales">Mix Kales</option>
        <option value="Green kale">Green kale</option>
        <option value="Caltivated Rucola">Caltivated Rucola</option>
        <option value="Sweet Genovess">Sweet Genovess</option>
        <option value="Rubi">Rubi</option>
        <option value="Green Fire">Green Fire</option>
        <option value="Bullas Blood">Bullas Blood</option>
        <option value="Red chard">Red chard</option>
        <option value="wasabina improved">wasabina improved</option>
        <option value="Russian kale">Russian kale</option>
        <option value="Red Russian">Red Russian</option>
        <option value="Red carpet">Red carpet</option>
        <option value="Red drgon">Red drgon</option>
        <option value="kale Scarlet">kale Scarlet</option>
        <option value="Pak choi">Pak choi</option>
        <option value="Gibbard Rz">Gibbard Rz</option>
        <option value="Crunchy Red">Crunchy Red</option>
        <option value="Warhol Rz">Warhol Rz</option>
        <option value="Crystal red lettuce/44CL5001">Crystal red lettuce/44CL5001</option>
        <option value="79-M/8166">79-M/8166</option>
        <option value="Bonarda Rz">Bonarda Rz</option>
        <option value="Frisee Lettuce">Frisee Lettuce</option>
        <option value="Curnchy Green Lettuce/ Exaudio">Curnchy Green Lettuce/ Exaudio</option>
        <option value="Oak leaf">Oak leaf</option>
        <option value="Lob jot">Lob jot</option>
        <option value="Curnchy Red Lettuce/ Binex">Curnchy Red Lettuce/ Binex</option>
        </select>  
        </div>
        
  <br />

  <div class="form-group row">
  <table class="table">
    <thead>
      <tr>
        <th>Smell</th>
        <th>Texture</th>
        <th>Cracks</th>
        <th>Presence of Wrinkles</th>
        <th>Color</th>
        <th>Presence of Spots</th>
        <th>Dryness</th>
        <th>Crunch</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        <select class="form-control" id="selectProduct" name="smell" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="1">1 - Best</option>         
        <option value="2">2 - Good</option>         
        <option value="3">3 - Moderate</option>         
        <option value="4">4 - Poor</option>         
        <option value="5">5 - Worst</option>  
        </select></td>
        <td>
        <select class="form-control" id="selectProduct" name="texture" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="1">1 - Best</option>         
        <option value="2">2 - Good</option>         
        <option value="3">3 - Moderate</option>         
        <option value="4">4 - Poor</option>         
        <option value="5">5 - Worst</option>  
        </select></td>
        <td>
        <select class="form-control" id="selectProduct" name="cracks" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="Yes">Yes</option>         
        <option value="No">No</option>   
        </select></td>
        <td><select class="form-control" id="selectProduct" name="wrinkles" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="Yes">Yes</option>         
        <option value="No">No</option>   
        </select></td>
        <td><select class="form-control" id="selectProduct" name="color" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="Normal">Normal</option>            
        <option value="Yellowness">Yellowness</option>         
        <option value="Faded Color">Faded Color</option>   
        </select></td>
        <td><select class="form-control" id="selectProduct" name="spots" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="Yes">Yes</option>         
        <option value="No">No</option>   
        </select></td>
        <td>
        <select class="form-control" id="selectProduct" name="dryness" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="1">1 - Best</option>         
        <option value="2">2 - Good</option>         
        <option value="3">3 - Moderate</option>         
        <option value="4">4 - Poor</option>         
        <option value="5">5 - Worst</option>   
        </select></td>
        <td>
        <select class="form-control" id="selectProduct" name="crunch" required focus>
        <option value="" disabled selected>Choose Rank</option>        
        <option value="1">1 - Best</option>         
        <option value="2">2 - Good</option>         
        <option value="3">3 - Moderate</option>         
        <option value="4">4 - Poor</option>         
        <option value="5">5 - Worst</option>   
        </select></td>        
        <td><textarea  class="form-control" white-space="pre-wrap" type="text"  name="remarks" placeholder="Remarks" rows="1" ></textarea></td>
      
      </tr>
      
    </tbody>
  </table>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Select Image for Upload</label>
     <tr> <td width="30"><input type="file" name="image" /></td></tr>
   
     <!--  <input type="file" name="image" class="custom-file_input">
       <label class ="custom-file-label"> Choose file</lable>-->
    
  </div>
<br />
<div class="form-group w-25">
    <input style="position: relative; left: 250px" type="submit" value="Submit" class="btn btn-primary" />
    </form>
   </div>

    
  </form>
</div>
</div>
@endsection