@extends('admin.layouts.player')


@section('title',"ملف اللاعب")
    {{-- {{dd()}} --}}

@section('content')


    <section id="Header" class="header bg-dark" style="min-height: 400px">
        <img id="wave" src="/includes/img/wave1.svg" alt="">
     
    </section>


    <section id="PlayerData" class="data d-flex justify-content-center" style="min-height: 350px">
        <section class="player-data">
            <img id="player-img" src="{{$data["Player"]->ImagePath == null ? "/includes/img/bg-section.jpg" : "/playerimages/" . $data["Player"]->ImagePath }}" width="170px" height="170px" style="border-radius: 50%" alt="">
            <div class="content">
                <h2 class="text-light">
                    {{$data["Player"]->PlayerName}}
                </h2>
                <h2 class="text-warning">
                    {{$data["Player"]->CategoryName}}
                    <i class="bi bi-person-workspace mx-1"></i>
                </h2>
                <h2 class="text-warning">
                    {{$data["Player"]->Position}}
                <i class="bi bi-globe2 mx-1"></i>
                </h2>
            </div>
            <img id="cover" src="/includes/img/soccer-ball.png" width="300px" alt="">
        </section>
    </section>


    <div id="Player-Info" class="container"  style="min-height: 300px">
        <h3 class="text-dark text-end mb-4" dir="rtl">البيانات الشخصية :</h3>
        <section class="player-info row">   
        <div class="col-12 col-lg-4">
            <h2 id="player-info" class="bg-dark text-warning text-center align-middle p-3" style="">الوزن : {{$data["Player"]->Weight}} كجم</h2>
        </div>
        <div class="col-12 col-lg-4">
            <h2 id="player-info" class="bg-dark text-warning text-center align-middle p-3" style="">الطول :  {{$data["Player"]->Height}} سم</h2>
        </div>
        <div class="col-12 col-lg-4">
            <h2 id="player-info" class="bg-dark text-warning text-center align-middle p-3" style="">السن :  {{$data["Player"]->Age}} سنة</h2>
        </div>
        </section>

    </div>


    <div id="Player-Skills" class="container  py-4" style="min-height: fit-content">

        <h3 class="text-dark text-end mb-5" dir="rtl">التقييمات المهارية :</h3>
        {{-- {{dd($data["Skills"])}} --}}

      
  
            @foreach ($data["Skills"] as $skill)

            <div class="accordion my-2" id="accordion{{$skill->id}}">
                <div class="accordion-item">
                  <h2 class="accordion-header d-flex justify-content-center align-items-center" id="headingOne">
                    <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$skill->id}}" data-bs-expanded="false"  aria-controls="collapse{{$skill->id}}">
                      <h3 class="text-center text-secondary w-100">{{$skill->SkillType}} - {{explode("-",explode(" ",$skill->created_at)[0])[1]}}-{{explode("-",explode(" ",$skill->created_at)[0])[0]}}</h3>
                    </button>
                  </h2>
                  <div id="collapse{{$skill->id}}" class="accordion-collapse collapse collapsed" aria-labelledby="headingOne">
                    <div class="accordion-body p-0">
                        <h2 class="text-center">تقييم</h2>
                    </div>
                  </div>
                </div>
              </div>

            @endforeach
       
    

    </div>

@endsection



@section('css')
    <style>

        body{
            background-color: #F3F4F5;
            user-select: none;
            overflow-x: hidden;
        }

        section.header{
            background-image: url("/includes/img/hero.jpg");
            background-position: bottom center;
            background-size: cover;
            position: relative;
        }

        section.header img#wave{
            position: absolute;
            bottom: -120px;
            right: 0;
            width: 100%;
        }

        section.data{
            position: relative;


        }
        section.player-data{
            position: absolute;
            width: 600px;
            height: 400px;
            background-color: #28292B;
            border-radius: 55px;
            top: -180px;      


        }
        section.player-data img#player-img{
            position: absolute;
            top: -85px;
            right:  50%;
            transform: translateX(50%);
            border: 6px solid #FFC200;
            z-index: 100;
        }

        section.player-data img#cover{
            position: absolute;
            top: 0px;
            right:  20px;
            z-index: 1;
            opacity: 10%;
        }

       .data section.player-data div.content{
           position: relative;
           text-align: center;
           margin-top: 120px;
           z-index: 100;
        }

       .container h2#player-info {
          border-radius: 80px;
        }

        @media (min-width:319px) and (max-width: 719px){

            section.player-data{
            width: 320px;
  
        }
        }
    </style>
@endsection


