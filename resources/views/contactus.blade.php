@extends('layouts.layout')
@section ('Body')
	<div class="container" style="margin-top: 120px;">
		<div class="page-body">
			<div class="row" style="margin-bottom: 190px;">
            <div class="col-md-5">
                <h2 class="text-center" style="margin-bottom: 30px; "></h2>
                <h4>Contact form</h4>                
                <br />
					<form action="">
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
						</div>
						<div class="form-group">
							<label for="pwd">Subject:</label>
							<input type="password" class="form-control" placeholder="Enter password" id="pwd">
						</div>
						<div class="form-group">
							<label for="comment">Comment:</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
						
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
           </div>
		   
	<div class="col-md-offset-2 col-md-5">
       <h2 class="text-center" style="margin-bottom: 30px;"></h2>
           <h4>Contact information</h4>
                <address>
                    <p>
                        <strong>Phone:</strong> +359 000 0000
                    </p>
                    <p>
                        <strong>Email:</strong> <a href="mailto: ">test@test.com</a>
                    </p>
                    <p>
                        <strong>Business hours:</strong> 09:00 - 18:00
                    </p>
                    <p>
                        <strong>Location:</strong> Street 123, Sofia, Nqkude tam
                    </p>
                </address>
                <div id="map" style="width:100%; height:360px; border-radius: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var address = new google.maps.LatLng(42.6542013, 23.3464076);

    function initialize() {
        var mapProperties = {
            center: address,
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), mapProperties);

        var marker = new google.maps.Marker({
            position: address,
        });

        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection  