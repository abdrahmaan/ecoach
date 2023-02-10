

    @extends('admin.layouts.master')

    @section('title',"الإحصائيات")


    @isset(session()->get('user')->Role)

            <script>
                window.localStorage.setItem('role', "{{session()->get('user')->Role}}");
            </script>
    @endisset

    @section('content')


           {{-- {{dd($data)}} --}}


           <section class="row m-0 p-0 px-5 justify-content-center flex-row-reverse" style="min-height: 500px">
            <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                <section class="d-flex align-items-center">
                    <h2 class="text-light fs-5 mb-2 mx-2">
                         الإشتراكات\اليوم

                     </h2>
                     <i class="bi text-light bi-coin fs-6"></i>
                </section>
                 <h2 class="text-light" dir="rtl">{{$data["PaymentTotalToday"]}} جنية</h2>
             </section>
         
            <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                <section class="d-flex align-items-center">
                    <h2 class="text-light fs-5 mb-2 mx-2">
                         الإشتراكات\الشهر
                     </h2>
                     <i class="bi text-light bi-coin fs-6"></i>
                </section>
                 <h2 class="text-light" dir="rtl">{{$data["PaymentTotalMonth"]}} جنية</h2>
             </section>
         
                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-6 mb-2 mx-2">
                           عدد الإشتراكات\الشهر
                        </h2>
                        <i class="bi text-light bi-coin fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["PaymentCountMonth"]}}</h2>
                </section>
            
            <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                <section class="d-flex align-items-center">
                    <h2 class="text-light fs-5 mb-2 mx-2">
                         المصروفات\اليوم

                     </h2>
                     <i class="bi text-light bi-coin fs-6"></i>
                </section>
                 <h2 class="text-light" dir="rtl">{{$data["PayoutTotalToday"]}} جنية</h2>
             </section>
         
            <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                <section class="d-flex align-items-center">
                    <h2 class="text-light fs-5 mb-2 mx-2">
                         المصروفات\الشهر
                     </h2>
                     <i class="bi text-light bi-coin fs-6"></i>
                </section>
                 <h2 class="text-light" dir="rtl">{{$data["PayoutTotalMonth"]}} جنية</h2>
             </section>
         
                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-6 mb-2 mx-2">
                           عدد المصروفات\الشهر
                        </h2>
                        <i class="bi text-light bi-coin fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["PayoutCountMonth"]}}</h2>
                </section>
            

                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                             عدد اللاعبين
                        </h2>
                        <i class="bi text-light bi-person-lines-fill fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["TotalPlayers"]}}</h2>
                </section>

                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                            اللاعبين\مفعل
                        </h2>
                        <i class="bi text-light bi-person-lines-fill fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["TotalPlayersActive"]}}</h2>
                </section>
            

                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                            اللاعبين\غير مفعل
                        </h2>
                        <i class="bi text-light bi-person-lines-fill fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["TotalPlayersUnActive"]}}</h2>
                </section>
                
                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                            اللاعبين\غير مفعل  - الشهر الحالى
                        </h2>
                        <i class="bi text-light bi-person-lines-fill fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["TotalPlayersUnActiveMonth"]}}</h2>
                </section>

                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                            المجموعات
                        </h2>
                        <i class="bi text-light bi-collection-fill fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["GroupsCount"]}}</h2>
                </section>
                <section class="one-data mx-2 my-3 py-3 bg-warning col-lg-3 col-12 d-flex flex-column justify-content-center align-items-center" style="max-height: 150px">
                   <section class="d-flex align-items-center">
                       <h2 class="text-light fs-5 mb-2 mx-2">
                            الفروع
                        </h2>
                        <i class="bi text-light bi-collection-fill  fs-6"></i>
                   </section>
                    <h2 class="text-light ">{{$data["BranchesCount"]}}</h2>
                </section>
              
               

           </section>

            


           <style>
               section.one-data{
                   border-radius: 20px;
                   background-image: url("/includes/img/slide-3.jpg");
                   background-position: center center;
                   background-size: cover;
                   position: relative;
                   box-shadow: 5px 5px 5px -3px black ; 
                   border: 2px solid white;
                   border-width: 2px 2px 0px 0px          
                }
                
                section.one-data::before{
                   border-radius: 20px;
                    content: "";
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.795);
                    position: absolute;
                    z-index: 1;
                }
           </style>
    <script src="/includes/custom/js/home.js"></script>

    @endsection