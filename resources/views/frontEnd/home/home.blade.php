@extends('frontEnd.master')

@section('title')
Home | DSHDC
@endsection


@section('mainContent')
    <div class="maincontent">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="maincontent-left">
                                <!-- main Slider Start -->
                                <div class="slider-area">
                                    <div class="main-slider owl-carousel">
                                        <div class="single-slider">
                                            <img src="{{asset("public/frontEnd/")}}/slider/3.jpg" />

                                        </div>
                                        <div class="single-slider">
                                            <img src="{{asset("public/frontEnd/")}}/slider/7.jpg" />

                                        </div>
                                        <div class="single-slider">
                                            <img src="{{asset("public/frontEnd/")}}/slider/2.jpg" />

                                        </div>
                                        <div class="single-slider">
                                            <img src="{{asset("public/frontEnd/")}}/slider/4.jpg" />

                                        </div>
                                        <div class="single-slider">
                                            <img src="{{asset("public/frontEnd/")}}/slider/5.jpg" />

                                        </div>

                                    </div>
                                </div>
                                <!-- main Slider End -->
                                <!-- Content Box Start -->
                                <div class="content-box">
                                    <div class="table-responsive">
                                        <div class="single-content-box">
                                            <h3>Notice &amp; Circular</h3>
                                            <div class="table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Date</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#">শিক্ষার্থীদের ইউনিফর্ম সংক্রান্ত জরুরী বিজ্ঞপ্তি।</a></td>
                                                            <td>01/01/2019</td>
                                                            <td>
                                                                <a href="#" target="_blank">download</a>
                                                            </td>
                                                        </tr>
                                                        


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="more">
                                                <a href="Notice/AllNotice.html">view more</a>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                                <!-- Content Box End -->
                            </div>
                        </div>
                        <div class="col-md-3 pad_left">
                            <div class="page-sidebar">
                                <div class="page-sidebar">                                
                                    <div class="single-sidebar">                        
                                        <div class="title-sec">                            

                                            <h3> Message from Principal                  </h3>     
                                        </div>                                          
                                        <img class="principal-img" src="{{asset("public/frontEnd/")}}/img/photo1.png" alt="principle" />               
                                        <a class="more" href="#">Read more...            </a>  
                                    </div>                                
                                    <div class="single-sidebar">        
                                        <div class="title-sec">                                                    
                                            <h3> Teacher login              </h3>                               
                                        </div>                                          
                                        <div class="student-login-action">                 
                                            <a href="#" _target="blank" class="button">login </a>            
                                        </div>                               
                                    </div>                                
                                    <div class="single-sidebar">            
                                        <div class="title-sec">                
                                            <h3>USEFUL LINKS                  </h3>          
                                        </div>                                          
                                        <ul>                                           
                                            <li><a href="http://www.basis.org.bd/" target="_blank">BASIS</a></li>     
                                            <li><a href="http://www.moedu.gov.bd/" target="_blank">MOEDU</a></li>       
                                            <li><a href="http://www.dhakaeducationboard.gov.bd/" target="_blank">Dhaka Edu Board</a></li>        
                                            <li><a href="http://www.bteb.gov.bd/" target="_blank">BTEB</a></li>                                        
                                        </ul>                           
                                    </div>       
                                    <div class="single-sidebar">        


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
@endsection