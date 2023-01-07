@extends("layout")
@section("content")

<div>
<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 text-black prod__detail">
    <h2>{{$project->title}}</h2>
    <p><strong>Starting Date:</strong>{{date('j F, Y', $project->start_date)}}<br>
       <strong>Ending Date:</strong>{{date('j F, Y', $project->start_date)}}<br>
       <strong>Location:</strong>{{$project->location}}<br>
       <strong>Donor(s):</strong>{{$project->donor}}
    </p>

    <?php
	echo $project->description;
?>

 </div>
</div>
@endsection
