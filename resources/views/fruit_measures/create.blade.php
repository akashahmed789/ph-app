
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
  

  <form method="post" action="{{url('fruit_measures')}}">
   {{csrf_field()}}
   
   <div><H4 >  Add Quality Measures </H4></div>

   <div align="middle">
   <a href="{{route('fruit_measures.index')}}" class="btn btn-primary">View Quality Measures</a>
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

  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Date</label>
    <input class="form-control w-25" type="date" name="date_received" class="form-control" id="dob"  placeholder="Enter Date"/>
  </div>

  <div style="position: relative; left: 50px" class="form-group row">
    <label class="col-sm-2 col-form-label">Row number</label>
    <input class="form-control w-25" type="text" name="row_num" class="form-control" value=0 placeholder="Enter Row number"/>
  </div>
  <br />

  <div class="form-group row">
  <table class="table">
    <thead>
      <tr>
        <th>Product Type</th>
        <th>BRIX</th>
        <th>Color (L)</th>
        <th>Color (A)</th>
        <th>Color (B)</th>
        <th>Weight (gm)</th>
        <th>Length (mm)</th>
        <th>Width (mm)</th>
        <th>Pressure (PSI)</th>
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
        <option value="Heirloom">Heirloom</option>
        <option value="Mixed Candy">Mixed Candy</option>
        <option value="Nebula">Nebula</option>
        <option value="Orange TOV">Orange TOV</option>
        <option value="Plum">Plum</option>
        <option value="Round">Round</option>
        <option value="Strabena">Strabena</option>
        <option value="TOV">TOV</option>
        <option value="Yellow TOV">Yellow TOV</option>
                <option value="Brown Candy">Brown Candy</option>
                <option value="Green Candy">Green Candy</option>
                <option value="Pink Candy">Pink Candy</option>
        <option value="Orange Candy">Orange Candy</option>
        <option value="Yellow Candy">Yellow Candy</option>
        <option value="Yoom">Yoom</option>
        <option value="Strawberry - Albion">Strawberry - Albion</option>  
        <option value="Strawberry - Aurora Karima">Strawberry - Aurora Karima</option>
        <option value="Strawberry - Bravura">Strawberry - Bravura</option>
        <option value="Strawberry - Carbillo">Strawberry - Carbillo</option>
        <option value="Strawberry - Furore">Strawberry - Furore</option>
        <option value="Strawberry - Murano">Strawberry - Murano</option>
        <option value="Strawberry - San Andreas">Strawberry - San Andreas</option>
        <option value="Baby Spinach">Baby Spinach</option>
        <option value="Green Lettuce">Green Lettuce</option>
        <option value="Red lettuce">Red lettuce</option>
        <option value="Rucola">Rucola</option>
        <option value="Kale">Kale</option>
        <option value="Baby Spinach">Baby Spinach</option>
        <option value="Rucola LS">Rucola LS</option>
        <option value="Tatsoine Red">Tatsoine Red</option>
        <option value="Tatsoine Green">Tatsoine Green</option>
        <option value="Green Radish">Green Radish</option>
        <option value="Red Radish">Red Radish</option>
        <option value="Red Amaranth">Red Amaranth</option>
        <option value="Borage">Borage</option>
        <option value="Lemon Basil">Lemon Basil</option>
        <option value="Lemon Balm">Lemon Balm</option>
        <option value="Red Sorrel">Red Sorrel</option>
        <option value="Oakleaf Lettuce">Oakleaf Lettuce</option>
        <option value="Incised Green Lettuce">Incised Green Lettuce</option>
        <option value="Crystal Red Lettuce">Crystal Red Lettuce</option>
        <option value="Sorrel Red Veined">Sorrel Red Veined</option>
        <option value="Leaf Beet Bulls Blood">Leaf Beet Bulls Blood</option>
        <option value="Swiss Chard">Swiss Chard</option>
        <option value="Pak Choi Rubi">Pak Choi Rubi</option>
        <option value="Salavona Incised leaf - Exaudio">Salavona Incised leaf - Exaudio</option>
        <option value="Lettuce - 44-CL5001 RZ">Lettuce - 44-CL5001 RZ</option>
        <option value="Salanova multi leaf oak leaf">Salanova multi leaf oak leaf</option>
        <option value="Salanova Incised leaf sweet Crisp Frisee">Salanova Incised leaf sweet Crisp Frisee</option>
        <option value="Incised Red Lettuce">Incised Red Lettuce</option>
        <option value="Frisee Lettuce">Frisee Lettuce</option>
        <option value="Wasabi">Wasabi</option>

        </select>  
        </td>
        <td><input type="decimal" name="BRIX[]" class="form-control" placeholder="Enter BRIX" /></td>
        <td><input type="decimal" name="color_L[]" class="form-control" placeholder="Enter Color (L)" /></td>
        <td><input type="decimal" name="color_A[]" class="form-control" placeholder="Enter Color (A)" /></td>
        <td><input type="decimal" name="color_B[]" class="form-control" placeholder="Enter Color (B)" /></td>
        <td><input type="decimal" name="weight[]" class="form-control" placeholder="Enter Weight" /></td>
        <td><input type="decimal" name="length[]" class="form-control" placeholder="Enter Length" /></td>
        <td><input type="decimal" name="width[]" class="form-control" placeholder="Enter Width" /></td>
        <td><input type="decimal" name="pressure[]" class="form-control" placeholder="Enter Pressure" /></td>
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
        '<option value="Heirloom">Heirloom</option>'+
        '<option value="Mixed Candy">Mixed Candy</option>'+
        '<option value="Nebula">Nebula</option>'+
        '<option value="Orange TOV">Orange TOV</option>'+
        '<option value="Plum">Plum</option>'+
        '<option value="Round">Round</option>'+
        '<option value="Strabena">Strabena</option>'+
        '<option value="TOV">TOV</option>'+
        '<option value="Yellow TOV">Yellow TOV</option>'+
        '<option value="Orange Candy">Orange Candy</option>'+
                '<option value="Brown Candy">Brown Candy</option>'+
                '<option value="Green Candy">Green Candy</option>'+
                '<option value="Pink Candy">Pink Candy</option>'+
        '<option value="Yellow Candy">Yellow Candy</option>'+
        '<option value="Yoom">Yoom</option>'+
        '<option value="Strawberry - Albion">Strawberry - Albion</option>  '+
        '<option value="Strawberry - Aurora Karima">Strawberry - Aurora Karima</option>'+
        '<option value="Strawberry - Bravura">Strawberry - Bravura</option>'+
        '<option value="Strawberry - Carbillo">Strawberry - Carbillo</option>'+
        '<option value="Strawberry - Furore">Strawberry - Furore</option>'+
        '<option value="Strawberry - Murano">Strawberry - Murano</option>'+
        '<option value="Strawberry - San Andreas">Strawberry - San Andreas</option>'+
        '<option value="Baby Spinach">Baby Spinach</option>'+
        '<option value="Green Lettuce">Green Lettuce</option>'+
        '<option value="Red lettuce">Red lettuce</option>'+
        '<option value="Rucola">Rucola</option>'+
        '<option value="Kale">Kale</option>'+
        '<option value="Baby Spinach">Baby Spinach</option>'+
        '<option value="Rucola LS">Rucola LS</option>'+
        '<option value="Tatsoine Red">Tatsoine Red</option>'+
        '<option value="Tatsoine Green">Tatsoine Green</option>'+
        '<option value="Green Radish">Green Radish</option>'+
        '<option value="Red Radish">Red Radish</option>'+
        '<option value="Red Amaranth">Red Amaranth</option>'+
        '<option value="Borage">Borage</option>'+
        '<option value="Lemon Basil">Lemon Basil</option>'+
        '<option value="Lemon Balm">Lemon Balm</option>'+
        '<option value="Red Sorrel">Red Sorrel</option>'+
        '<option value="Oakleaf Lettuce">Oakleaf Lettuce</option>'+
        '<option value="Incised Green Lettuce">Incised Green Lettuce</option>'+
        '<option value="Crystal Red Lettuce">Crystal Red Lettuce</option>'+
        '<option value="Sorrel Red Veined">Sorrel Red Veined</option>'+
        '<option value="Leaf Beet Bulls Blood">Leaf Beet Bulls Blood</option>'+
        '<option value="Swiss Chard">Swiss Chard</option>'+
        '<option value="Pak Choi Rubi">Pak Choi Rubi</option>'+
        '<option value="Salavona Incised leaf - Exaudio">Salavona Incised leaf - Exaudio</option>'+
        '<option value="Lettuce - 44-CL5001 RZ">Lettuce - 44-CL5001 RZ</option>'+
        '<option value="Salanova multi leaf oak leaf">Salanova multi leaf oak leaf</option>'+
        '<option value="Salanova Incised leaf sweet Crisp Frisee">Salanova Incised leaf sweet Crisp Frisee</option>'+
        '<option value="Incised Red Lettuce">Incised Red Lettuce</option>'+
        '<option value="Frisee Lettuce">Frisee Lettuce</option>'+
        '<option value="Wasabi">Wasabi</option>'+

        '</select>  '+
        '</td>'+
        '<td><input type="decimal" name="BRIX[]" class="form-control" placeholder="Enter BRIX" /></td>'+
        '<td><input type="decimal" name="color_L[]" class="form-control" placeholder="Enter Color (L)" /></td>'+
        '<td><input type="decimal" name="color_A[]" class="form-control" placeholder="Enter Color (A)" /></td>'+
        '<td><input type="decimal" name="color_B[]" class="form-control" placeholder="Enter Color (B)" /></td>'+
        '<td><input type="decimal" name="weight[]" class="form-control" placeholder="Enter Weight" /></td>'+
        '<td><input type="decimal" name="length[]" class="form-control" placeholder="Enter Length" /></td>'+
        '<td><input type="decimal" name="width[]" class="form-control" placeholder="Enter Width" /></td>'+
        '<td><input type="decimal" name="pressure[]" class="form-control" placeholder="Enter Pressure" /></td>'+
        '<td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>'+
      '</tr>';

        $('tbody').append(tr);
});

$('tbody').on('click', '.deleteRow', function(){
    $(this).parent().parent().remove();
});

</script>
@endsection
