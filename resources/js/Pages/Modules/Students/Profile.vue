<template>
<Head title="Profile" />
    <div class="profile-foreground position-relative mx-n4 mt-n4">
      <div class="profile-wid-bg">
        <img src="/images/bg.jpg" alt="" class="profile-wid-img" />
      </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
      <b-row class="g-4">
        <b-col cols="auto">
          <div class="avatar-lg">
            <img src="/images/avatars/administrator.png" alt="user-img" class="img-thumbnail rounded-circle" />
          </div>
        </b-col>
        <b-col>
          <div class="p-2">
            <h3 class="text-white mb-1">{{ user.data.name}}</h3>
            <p class="text-white-75">{{ user.data.email}}</p>
            <div class="hstack text-white-50 gap-1">
              <div class="me-2">
                <i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{user.data.course.name}}
              </div>
              <div>
                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>{{user.data.year.name}} year
              </div>
            </div>
          </div>
        </b-col>
        <b-col cols="12" lg="auto" order-lg="0" class="order-last">
          <b-row class="text text-white-50 text-center">
            <b-col lg="12">
              <div class="p-2">
                <h4 class="text-white mb-1">{{user.data.username}}</h4>
                <p class="fs-14 mb-0">ID Number</p>
              </div>
            </b-col>
            
          </b-row>
        </b-col>
      </b-row>
    </div>

    <b-row>
      <b-col lg="12">
        <div>
          <div class="d-flex">
            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
              <li class="nav-item">
                <b-link class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                  <i class="ri-airplay-fill d-inline-block d-md-none"></i>
                  <span class="d-none d-md-inline-block">Overview</span>
                </b-link>
              </li>
              <li class="nav-item">
                <b-link class="nav-link fs-14" data-bs-toggle="tab" href="#schedule" role="tab">
                  <i class="ri-list-unordered d-inline-block d-md-none"></i>
                  <span class="d-none d-md-inline-block">Class Schedule</span>
                </b-link>
              </li>
              <li class="nav-item">
                <b-link class="nav-link fs-14" data-bs-toggle="tab" href="#grades" role="tab">
                  <i class="ri-folder-4-line d-inline-block d-md-none"></i>
                  <span class="d-none d-md-inline-block">Online Grades</span>
                </b-link>
              </li>
              <li class="nav-item">
                <b-link class="nav-link fs-14" data-bs-toggle="tab" href="#prospectus" role="tab">
                  <i class="ri-folder-4-line d-inline-block d-md-none"></i>
                  <span class="d-none d-md-inline-block">Student Prospectus</span>
                </b-link>
              </li>
              <li class="nav-item">
                <b-link class="nav-link fs-14" data-bs-toggle="tab" href="#registration" role="tab">
                  <i class="ri-folder-4-line d-inline-block d-md-none"></i>
                  <span class="d-none d-md-inline-block">Certificate of Registration</span>
                </b-link>
              </li>
            </ul>
            <div class="flex-shrink-0">
              <router-link to="/pages/profile-setting" class="btn btn-success"><i
                  class="ri-edit-box-line align-bottom"></i> Edit Profile</router-link>
            </div>
          </div>
          <div class="tab-content pt-4 text-muted">
            <div class="tab-pane active" id="overview-tab" role="tabpanel">
              <b-row>
                <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <!---->
            <!---->
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 me-2">Recent Activity</h4>
                <div class="flex-shrink-0 ms-auto">
                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0"
                        role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#today" target="_self"
                                data-bs-toggle="tab" role="tab"> Today </a></li>
                        <li class="nav-item"><a class="nav-link" href="#weekly" target="_self" data-bs-toggle="tab"
                                role="tab"> Weekly </a></li>
                        <li class="nav-item"><a class="nav-link" href="#monthly" target="_self" data-bs-toggle="tab"
                                role="tab"> Monthly </a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <!---->
                <!---->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="today" role="tabpanel">
                        <div class="profile-timeline">
                            <div class="accordion accordion-flush" id="todayExample">
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingOne"><a
                                            class="accordion-button p-2 shadow-none" href="#" target="_self"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><img src="/img/avatar-2.9ce030c2.jpg" alt=""
                                                        class="avatar-xs rounded-circle"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-1"> Time In </h6><small
                                                        class="text-muted">05:16PM</small>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div id="collapseOne" class="collapse show" is-nav="false" style="">
                                        <div class="accordion-body ms-2 ps-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <div class="accordion-header" id="headingTwo"><a
                                            class="accordion-button p-2 shadow-none" href="#" target="_self"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="true">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <div class="avatar-title bg-light text-success rounded-circle"> M
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-1">Enrolled </h6><small
                                                        class="text-muted">04:45PM</small>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div id="collapseTwo" class="collapse show" is-nav="false" style="">
                                        <div class="accordion-body ms-2 ps-5">
                                            <div class="row g-2">
                                                <div class="col-auto">
                                                    <div
                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                        <div class="flex-shrink-0"><i
                                                                class="ri-image-2-line fs-17 text-danger"></i></div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h6><a class="stretched-link" href="javascript:void(0);"
                                                                    target="_self">Official Receipt</a>
                                                            </h6><small>685 KB</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div
                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                        <div class="flex-shrink-0"><i
                                                                class="ri-file-zip-line fs-17 text-info"></i></div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h6><a class="stretched-link" href="javascript:void(0);"
                                                                    target="_self">Certificare of Registration</a></h6>
                                                            <small>8.78 MB</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               
                                   
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <!---->
            <!---->
        </div>
    </div>
