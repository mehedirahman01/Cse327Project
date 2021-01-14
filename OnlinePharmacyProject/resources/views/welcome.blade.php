@extends('layouts.app')
@section('content')

@if(isset($page_name)&& $page_name=="welcome")
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<a href="#"><img style="width:100%" src="/images/med.jpg" alt="special offers"/></a>
					<div class="carousel-caption">
                        <h3>Get Vitamins at 25% discount</h3>
                        <p></p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img style="width:100%" src="/images/med2.jpg" alt=""/></a>
					<div class="carousel-caption">
                        <h3>get your daily need medicines at 10% discount</h3>
                        <p>Save Money</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img src="/images/doctor.jpg" alt=""/></a>
					<div class="carousel-caption">
                        <h3>Need Doctors? </h3>
                        <p>Coming soon..</p>
					</div>

				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
</div>
@endif

<div id="mainBody">
	<div class="container">
		<div class="row">
			<!-- Sidebar ================================================== -->

			<!-- Sidebar end=============================================== -->
			<div class="span9">

				<h4>Latest Medicines </h4>
				<ul class="thumbnails">
                    @foreach ($newMedicines as $medicine)
					<li class="span3">
						<div class="thumbnail">
							<a  href="#">
                                <?php $medicineImagePath= 'images/medicine_images/'.$medicine['medicineImage']; ?>
                                @if (!empty($medicine['medicineImage']) && file_exists($medicineImagePath))
                                <img src="{{asset($medicineImagePath)}}" alt=""/>
                                @else
                                <img src="images/medicine_images/no_image.jpg" alt=""/>
                                @endif
                            </a>
							<div class="caption">
								<h5>{{$medicine['medicineName']}}</h5>
								<p>
									{{$medicine['generic']}}
								</p>

								<h4 style="text-align:center"><a class="btn" href="/medicine/{{$medicine['id']}}">View</a> <a class="btn" href="#">Add to Cart</i></a> <a class="btn btn-primary" href="#">{{$medicine['medicinePrice']}} Tk</a></h4>
							</div>
						</div>
					</li>
                @endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>



<br>
<br>
@endsection
