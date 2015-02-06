@extends('layouts.general')

@section('title-meta')

	<title>Botany-AdmissionTestHub-A complete solution for your admission preparation</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

@stop


@section('content')


<div class="section-content page-banner-section2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>জীববিজ্ঞান - প্রথম পত্র</h1>
						</div>
					</div>
				</div>
			</div>

	
<div class="row">
	<div class="col-md-3">
		<div id='cssmenu'>
			<ul>
			   <li>সূচিপত্র</li>
			   <li class='last'><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোনটিই-নয়/নির্দেশিকা/lecture'><span>নির্দেশিকা</span></a></li>
			   <li class='has-sub'><a href='#'><span>কোষ ও এর গঠন</span></a>
			      <ul>
			         <li><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোষ-ও-এর-গঠন/গুরুত্বপূর্ণ-বিষয়াবলী/lecture'><span>গুরুত্বপূর্ণ বিষয়াবলী</span></a></li>
			         <li><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোষ-ও-এর-গঠন/জেনে-রাখা-ভালো/lecture'><span>জেনে রাখা ভালো</span></a></li>
			         <li><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোষ-ও-এর-গঠন/সম্ভাব্য-প্রশ্ন/question'><span>সম্ভাব্য প্রশ্ন ও উত্তর</span></a></li>
			         <li><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোষ-ও-এর-গঠন/দক্ষতার-পরীক্ষা/question'><span>দক্ষতার পরীক্ষা</span></a></li>
			         <li class='last'><a class='ajax' href='জীববিজ্ঞান-প্রথম-পত্র/কোষ-ও-এর-গঠন/আগের-বছরের-প্রশ্ন/question'><span>আগের বছরের প্রশ্ন ও উত্তর</span></a></li>
			      </ul>
			   </li>
			   <li class='has-sub'><a href='#'><span>কোষ ও এর গঠ</span></a>
			      <ul>
			         <li><a class='ajax' href='#'><span>গুরূত্তপূর্ন বিষয়াবল</span></a></li>
			         <li><a class='ajax' href='#'><span>জেনে রাখা ভালো</span></a></li>
			         <li><a class='ajax' href='#'><span>সম্ভাব্য প্রশ্ন ও উত্তর</span></a></li>
			         <li><a class='ajax' href='#'><span>দক্ষতার পরীক্ষা</span></a></li>
			         <li class='last ajax'><a class='ajax' href='#'><span>আগের বছরের প্রশ্ন ও উত্তর</span></a></li>
			      </ul>
			   </li>
			   <li class='has-sub'><a href='#'><span>কোষ ও এর গঠ</span></a>
			      <ul>
			         <li><a class='ajax' href='#'><span>গুরূত্তপূর্ন বিষয়াবল</span></a></li>
			         <li><a class='ajax' href='#'><span>জেনে রাখা ভালো</span></a></li>
			         <li><a class='ajax' href='#'><span>সম্ভাব্য প্রশ্ন ও উত্তর</span></a></li>
			         <li><a class='ajax' href='#'><span>দক্ষতার পরীক্ষা</span></a></li>
			         <li class='last'><a class='ajax' href='#'><span>আগের বছরের প্রশ্ন ও উত্তর</span></a></li>
			      </ul>
			   </li>

			</ul>
		</div>
	</div>

	<div class="col-md-9">

		<div id="display-window">
			
			<div class="content-window">

			</div>

			<div class="loader">

				<img src="{{ url('/theme/images/ajax-loader.gif') }}" />

			</div>

		</div>
	</div>

</div>


@stop