</div>
              </b-row>
            </div>
            <div class="tab-pane fade" id="schedule" role="tabpanel">
              <b-card no-body>
                <b-card-body>
                  <h5 class="card-title mb-3">My Schedule</h5>
                  <table class="table table-bordered">
                     <thead class="table-light">
                    <tr>
                        <th>Subject ID</th>
                              <th>Subject Code</th>
                              <th>Description</th>
                              <th>From</th>
                              <th>To</th>
                              <th>Day</th>
                              <th>Room No.</th>
                    </tr>
                    </thead>
                      <tbody>
                          
                          <tr>
                              <td><b>BSN221523</b></td>
                              <td><b>NCM 121B</b></td>
                              <td>RELATED LEARNING EXPERIENCE (51 HOURS)</td>
                              <td>01:00PM</td>
                              <td>04:00PM</td>
                              <td>F (Lec 0 ) (Lab 1 )</td>
                              <td> CLINICAL AREAS</td>
                          </tr>
                          <tr >
                              <td><b>BSN221950</b></td>
                              <td><b>NCM 121A</b></td>
                              <td>DISASTER NURSING</td>
                              <td>08:00AM</td>
                              <td>10:00AM</td>
                              <td>F (Lec 2 ) (Lab 0 )</td>
                              <td> ONLINE</td>
                          </tr>
                          <tr>
                              <td><b>BSN221953</b></td>
                              <td><b>NCM 122B</b></td>
                              <td>RELATED LEARNING EXPERIENCE (408 HOURS)</td>
                              <td>07:00AM</td>
                              <td>11:00AM</td>
                              <td>MTW (Lec 0 ) (Lab 8 )</td>
                              <td> CLINICAL AREAS</td>
                          </tr>
                          <tr>
                              <td><b>BSN221953</b></td>
                              <td><b></b></td>
                              <td></td>
                              <td>11:30AM</td>
                              <td>03:30PM</td>
                              <td>MTW (Lec 0 ) (Lab 8 )</td>
                              <td> CLINICAL AREAS</td>
                          </tr>
                          <tr>
                              <td><b>BSN221956</b></td>
                              <td><b>CW 101</b></td>
                              <td>The Contemporary World</td>
                              <td>04:00PM</td>
                              <td>05:30PM</td>
                              <td>MTH (Lec 3 ) (Lab 0 )</td>
                              <td> ONLINE</td>
                          </tr>
                          <tr >
                              <td><b>JEEP221066</b></td>
                              <td><b>EPIC 4</b></td>
                              <td>EPIC ACCELERATE 4 -B</td>
                              <td>05:30PM</td>
                              <td>07:00PM</td>
                              <td>MTH (Lec 3 ) (Lab 0 )</td>
                              <td> EPIC ACCE ROOM</td>
                          </tr>
                      </tbody>
                  </table>
                </b-card-body>
              </b-card>
            </div>
            <div class="tab-pane fade" id="academic" role="tabpanel">
              <b-card no-body>
                <b-card-body>
                  <h5 class="card-title mb-3">My Academic Record</h5>
                  
                </b-card-body>
              </b-card>
            </div>
            <div class="tab-pane fade" id="grades" role="tabpanel">
              <b-card no-body>
                <b-card-body>
                  <h5 class="card-title mb-3">My Grades</h5>
                  <table class="table table-condensed table-bordered">   
       <thead class="table-light">
        <tr>
          <th>Course Code</th>
          <th class="text-center">Units</th>
          <th>Course Title</th>
          <th class="text-center">Midterm</th>
          <th class="text-center">Final</th>
        </tr>
        </thead>
        <tbody>
  
        <tr>
          <td>ENM.101</td>
          <td align="center">3.0</td>
          <td>Calculus 1: Differential Calculus</td>
          <td align="center">F</td>
          <td align="center">1.5</td>
        </tr>
                
        <tr>
          <td>ENS.101</td>
          <td align="center">4.0</td>
          <td>Physics 1: Physics for Engineers</td>
          <td align="center">F</td>
          <td align="center">F</td>
        </tr>
                
        <tr>
          <td>FFP/NSTP101</td>
          <td align="center">4.5</td>
          <td>Freshmen Formation Program/National Service Training Programs</td>
          <td align="center"></td>
          <td align="center">3</td>
        </tr>
                
        <tr>
          <td>MATMOD</td>
          <td align="center">3.0</td>
          <td>Mathematics in the Modern World</td>
          <td align="center">F</td>
          <td align="center">1</td>
        </tr>
                
        <tr>
          <td>PATHFIT1</td>
          <td align="center">2.0</td>
          <td>Movement Enhancement</td>
          <td align="center">3.5</td>
          <td align="center">4</td>
        </tr>
                
        <tr>
          <td>SPIECOC</td>
          <td align="center">3.0</td>
          <td>Spirituality &amp; Ecology in the Christian, Ignatian,and Islamic Traditions</td>
          <td align="center">2.4</td>
          <td align="center">2</td>
        </tr>
                
        <tr>
          <td>UNDSELF</td>
          <td align="center">3.0</td>
          <td>Understanding the Self</td>
          <td align="center">2.5</td>
          <td align="center">3</td>
        </tr>
                </tbody></table>
                </b-card-body>
              </b-card>
            </div>
            <div class="tab-pane fade" id="prospectus" role="tabpanel">
              <b-card no-body>
                <b-card-body>
                  <h5 class="card-title mb-3">My Prospectus</h5>
                  <table class="table table-hover table-condensed table-bordered table-responsive-lg" style="margin-bottom: 0;" cellspacing="0" cellpadding="1" border="1">
	<tbody><tr>
        <td style="background-color: whitesmoke;" align="center">Grade</td>
        <td style="background-color: whitesmoke;" align="center">Course</td>
        <td style="background-color: whitesmoke;" align="left">Description</td>
        <td style="background-color: whitesmoke;" align="center">Units</td>
        <td style="background-color: whitesmoke;" align="center">Retention</td>
	</tr>    
    <tr><td align="center"><strong></strong></td><td>ProbSol</td><td>Problem Solving Fundamentals</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong></strong></td><td>SPIECOM</td><td>Spirituality &amp; Ecology in the Christian, Ignatian, and Islamic Traditions</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong>3</strong></td><td>UNDSELF</td><td>Understanding the Self</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong>3</strong></td><td>FFP/NSTP101</td><td>Freshmen Formation Program/National Service Training Programs</td><td align="center">4.50</td><td align="center">75</td></tr><tr><td align="center"><strong>4</strong></td><td>PATHFIT1</td><td>Movement Enhancement</td><td align="center">2.00</td><td align="center">75</td></tr><tr><td align="center"><strong>1</strong></td><td>MATMOD</td><td>Mathematics in the Modern World</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong></strong></td><td>DigiMed</td><td>Digital Multimedia</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong>2</strong></td><td>SPIECOC</td><td>Spirituality &amp; Ecology in the Christian, Ignatian,and Islamic Traditions</td><td align="center">3.00</td><td align="center">75</td></tr><tr><td align="center"><strong>2.5</strong></td><td>PHIHIS</td><td>Readings in Philippine History</td><td align="center">3.00</td><td align="center">75</td></tr></tbody></table>
                </b-card-body>
              </b-card>
            </div>
            <div class="tab-pane fade" id="registration" role="tabpanel">
              <b-card no-body>
                <b-card-body>
                  <h5 class="card-title mb-3">Certificate of Registration</h5>
                  
                </b-card-body>
              </b-card>
            </div>
            
          </div>
        </div>
      </b-col>
    </b-row>
</template>
<script>
export default {
    props: ['user']
}
</script>