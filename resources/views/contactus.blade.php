@extends('layouts.layout')

@section ('Body')
	<div class="container" style="margin-top: 120px;">
		<div class="page-body">
			<div class="row" style="margin-bottom: 190px;">
            <div class="col-md-5">
                <h2 class="text-center" style="margin-bottom: 30px; "></h2>
                <h4>Contact form</h4>
                <br />

            <form method="post" action="{{ route('contactus.store') }}">
			    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />

                    </div>
                    <div class="form-group ">
                        <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
                    </div>
                    <div class="form-group ">
                        <input type="text" name="subject" class="form-control" placeholder="Subject *"  />
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="message" placeholder="Your Message *" required></textarea>

                    </div>


                <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />
            </div>
	<div class="col-md-offset-2 col-md-5 ml-5">
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
