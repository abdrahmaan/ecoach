@extends('admin.layouts.master')

@section('title',"تسجيل مهارة لـ لاعب")


@section('content')

  
<form action="{{route('skills.store')}}" method="post">
  @csrf
  @method("post")

  
{{-- Hidden Input Skils --}}
  <input id="myinput" hidden class="form-control" name="Skills" type="text" value="">


<h3 class="text-warning text-center my-2">إسم اللاعب</h3>
<input id="playername" readonly name="PlayerName" class="form-control w-25 mx-auto text-center" value="{{$Player->PlayerName}}" type="text" placeholder="إسم اللاعب">

<h3 class="text-warning text-center mt-4 mb-2">كود اللاعب</h3>
<input id="playercode" name="PlayerCode" readonly class="form-control w-25 mx-auto text-center" type="text" value="{{$Player->id}}" placeholder="كود اللاعب">

<h3 class="text-warning text-center mt-4 mb-2">نوع التقييم</h3>
<select class="form-control mx-auto w-25 text-center" name="SkillType" id="">
  <option value="شهرى">شهرى</option>
  <option value="ربع سنوى">ربع سنوى</option>
  <option value="نصف سنوى">نصف سنوى</option>
  <option value="سنوى">سنوى</option>
</select>


    <div class="data-info row my-3 flex-row-reverse w-100 justify-content-center align-items-start mx-0">

      <div class="accordion col-lg-5 col-10  my-2" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header d-flex justify-content-center align-items-center" id="headingOne">
            <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" data-bs-expanded="false"  aria-controls="collapseOne">
              <h3 class="text-center text-secondary w-100">التقييمات البدنية</h3>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body p-0">
              <div class="card data-text my-3 w-100 col-10 mx-auto mx-3">
                <div class="card-header text-secondary text-end fs-4">التقييمات البدنية</div>
                <div class="card-body row justify-content-center">
                   <h1 class="text-dark text-end pe-4 fs-3 mb-5">التحمل</h2>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">عام</label>
                        <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">أداء</label>
                        <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">سرعة</label>
                        <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">قوة</label>
                        <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <h1 class="text-dark text-end pe-4 fs-3 mb-5">القوة</h2>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">تحمل</label>
                            <input id='myrange' data-name="تحمل" class=" text-center w-100 mx-au100o" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">قدرة</label>
                            <input id='myrange'  data-name="قدرة" class="text-center w-000 mx-a100to" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">قصوى</label>
                            <input id='myrange' data-name="قصوى" class="text-center w-100 mx-auto"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                    <h1 class="text-dark text-end pe-4 fs-3 mb-5">السرعة</h2>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">إنتقالية</label>
                            <input id='myrange' data-name="إنتقالية" class="text-center0w-100 m100-auto" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">حركية</label>
                            <input id='myrange' data-name="حركية" class="text-center w-000 mx-a100to"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">رد فعل</label>
                            <input id='myrange'  data-name="رد فعل" class="text-center w-100 mx-auto"  min="0" max="100" step="2.5" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                    <h1 class="text-dark text-end pe-4 fs-3 mb-5">رشاقة</h2>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">خاص</label>
                            <input id='myrange' data-name="خاص" class="text-center w-100 mx-auto"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">عام</label>
                            <input id='myrange'  data-name="عام" class="text-center w-100 mx-auto"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                    <h1 class="text-dark text-end pe-4 fs-3 mb-5">مرونة</h2>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">خاص</label>
                            <input id='myrange'data-name="خاص" class="text-center w-100 mx-auto" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">عام</label>
                            <input id='myrange'  data-name="عام" class="text-center w-100 mx-auto" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
        {{-- الأداء الخطي و التقييمات المهارية --}}
      <div class="accordion col-lg-5 col-10  my-2" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header d-flex justify-content-center align-items-center" id="headingOne">
            <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
              <h3 class="text-center text-secondary w-100">الأداء الخطي و التقييمات المهارية</h3>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body p-0">
              <div class="card data-text my-3 col-11 w-100 mx-auto p-0" style="min-height: 1490px">
                <div class="card-header text-secondary text-end fs-4">الأداء الخطي</div>
                <div class="card-body row justify-content-center">
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">التمريرة المناسبة</label>
                        <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">اللعب المباشر</label>
                        <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-5 mb-2">الجرى وأخذ مكان بعد الكرة</label>
                        <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">الجرى للكرة القادمة</label>
                        <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">الكفاح على الكرة</label>
                        <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                    <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                        <label class="text-danger fs-4 mb-2">تغطية الزميل</label>
                        <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                      <label class="text-success fs-4 mb-2">50%</label>
                    </div>
                  
                </div>
                {{-- التقييمات المهارية --}}
                <div class="card data-text w-100 mx-auto p-0">
                  <div class="card-header text-secondary text-end fs-4">التقييمات المهارية</div>
                  <div class="card-body row justify-content-center">
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">تنطيط الكرة بالرجلين</label>
                          <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">تنطيط الكرة بالرأس</label>
                          <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-5 mb-2">تنطيط الكرة بالجسم كله</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">الركلات</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">الركل لأبعد مسافة</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">المراوغة</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">دقة التمرير</label>
                          <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">دقة التصويب</label>
                          <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">رميةالتماس</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">الجرى بالكرة</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">ضرب الكرة بالرأس</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">السيطرة على الكرة</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                    
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

        {{-- الحالة النفسية --}}
        <div class="accordion col-lg-5 col-10 my-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header d-flex justify-content-center align-items-center" id="headingOne">
              <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                <h3 class="text-center text-secondary w-100">الحالة النفسية</h3>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                  <div class="card data-text my-3  w-100">
                    <div class="card-header text-secondary text-end fs-4">الحالة النفسية</div>
                    <div class="card-body row justify-content-center">
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">الثقة بالنفس</label>
                            <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">الشجاعة</label>
                            <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">الكفاح</label>
                            <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">عدم التردد</label>
                            <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">المثابرة</label>
                            <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">التصميم</label>
                            <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
                        <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                            <label class="text-danger fs-4 mb-2">المبادأة</label>
                            <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                          <label class="text-success fs-4 mb-2">50%</label>
                        </div>
          
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- القدرات العقلية --}}
        <div class="accordion col-lg-5 col-10  my-2" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header d-flex justify-content-center align-items-center" id="headingOne">
              <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
                <h3 class="text-center text-secondary w-100">القدرات العقلية</h3>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body p-0">
                <div class="card data-text my-3 w-100">
                  <div class="card-header text-secondary text-end fs-4">القدرات العقلية</div>
                  <div class="card-body row justify-content-center">
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">تركيز الإنتباه</label>
                          <input id='myrange' data-name="عام" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">الملاحظة</label>
                          <input id='myrange' data-name="أداء" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">التفكير</label>
                          <input id='myrange' data-name="سرعة" class="text-center w-100 mx-au100o"  min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">القدرة على الإستنتاج</label>
                          <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
                      <div class="data-text col-lg-5 col-12 d-flex flex-column text-center mb-3">
                          <label class="text-danger fs-4 mb-2">سرعة التصرف</label>
                          <input id='myrange' data-name="قوة" class="text-center w-100 mx-aut100" min="0" max="100" step="2.5" name="" type="range" placeholder="لينك فيديو Youtube">
                        <label class="text-success fs-4 mb-2">50%</label>
                      </div>
        
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>


  

  

    </div>


    <button type="submit" class="btn add-player btn-warning text-dark mt-4  w-25 mx-auto d-block">تسجيل البيانات</button>
    
    </form>
    
  <script>

      let x = document.querySelectorAll('#myrange');

      let success = {};
    
      
      x.forEach(element => {

      element.addEventListener("change",(e)=>{

          let inputt = document.querySelector("#myinput");

           let rangess = document.querySelectorAll('#myrange');

              e.target.nextElementSibling.innerText = e.target.value + "%"; 

              let PhySkill = [
                {
                  التحمل : 
                    {
                      'عام' : rangess[0].value,
                      'أداء' : rangess[1].value,
                      'سرعة' : rangess[2].value,
                      'قوة' : rangess[3].value
                    },
                  القوة : 
                    {
                      'تحمل' : rangess[4].value,
                      'قدرة' : rangess[5].value,
                      'قصوى' : rangess[6].value,
                    },
                  السرعة : 
                    {
                      'انتقالية' : rangess[7].value,
                      'حركية' : rangess[8].value,
                      'رد_فعل' : rangess[9].value,
                    },
                  الرشاقة : 
                    {
                      'عام' : rangess[10].value,
                      'خاص' : rangess[11].value
                    },
                  المرونة : 
                    {
                      'عام' : rangess[12].value,
                      'خاص' : rangess[13].value
                    },
                  
                }
              ];

              let AdaKhaty = [
                {"Tamrera_Monasba" : rangess[14].value},
                {"Le3b_Mobasher" : rangess[15].value},
                {"Gary_A5z_B3d_Kora" : rangess[16].value},
                {"gary_Kora_Kadma" : rangess[17].value},
                {"Kefa7_Kora" : rangess[18].value},
                {"Ta8tya_Zemel" : rangess[19].value},
              ];

              let Mahary = [
                {"Tanteet_Regleen" : rangess[20].value},
                {"Tanteen_Ras" : rangess[21].value},
                {"Tanteet_Gesm" : rangess[22].value},
                {"Raklat" : rangess[23].value},
                {"Rakl_Ab3ad_Msafa" : rangess[24].value},
                {"Mraw8a" : rangess[25].value},
                {"Deka_Tamrer" : rangess[26].value},
                {"Deka_Taswep" : rangess[27].value},
                {"Ramyet_Tmas" : rangess[28].value},
                {"Gary_Kora" : rangess[29].value},
                {"Darb_Kora_Ras" : rangess[30].value},
                {"Saytra_Kora" : rangess[31].value},
              ];

              let MentalState = [
                {"Seqa_Nafs" : rangess[32].value},
                {"Shaga3a" : rangess[33].value},
                {"Kefa7" : rangess[34].value},
                {"Adam_Taradod" : rangess[35].value},
                {"Mosabra" : rangess[36].value},
                {"Tasmem" : rangess[37].value},
                {"Mobad2a" : rangess[38].value},
              ];

              let BrainState = [
                {"Tarkez_Entbah" : rangess[39].value},
                {"Mola7za" : rangess[40].value},
                {"Tafker" : rangess[41].value},
                {"Koda_3la_Estntag" : rangess[42].value},
                {"Sor3_Tasarof" : rangess[43].value},
              ];


                

              let obj = {
                "Takyeem_Badany" : PhySkill,
                "Adaa_Khaty" : AdaKhaty,
                "Takyeem_Mahary" : Mahary,
                "Hala_Nafsy" : MentalState,
                "Kodra_3aqly" : BrainState,
                };

              
             
              let Maharat = obj;

              inputt.value = "";


              inputt.value = JSON.stringify(Maharat);

              console.log(Maharat);     

                
          });
      });



  </script>


  <script>

    fetch('http://ecoach.egy/api/admin/players')
    .then(res => res.json())
    .then(res =>{

      let inputName = document.querySelector("input#playername");
      let data = res.response;
      let array = [];
      
      inputName.addEventListener("change",(e)=>{
        
        let inputCode = document.querySelector("input#playercode");


        data.forEach(obj=>{

          if(obj.PlayerName == e.target.value) {

            inputCode.value = obj.id;
            console.log(obj.id.toString());

          }

        });
       

      })

      res.response.forEach(obj =>{

        let value = {label: obj.PlayerName, value : obj.PlayerName};
        array.push(value);
        console.log(obj);

      });

      $("input#playername").autocomplete({
       source: array
      });


    })
  </script>

  {{-- <script src="{{asset('includes/custom/js/newplayer.js')}}"></script> --}}
      
@endsection


@section('css')
  <link rel="stylesheet" href="{{asset('includes/lib/jquery-ui.min.css')}}">
@endsection

@section('script')
    <script src="{{asset('includes/lib/jquery.js')}}"></script>
    <script src="{{asset('includes/lib/jquery-ui.min.js')}}"></script>
@endsection