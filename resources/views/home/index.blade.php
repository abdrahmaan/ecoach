
@extends('layout.master')    


@section('css')
        <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;400&display=swap" rel="stylesheet">
@endsection
   
@section('content')
    <section class="hero">
        <div class="container pb-4" style="min-height: 430px">
            <div class="row justify-content-center align-items-center m-0 p-0" style="min-height: 430px">
                <div class="col-lg-5 col-10 d-flex flex-column align-items-center">
                    <img id="image-hero" src="/includes/img/banner4.jpg" width="100%" alt="">
                </div>
                <div class="col-lg-5 col-10 d-flex flex-column align-items-center">
                    <h2 id="title" class="text-center">
                        ! أكادميتنا مختلفة 
                        <br>
                        أكاديميتنا حريفة
                     </h2>
                     <h2 id="desc" class="text-center">
                        تقييمات اللاعبين ( البدنية - المهارية )
                        متسجلة  إلكترونياً وموجودة فـ ملف اللاعب الشخصى
                         
                     </h2>
                </div>
            </div>
            <a class="btn btn-light text-dark fw-bold w-25 mx-auto d-block" href="/players">شوف بنفسك</a>
        </div>
    </section>


    <section class="services py-4" style="min-height: 400px">
        <div class="container" style="min-height: 400px">
            <div class="row p-0 m-0 justify-content-center align-items-center" style="min-height: 400px">
                <div class="col-lg-3 col-10 d-flex flex-column justify-content-center align-items-center">
                    <img class="mb-2" src="/includes/img/icons/football.png" width="118px" alt="">
                    <h2 class="fw-bold fs-4">حضور وغياب اللاعبين</h2>
                    <p class="text-center fs-5">حضور وغياب اللاعبين إلكترونياً
                        وتحليل إنتظامة وكذلك 
                        ومتابعة حضور المدربين</p>
                </div>
                <div class="col-lg-3 col-10 d-flex flex-column justify-content-center align-items-center">
                    <img class="mb-2" src="/includes/img/icons/shoot.png" width="118px" alt="">
                    <h2 class="fw-bold fs-4 text-center">ملف شخصى لكل لاعب</h2>
                    <p class="text-center fs-5">ملف شخصى لكل لاعب يوضح
                        بياناته وتقييماته المهارية و البدنية
                        السابقة ويمكنه من متابعة نفسه</p>
                </div>
                <div class="col-lg-3 col-10 d-flex flex-column justify-content-center align-items-center">
                    <img class="mb-2" src="/includes/img/icons/ball.png" width="118px" alt="">
                    <h2 class="fw-bold fs-4 text-center">دقه تقييمات المهارات</h2>
                    <p class="text-center fs-5">تقييم أداء اللاعب بالتفصيل
                        (بدنى - مهارى - أداء خطى ) وتوفير 
                        كافة المعلومات لمتابعة 
                        مستوى اللاعب</p>
                </div>

            </div>
        </div>
    </section>


    <style>
        section.hero{
            min-height: 430px;
            background-image: url('/includes/img/banner5.jpg');
            background-position: center center;
            position: relative;
        }
        section.hero::before{
            content: "";
            height: 100%;
            width: 100%;
            background-color: rgb(0 0 0 / 40%);
            top: 0;
            right: 0;
            position: absolute;
        }

        h2#title{
            color:  white;
            text-shadow: -3px 0px 3px rgb(0 0 0 / 70%);
            transform: rotateX(-21deg) rotateY(21deg);
            font-size: 40px;
        }
        h2#desc{
            color: white;
            text-shadow: -3px 0px 3px rgb(0 0 0 / 70%);

            transform: rotateX(-21deg) rotateY(21deg);
            font-size: 25px;

        }

        #image-hero{
            border-radius:30% 70% 70% 30% / 30% 30% 70% 70%  ;
            box-shadow:  9px 9px 15px rgb(0 0 0 / 70%);
      
        }

        @media(min-width: 319px) and (max-width: 720px){
            h2#title{

            font-size: 33px;
            }
            a.btn{
                width: 75% !important;
            }
            a.btn{
                width: 75% !important;
            }
        h2#desc{

            font-size: 20px;

        }

        #image-hero{
            width: 120%;
      
        }
    </style>

@endsection




@section('script')
    
<script src="{{asset('includes/home/custom/js/home.js')}}"></script>

@endsection

