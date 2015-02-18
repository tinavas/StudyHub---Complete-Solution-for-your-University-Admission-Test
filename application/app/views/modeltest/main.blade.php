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
							<h1>মোডেল টেস্ট</h1>
						</div>
					</div>
				</div>
			</div>

	
<div class="row">
	<div class="col-md-3">
		<div id='cssmenu'>
			<ul>
			   <li>সূচিপত্র</li>
			   <li class='last'><a class='ajax' href='মোডেল-টেস্ট/মোডেল-টেস্ট-১'><span>মোডেল টেস্ট ১</span></a></li>
			   <li class='last'><a class='ajax' href='মোডেল-টেস্ট/মোডেল-টেস্ট-২'><span>মোডেল টেস্ট ২</span></a></li>
			   <li class='last'><a class='ajax' href='মোডেল-টেস্ট/মোডেল-টেস্ট-৩'><span>মোডেল টেস্ট ৩</span></a></li>
			   <li class='last'><a class='ajax' href='মোডেল-টেস্ট/মোডেল-টেস্ট-৪'><span>মোডেল টেস্ট ৪</span></a></li>
			   <li class='last'><a class='ajax' href='মোডেল-টেস্ট/মোডেল-টেস্ট-৫'><span>মোডেল টেস্ট ৫</span></a></li>
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