<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>AGENDA 700 SURVEY FORMS</title>

    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" media="all">

    <style>
        .mag{
            margin-bottom: 10px
        }
    </style>
</head>

<body>
  

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">   
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">AGENDA 700 Survey Forms</h2>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
    <div class="alert alert-email-error">
        {{ session('error') }}
    </div>
@endif 
                <div id="loader" class="loader" data-stop-loader="{{ session('stop_loader') ? 'true' : 'false' }}"></div> 
                <div class="card-body">
                    <ul class="list-group list-group-flush p-b-30">
                        <li class="list-group-item">YES represent Green</li>
                        <li class="list-group-item">SOMEWHAT represent Yellow</li>
                        <li class="list-group-item">NO represent RED</li>
                      </ul>
                    <form method="POST" action="{{ route('registration.submit') }}">@csrf
                        <div class="form-row">
                            <div class="name">Electoral Area</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="electoral_area">
                                            <option disabled="disabled" selected="selected">Choose Electoral Area </option>
                                            <option>PANFORKROM MAMPONG ELECTORAL AREA</option>
                                            <option> NYANYANO KAKRABA ELECTORAL AREA</option>
                                            <option>BUDUMBURAM ELECTORAL AREA</option>
                                            <option>NYANYANO ELECTORAL AREA</option>
                                            <option>POTSIN OKYEREKO  ELECTORAL AREA</option>
                                            <option>BUDUTTA ODUMASE  ELECTORAL AREA</option>
                                            <option>AKOTSI OJOBI AREA</option>
                                            <option>DOMINASE ELECTORAL AREA</option>
                                            <option>FETTEH ANAPANSU ELECTORAL AREA</option>
                                            <option>DAMPASE ELECTORAL AREA</option>
                                            <option> UPPER NYANYANO  ELECTORAL AREA</option>
                                            <option> LOWER NYANYANO (Onyinyase Enyaankor)  ELECTORAL AREA</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                         
                        <div class="form-row m-b-55">
                            <div class="name">Polling Stations</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="polling"  value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Positions</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="categories">
                                            <option disabled="disabled" selected="selected">Choose Positions</option>
                                            <option>Chairman</option>
                                            <option>Secretary</option>
                                            <option>Organizer</option>
                                            <option>Women Organizer</option>
                                            <option>Youth Organizer</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name"  value="{{ old('first_name') }}">
                                            <label class="label--desc">first name</label>
                                           
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name"  value="{{ old('last_name') }}">
                                            <label class="label--desc">last name</label>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Decision</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="decisions">
                                            <option disabled="disabled" selected="selected">Choose Decision</option>
                                            <option>Yes</option>
                                            <option>Somewhat</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        
                        <div class="mag" >
                            <button class="btn btn--radius-2 btn--red" type="submit" style="background-color: #da1;">Submit</button>
                        </div>

                        <div class="mag" >
                            <a class="btn btn--radius-2 btn--red" href="{{ route('registration.display') }}" style="background-color: blue;">Display All Data</a>
                        </div>

                        <div class="mag" >
                            <a class="btn btn--radius-2 btn--red" href="{{ route('pie-chart') }}" style="background-color:blue;">View Data Percentages</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<style>
    .mst_flex{
        display: flex;
        align-items: center;
        
    }
    .mst_flex input{
        padding-left: -30px;
    }
</style>