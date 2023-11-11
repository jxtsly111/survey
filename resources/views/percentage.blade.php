<!doctype html>
<html lang="en">
  <head>
  	<title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('percent/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">PERCENTAGES OF DECISIONS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>Electoral Area</th>
						      <th>Percentage Of YES</th>
						      <th>Percentage Of SOMEWHAT</th>
                              <th>Percentage Of NO</th>
						    </tr>
						  </thead>
						  <tbody>
                @foreach ($percentages as $percentage)
                <tr>
                    <th scope="row">{{ $percentage->electoral_area }}</th>
                    <td>{{ number_format($percentage->percentage_yes, 2) }}%</td>
                    <td>{{ number_format($percentage->percentage_somewhat, 2) }}%</td>
                    <td>{{ number_format($percentage->percentage_no, 2) }}%</td>
                </tr>
                @endforeach

                            {{-- <tr>
                                <th scope="row"> NYANYANO KAKRABA ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                            </tr>
                              <tr>
                                <th scope="row">BUDUMBURAM ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">NYANYANO ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">POTSIN OKYEREKO  ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">BUDUTTA ODUMASE  ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">AKOTSI OJOBI AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">DOMINASE ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>
                              <tr>
                                <th scope="row">FETTEH ANAPANSU ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>

                              <tr>
                                <th scope="row">DAMPASE ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>

                              <tr>
                                <th scope="row">UPPER NYANYANO  ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr>

                              <tr>
                                <th scope="row">LOWER NYANYANO (Onyinyase Enyaankor)  ELECTORAL AREA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>markotto@email.com</td>
                              </tr> --}}
			
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('percent/js/jquery.min.js')}}"></script>
  <script src="{{asset('percent/js/popper.js')}}"></script>
  <script src="{{asset('percent/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('percent/js/main.js')}}"></script>

	</body>
</html>

