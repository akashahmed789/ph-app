
@extends('layouts.app')


@section('header')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- new additions -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" type="text/css" /> 
    
    
     <!-- new additions -->

</head>
<style>
div {
  padding-right: 30px;
  padding-left: 40px;
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
  <br />
  <h3 aling="center">Add Quality Measures</h3>
  <br />
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
 
   <div class="form-group w-25">
   <select class="form-control" id="selectCategory" name="site_name" required focus>
    <option value="Al Ain" selected>Al Ain</option>        
    <option value="Nahel">{{"Nahel"}}</option>
  </select>
  </div>

  <div class="form-group w-25">
    <input type="date" name="date_received" class="form-control" id="dob"  placeholder="Enter Date"/>
  </div>

  <div class="form-group w-25">  
       <select class="form-control" name="row_num" required focus>
       <option value="" disabled selected>Select Row Number</option> 
       <option value="1">{{"1"}}</option>
       <option value="2">{{"2"}}</option>
       <option value="3">{{"3"}}</option>
       <option value="4">{{"4"}}</option>
        <option value="5">{{"5"}}</option>
      <option value="6">{{"6"}}</option>
      <option value="7">{{"7"}}</option>
      <option value="8">{{"8"}}</option>
      <option value="9">{{"9"}}</option>
      <option value="10">{{"10"}}</option>
      <option value="11">{{"11"}}</option>
      <option value="12">{{"12"}}</option>
      <option value="13">{{"13"}}</option>
      <option value="14">{{"14"}}</option>
      <option value="15">{{"15"}}</option>
      <option value="16">{{"16"}}</option>
      <option value="17">{{"17"}}</option>
      <option value="18">{{"18"}}</option>
      <option value="19">{{"19"}}</option>
      <option value="20">{{"20"}}</option>
      <option value="21">{{"21"}}</option>
      <option value="22">{{"22"}}</option>
      <option value="23">{{"23"}}</option>
      <option value="24">{{"24"}}</option>
      <option value="25">{{"25"}}</option>
      <option value="26">{{"26"}}</option>
      <option value="27">{{"27"}}</option>
      <option value="28">{{"28"}}</option>
      <option value="29">{{"29"}}</option>
      <option value="30">{{"30"}}</option>
      <option value="31">{{"31"}}</option>
      <option value="32">{{"32"}}</option>
      <option value="33">{{"33"}}</option>
      <option value="34">{{"34"}}</option>
      <option value="35">{{"35"}}</option>
      <option value="36">{{"36"}}</option>
      <option value="37">{{"37"}}</option>
      <option value="38">{{"38"}}</option>
      <option value="39">{{"39"}}</option>
      <option value="40">{{"40"}}</option>
      <option value="41">{{"41"}}</option>
      <option value="42">{{"42"}}</option>
      <option value="43">{{"43"}}</option>
      <option value="44">{{"44"}}</option>
      <option value="45">{{"45"}}</option>
      <option value="46">{{"46"}}</option>
      <option value="47">{{"47"}}</option>
      <option value="48">{{"48"}}</option>
      <option value="49">{{"49"}}</option>
      <option value="50">{{"50"}}</option>
      <option value="51">{{"51"}}</option>
      <option value="52">{{"52"}}</option>
      <option value="53">{{"53"}}</option>
      <option value="54">{{"54"}}</option>
      <option value="55">{{"55"}}</option>
      <option value="56">{{"56"}}</option>
      <option value="57">{{"57"}}</option>
      <option value="58">{{"58"}}</option>
      <option value="59">{{"59"}}</option>
      <option value="60">{{"60"}}</option>
      <option value="61">{{"61"}}</option>
      <option value="62">{{"62"}}</option>
      <option value="63">{{"63"}}</option>
      <option value="64">{{"64"}}</option>
      <option value="65">{{"65"}}</option>
      <option value="66">{{"66"}}</option>
      <option value="67">{{"67"}}</option>
      <option value="68">{{"68"}}</option>
      <option value="69">{{"69"}}</option>
      <option value="70">{{"70"}}</option>
      <option value="71">{{"71"}}</option>
      <option value="72">{{"72"}}</option>
      <option value="73">{{"73"}}</option>
      <option value="74">{{"74"}}</option>
      <option value="75">{{"75"}}</option>
      <option value="76">{{"76"}}</option>
      <option value="77">{{"77"}}</option>
      <option value="78">{{"78"}}</option>
      <option value="79">{{"79"}}</option>
      <option value="80">{{"80"}}</option>
      <option value="81">{{"81"}}</option>
      <option value="82">{{"82"}}</option>
      <option value="83">{{"83"}}</option>
      <option value="84">{{"84"}}</option>
      <option value="85">{{"85"}}</option>
      <option value="86">{{"86"}}</option>
      <option value="87">{{"87"}}</option>
      <option value="88">{{"88"}}</option>
      <option value="89">{{"89"}}</option>
      <option value="90">{{"90"}}</option>
      <option value="91">{{"91"}}</option>
      <option value="92">{{"92"}}</option>
      <option value="93">{{"93"}}</option>
      <option value="94">{{"94"}}</option>
      <option value="95">{{"95"}}</option>
      <option value="96">{{"96"}}</option>
      <option value="97">{{"97"}}</option>
      <option value="98">{{"98"}}</option>
      <option value="99">{{"99"}}</option>
      <option value="100">{{"100"}}</option>
      <option value="101">{{"101"}}</option>
      <option value="102">{{"102"}}</option>
      <option value="103">{{"103"}}</option>
      <option value="104">{{"104"}}</option>
      <option value="105">{{"105"}}</option>
      <option value="106">{{"106"}}</option>
      <option value="107">{{"107"}}</option>
      <option value="108">{{"108"}}</option>
      <option value="109">{{"109"}}</option>
      <option value="110">{{"110"}}</option>
      <option value="111">{{"111"}}</option>
      <option value="112">{{"112"}}</option>
      <option value="113">{{"113"}}</option>
      <option value="114">{{"114"}}</option>
      <option value="115">{{"115"}}</option>
      <option value="116">{{"116"}}</option>
      <option value="117">{{"117"}}</option>
      <option value="118">{{"118"}}</option>
      <option value="119">{{"119"}}</option>
      <option value="120">{{"120"}}</option>
      <option value="121">{{"121"}}</option>
      <option value="122">{{"122"}}</option>
      <option value="123">{{"123"}}</option>
      <option value="124">{{"124"}}</option>
      <option value="125">{{"125"}}</option>
      <option value="126">{{"126"}}</option>
      <option value="127">{{"127"}}</option>
      <option value="128">{{"128"}}</option>
      <option value="129">{{"129"}}</option>
      <option value="130">{{"130"}}</option>
      <option value="131">{{"131"}}</option>
      <option value="132">{{"132"}}</option>
      <option value="133">{{"133"}}</option>
      <option value="134">{{"134"}}</option>
      <option value="135">{{"135"}}</option>
      <option value="136">{{"136"}}</option>
      <option value="137">{{"137"}}</option>
      <option value="138">{{"138"}}</option>
      <option value="139">{{"139"}}</option>
      <option value="140">{{"140"}}</option>
      <option value="141">{{"141"}}</option>
      <option value="142">{{"142"}}</option>
      <option value="143">{{"143"}}</option>
      <option value="144">{{"144"}}</option>
      <option value="145">{{"145"}}</option>
      <option value="146">{{"146"}}</option>
      <option value="147">{{"147"}}</option>
      <option value="148">{{"148"}}</option>
      <option value="149">{{"149"}}</option>
      <option value="150">{{"150"}}</option>
      <option value="151">{{"151"}}</option>
      <option value="152">{{"152"}}</option>
      <option value="153">{{"153"}}</option>
      <option value="154">{{"154"}}</option>
      <option value="155">{{"155"}}</option>
      <option value="156">{{"156"}}</option>
      <option value="157">{{"157"}}</option>
      <option value="158">{{"158"}}</option>
      <option value="159">{{"159"}}</option>
      <option value="160">{{"160"}}</option>
      <option value="161">{{"161"}}</option>
      <option value="162">{{"162"}}</option>
      <option value="163">{{"163"}}</option>
      <option value="164">{{"164"}}</option>
      <option value="165">{{"165"}}</option>
      <option value="166">{{"166"}}</option>
      <option value="167">{{"167"}}</option>
      <option value="168">{{"168"}}</option>
      <option value="169">{{"169"}}</option>
      <option value="170">{{"170"}}</option>
      <option value="171">{{"171"}}</option>
      <option value="172">{{"172"}}</option>
      <option value="173">{{"173"}}</option>
      <option value="174">{{"174"}}</option>
      <option value="175">{{"175"}}</option>
      <option value="176">{{"176"}}</option>
      <option value="177">{{"177"}}</option>
      <option value="178">{{"178"}}</option>
      <option value="179">{{"179"}}</option>
      <option value="180">{{"180"}}</option>
      <option value="181">{{"181"}}</option>
      <option value="182">{{"182"}}</option>
      <option value="183">{{"183"}}</option>
      <option value="184">{{"184"}}</option>
      <option value="185">{{"185"}}</option>
       </select>
  </div>

   <div class="form-group w-25">  
    <select class="form-control" id="selectProduct" name="product_type" required focus>
        <option value="" disabled selected>Select Product Type</option>        
        <option value="Candy">Candy</option>+
        <option value="Cocktail">Cocktail</option>+
        <option value="Candy/Swetela">Candy/Swetela</option>+
        <option value="Cocktail Brioso">Cocktail Brioso</option>+
        <option value="Cocktail/Campri">Cocktail/Campri</option>+
        <option value="COV">COV</option>+
        <option value="Intense Plum">Intense Plum</option>+
        <option value="Intense Plum Line 09">Intense Plum Line 09</option>+
        <option value="Intense Plum Line 10">Intense Plum Line 10</option>+
        <option value="Pink Fujemaru">Pink Fujemaru</option>+
        <option value="Pink kavakutchi">Pink kavakutchi</option>+
        <option value="Pink Rose">Pink Rose</option>+
        <option value="Strabena">Strabena</option>+
        <option value="TOV">TOV</option>+
        <option value="Yoom">Yoom</option>+ 
    </select>
  </div>
   <div class="form-group w-25">
   <input type="decimal" name="BRIX" class="form-control" placeholder="Enter BRIX" />    
   </div>
   <div class="form-group w-25">
   <input type="text" name="color" class="form-control" placeholder="Enter Color" />    
   </div>
   <div class="form-group w-25">
   <input type="decimal" name="weight" class="form-control" placeholder="Enter Weight" />    
   </div>
   <div class="form-group w-25">
   <input type="decimal" name="length" class="form-control" placeholder="Enter Length" />    
   </div>
   <div class="form-group w-25">
   <input type="decimal" name="width" class="form-control" placeholder="Enter Width" />    
   </div>
   <div class="form-group w-25">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>

@endsection
