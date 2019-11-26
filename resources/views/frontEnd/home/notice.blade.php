@extends('frontEnd.master')

@section('title')
Notice
@endsection


@section('mainContent')
<div class="maincontent">
    <div class="row">
        <div class="col-md-9">
            <div class="maincontent-left">
                <!-- main Slider End -->
                <!-- Content Box Start -->
                <div class="content-box nativeEditor">


                    <div class="title-sec inner-page-title">
                        <h3>All Notice</h3>
                    </div>
                    <div class="single-content-box">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Notice Name</th>
                                        <th>Notice Date</th>
                                        <th>Notice Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>শিক্ষার্থীদের ইউনিফর্ম সংক্রান্ত জরুরী বিজ্ঞপ্তি।</td>
                                        <td>01/01/2019</td>
                                        <td><a href="#">Read more</a></td>
                                    </tr>
                                     
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

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
<!-- Main Content End -->

</div>


@endsection