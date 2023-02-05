
    @if (session()->get('user-data')->Role == "Admin")
        <!-- Sidebar Start -->
        <div class="offcanvas offcanvas-end bg-dark" data-bs-backdrop="true" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
          <div class="offcanvas-header my-2 d-flex flex-row-reverse align-items-center ">
              <h5 class="offcanvas-title text-warning" id="offcanvasBottomLabel">القائمة الرئيسية</h5>
              <button type="button" class="btn-close text-reset text-light bg-warning m-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <img src="/includes/img/user.png" style="max-width: 220px; margin: auto;" alt="">
          <h4 class="username text-warning text-center mt-3 fs-5">
             .. أهلاً بك
            <br>
            {{session()->get('user-data')->FullName}}
            </h4>
            <h4 class="role text-warning text-center my-2 fs-5">{{session()->get('user-data')->Role}}</h4>
          <hr class="dropdown-divider bg-warning w-100 mx-auto" style="min-height: 2px;">
          <div class="offcanvas-body d-flex flex-column align-items-end px-0">
              <!-- الإحصائيات -->
              <a class="dropdown-item text-light text-end pe-3 py-2" href="{{route('dashboard.index')}}">
                  الإحصائيات
                  <i class="bi bi-graph-up-arrow mx-1"></i>
                </a>
              <!-- اللاعبين -->
              <div class="dropdown w-100 mb-2">
                  <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    إدارة اللاعبين
                    <i class="bi bi-person-lines-fill"></i>
                  </button>
                  <ul class="dropdown-menu  w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                    <li><a class="dropdown-item text-light" href="{{route('players.create')}}">
                        تسجيل لاعب جديد
                        <i class="bi bi-person-fill mx-1"></i>
                      </a></li>
                    <li><a class="dropdown-item text-light" href="{{route('players.index')}}">
                        بيانات اللاعبين
                        <i class="bi bi-pie-chart-fill mx-1"></i>
                      </a></li>
                      <li><a class="dropdown-item text-light" href="{{route('groups.create')}}">
                          إدارة المجموعات
                          <i class="bi bi-collection-fill mx-1"></i>
                        </a></li>
                    
                  </ul>
              </div>
              <!-- الحضور والغياب -->
              <div class="dropdown w-100 mb-2">
                  <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      الحضور والغياب
                    <i class="bi bi-table"></i>
                  </button>
                  <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                    <li><a class="dropdown-item text-light" href="{{route('attendances.create')}}">
                        تسجيل حضور
                        <i class="bi bi-calendar-check-fill mx-1"></i>
                      </a></li>
                    <li><a class="dropdown-item text-light" href="{{route('attendances.index')}}">
                        مراجعة الحضور والغياب
                        <i class="bi bi-ui-checks mx-1"></i>
                      </a></li>
                    <li><a class="dropdown-item text-light" href="{{route('attendance.captin')}}">
                       الحضور و الغياب للمدربين
                        <i class="bi bi-ui-checks mx-1"></i>
                      </a></li>
                  </ul>
              </div>
              <!-- الإشتراكات -->
              <div class="dropdown w-100 mb-2">
                  <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      الإشتراكات
                    <i class="bi bi-currency-dollar"></i>
                  </button>
                  <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                    <li><a class="dropdown-item text-light" href="newpayment.html">
                      تسجيل إشتراك لاعب
                        <i class="bi bi-coin mx-1"></i>
                      </a></li>
                    <li><a class="dropdown-item text-light" href="#">
                        مراجعة الإشتراكات
                        <i class="bi bi-table mx-1"></i>
                      </a></li>
                  </ul>
              </div>
              <!-- المصروفات -->
              <div class="dropdown w-100 mb-2">
                  <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      المصروفات
                    <i class="bi bi-currency-dollar"></i>
                  </button>
                  <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                    <li><a class="dropdown-item text-light" href="newpayout.html">
                        تسجيل مصروف
                        <i class="bi bi-coin mx-1"></i>
                      </a></li>
                    <li><a class="dropdown-item text-light" href="#">
                        مراجعة المصروفات
                        <i class="bi bi-table mx-1"></i>
                      </a></li>
                  </ul>
              </div>
              <!-- الإعدادات -->
              <div class="dropdown w-100 mb-2">
                  <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      الإعدادات
                    <i class="bi bi-gear-wide-connected"></i>
                  </button>
                  <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                    <li><a class="dropdown-item text-light" href="/admin/newuser">
                        الحسابات
                        <i class="bi bi-person-fill mx-1"></i>
                      </a></li>
                      <li><a class="dropdown-item text-light" href="/admin/branches/create">
                          فروع الأكاديمية
                          <i class="bi bi-collection-fill mx-1"></i>
                        </a></li>
                  </ul>
              </div>
              <!-- تسجيل الخروج -->
              <a class="dropdown-item text-light text-end pe-3 py-2" href="/admin/logout">
                  تسجيل الخروج
                  <i class="bi bi-box-arrow-in-left mx-1"></i>
                </a>

            
          <hr class="dropdown-divider d-none bg-warning w-50 my-3" style="min-height: 1px;">

            
          </div>
          </div>
          <!-- Sidebar End -->

    @endif



    @if (session()->get('user-data')->Role !== "Admin") 
        <!-- Sidebar Start -->
        <div class="offcanvas offcanvas-end bg-dark" data-bs-backdrop="true" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
          <div class="offcanvas-header my-2 d-flex flex-row-reverse align-items-center ">
              <h5 class="offcanvas-title text-warning" id="offcanvasBottomLabel">القائمة الرئيسية</h5>
              <button type="button" class="btn-close text-reset text-light bg-warning m-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <img src="/includes/img/user.png" style="max-width: 220px; margin: auto;" alt="">
          <h4 class="username text-warning text-center mt-3 fs-5">
            .. أهلاً بك
           <br>
           {{session()->get('user-data')->FullName}}
           </h4>
           <h4 class="role text-warning text-center my-2 fs-5">{{session()->get('user-data')->Role}}</h4>
          <hr class="dropdown-divider bg-warning w-100 mx-auto" style="min-height: 2px;">
          <div class="offcanvas-body d-flex flex-column align-items-end px-0">
            {{-- Captin --}}
            @if (session()->get('user-data')->Role == "Captin")
                 <!-- الحضور والغياب -->
              <div class="dropdown w-100 mb-2">
                <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    الحضور والغياب
                  <i class="bi bi-table"></i>
                </button>
                <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                  <li><a class="dropdown-item text-light" href="{{route('attendances.create')}}">
                      تسجيل حضور
                      <i class="bi bi-calendar-check-fill mx-1"></i>
                    </a></li>
                  <li><a class="dropdown-item text-light" href="{{route('attendances.index')}}">
                      مراجعة الحضور والغياب
                      <i class="bi bi-ui-checks mx-1"></i>
                    </a></li>
                </ul>
              </div>
                <!-- تسجيل الخروج -->
                <a class="dropdown-item text-light text-end pe-3 py-2" href="/admin/logout">
                  تسجيل الخروج
                  <i class="bi bi-box-arrow-in-left mx-1"></i>
                </a>

              </div>
              </div>
              <!-- Sidebar End -->
            @endif 

            {{-- Accountant --}}
            @if (session()->get('user-data')->Role == "Accountant")
                   <!-- الإشتراكات -->
              <div class="dropdown w-100 mb-2">
                <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    الإشتراكات
                  <i class="bi bi-currency-dollar"></i>
                </button>
                <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                  <li><a class="dropdown-item text-light" href="newpayment.html">
                    تسجيل إشتراك لاعب
                      <i class="bi bi-coin mx-1"></i>
                    </a></li>
                  <li><a class="dropdown-item text-light" href="#">
                      مراجعة الإشتراكات
                      <i class="bi bi-table mx-1"></i>
                    </a></li>
                </ul>
                </div>
                <!-- المصروفات -->
                <div class="dropdown w-100 mb-2">
                    <button class="btn text-light dropdown-toggle text-end w-100 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                        المصروفات
                      <i class="bi bi-currency-dollar"></i>
                    </button>
                    <ul class="dropdown-menu w-100 position-relative text-end rounded-0" style="background-color: #161819;">
                      <li><a class="dropdown-item text-light" href="newpayout.html">
                          تسجيل مصروف
                          <i class="bi bi-coin mx-1"></i>
                        </a></li>
                      <li><a class="dropdown-item text-light" href="#">
                          مراجعة المصروفات
                          <i class="bi bi-table mx-1"></i>
                        </a></li>
                    </ul>
                </div>
                 <!-- تسجيل الخروج -->
                 <a class="dropdown-item text-light text-end pe-3 py-2" href="/admin/logout">
                  تسجيل الخروج
                  <i class="bi bi-box-arrow-in-left mx-1"></i>
                </a>
              </div>
             </div>
              <!-- Sidebar End -->
            @endif

             

    @endif
