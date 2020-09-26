@extends('layouts.app')
@section('content')
        <div class="col-md-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('public/frontend/img/lab_class.jpg') }}" alt="lab_class">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/ece_building.jpg') }}" alt="ece_building">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/welcom.jpg') }}" />
                    </div>

                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="slide-left-icon">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="slide-left-icon">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--<h2>About</h2>-->
            <p>&nbsp;</p>
            <p>
                The Department of Computer Science and Engineering (CSE) of <a href="#" target="_blank">Bangladesh University
                    of Engineering and Technology</a> (BUET) is the first department of
                its kind in Bangladesh. BUET offers Bachelors, Masters, and Ph.D. Degree in Computer Science and Engineering.
                The Education of CSE BUET is world class in both the Curricula and Research activity.<br>
                The best students from all over Bangladesh join this prestigious department. The highly competitive
                environment, world-class facilities, and the hard-working faculties nourish every student to be a prime of the
                field. Currently there are about 700 students studying in Undergraduate Program and about 400 students in
                Graduate Program.<br>
                To know more on CSE BUET, please navigate the <a class="" href="#" role="button"> details &raquo;</a>.
            </p>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default news-panel">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#news"><strong>CSE News</strong></a></li>
                    <li class=""><a href="#research"><strong>CSE Research Update</strong></a></li>
                </ul>
                <div class="tab-content">
                    <div id="news" class="tab-pane fade fade in active">
                        <div class="panel-body">
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Top 4 places in ICPC Dhaka
                                    Regional 2019 achieved by BUET
                                    teams</a><i class="news-date"> (2019-11-17) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Initial Environmental
                                    Examination (Draft): Improving
                                    Computer and Software Engineering Tertiary Education Project, BUET</a><i class="news-date">
                                    (2019-08-03) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Talk by Dr. Hasan</a><i
                                    class="news-date"> (2019-07-29)
                                </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Postgraduate Admission
                                    Notice, April 2019</a><i class="news-date"> (2019-05-15) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Professors of CSE, BUET
                                    Published Books Titled
                                    'Structured C/C++ Programming' in English and Bengali Language</a><i class="news-date"> (2019-05-06)
                                </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Internship Opportunity</a><i
                                    class="news-date">
                                    (2019-04-15) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Postgraduate Admission
                                    Notice, October 2018</a><i class="news-date"> (2018-10-29) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Ph.D. Admission Notice,
                                    April 2018</a><i class="news-date"> (2018-04-27) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Postgraduate Admission
                                    Notice, October 2017</a><i class="news-date"> (2017-09-17) </i></p>
                            <p><a target="_blank" href="#"> <i class="glyphicon glyphicon-pushpin"></i> Dr. Tanzima Hashem received
                                    award for innovative research
                                    in developing countries</a><i class="news-date"> (2017-03-20) </i></p>

                            <p>&nbsp;</p>
                            <p><a class="moodle-site-news" target="_blank" href="#">Moodle Site News</a></p>
                            <p><a class="all-news" target="_blank" href="#">All News</a></p>
                        </div>
                    </div>
                    <div id="research" class="tab-pane">
                        <div class="panel-body">
                            <p><i class='glyphicon glyphicon-pushpin'></i>A paper of a graduate student based on graduate research
                                has been accepted to IEEE Globecom 2019. </p>
                            <p><i class='glyphicon glyphicon-pushpin'></i>A paper of a graduate student has been accepted to IEEE
                                BigData 2019.</p>
                            <p><i class='glyphicon glyphicon-pushpin'></i>A paper based on a graduate research work has been
                                accepted to AAIM 2019.</p>
                            <p><i class='glyphicon glyphicon-pushpin'></i>A paper of a graduate student has been accepted to COCOON
                                2019.</p>
                            <p><i class='glyphicon glyphicon-pushpin'></i>Congratulations! The undergraduate thesis work of Ranak
                                Roy Chowdhury has been accepted in ICDE 2019!!</p>
                            <p><i class='glyphicon glyphicon-pushpin'></i>Congratulations! The undergraduate thesis work of
                                Bishwamittra Ghosh has been accepted in VLDB 2019!!</p>
                            <p><i class='glyphicon glyphicon-pushpin'></i> <a href='#'>Undergraduate research work of a group of
                                    students got published at the International Journal of Genomics.</a></p>
                            <p><i class='glyphicon glyphicon-pushpin'></i> <a href='#'>M.
                                    Sc. Engineering work of one CSE student gets accepted in IEEE Transactions on Cybernetics</a></p>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".nav-tabs a").click(function () {
                            $(this).tab('show');
                        });
                    });
                </script>
            </div>
        </div>
   @endsection
