{{--dashboard home page code here--}}

@extends('layouts.lms.post-login')



@section('lms-content')


{{-- Content body start --}}

<div class="content-body"> 
    <div class="container-fluid">
      <div class="row">
        <div class="row">
          <div class="col-xl-12">
            <div class="page-titles">
              <div class="d-flex align-items-center flex-wrap ">
                <h3 class="heading mb-0"> Student Dashboard</h3>
              </div>
            </div>
          </div>
                </div>
       <div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card">
                   <div class="card-header border-0 pb-0">
                       <div class="clearfix">
                          <h3 class="card-title">Maths</h3>
                          <span>Grade 6</span>
                        </div>
                           
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="spark-bar"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">Science</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="composite-bar"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">English</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="sparkline8"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">Sinhala</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="sparkline9" class="height80;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">Tamil</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="sparkline8"></div>
                  </div>
                </div>
              </div>
            </div>   
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">History</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="sparkline8"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0">
                  <div class="clearfix">
                    <h3 class="card-title">Information techonology</h3>
                    <span>Grade 6</span>
                  </div>
                </div>
                <div class="card-body text-center">
                  <div class="ico-sparkline">
                    <div id="sparkline8"></div>
                  </div>
                </div>
              </div>
            </div>
                      </div>
        </div>
  
                      <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                          <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                              <div class="card-header pb-0 border-0 flex-wrap">
                                  <div>
                                      <div class="mb-3">
                                          <h2 class="heading mb-0">Student Calendar</h2>	
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body text-center event-calender  py-0 px-1">
                                  <input type='text' class="form-control d-none" id='datetimepicker1'>
                              </div>
                          </div>
                      </div>
                  </div>
        </div>
      </div>
    </div>
  </div>

{{-- Content body end --}}

@endsection

