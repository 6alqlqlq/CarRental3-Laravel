@extends('layouts.layout')



@section ('Body')
       <div class="container"style="margin-top: 110px;">
    <div class="page-body">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center" style="margin-bottom: 30px;"></h2>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="about-section">
                    <div class="inner-width">
                        <h1 class="text-center">About Us</h1>
                        <div class="border"></div>
                        <div class="about-section-row">
                            <div class="about-section-col">
                                <div class="about">
                                    <h5 class="text-center" style="margin-top: 50px;">
                                        About us ! much info very lol 								
                                    </h5>
                                </div>
                            </div>
                            <div class="about-section-col">
                                <div class="skills">
                                    <div class="skill">
                                        <div class="title">Disel</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:20%">20%</div>
                                        </div>
                                    </div>
									<div class="skill">
                                        <div class="title">Gasoline</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:40%">40%</div>
                                        </div>
                                    </div>

                                    <div class="skill">
                                        <div class="title">Electric Car</div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:40%">40%</div>
                                        </div>
                                    </div>
											<h5 class="text-center" style="margin-top: 50px;">
												Type of chassis
											</h5>
                                    <div class="skill">
                                        <div class="title">Sedan Cars</div>
                                        <div class="progress">
											<div class="progress-bar" style="width:30%">30%</div>
										</div>
                                    </div>
									<div class="skill">
                                        <div class="title">hatchback Cars</div>
                                        <div class="progress">
											<div class="progress-bar" style="width:20%">20%</div>
										</div>
                                    </div>
									<div class="skill">
                                        <div class="title">Jeeps Cars</div>
                                        <div class="progress">
											<div class="progress-bar" style="width:40%">40%</div>
										</div>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="hidden-xs hidden-sm pull-right">
                    <img src="{{'img/about-1.jpg'}}" alt="Car image" class="img-responsive" style="height:200px; margin-bottom:50px; border-radius: 5px;" />
                    <img src="{{'img/about-2.jpg'}}" alt="Car image" class="img-responsive" style="height:200px; margin-bottom:50px; border-radius: 5px;" />
                    <img src="{{'img/about-3.jpg'}}" alt="Car image" class="img-responsive" style="height:200px; margin-bottom:50px; border-radius: 5px;" />
                </div>
            </div>
        </div>

    </div>
</div>
@endsection      