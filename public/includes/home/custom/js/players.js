let header = new Utilites().header();



// let Area = document.querySelector("#players-collection");
let btn = document.querySelector("button.btn-search");
data = [];

fetch(`http://ecoach.abdelrahmaan.com/api/admin/players`)
.then(res => res.json())
.then(res =>{
    data = res.response;
});

let InputName =document.querySelectorAll("input")[0];
InputName.focus();

btn.addEventListener("click",(e)=>{
HandleSearch();
});


function HandleSearch(){
    let Area = document.querySelector("#players-collection");

    let InputName =document.querySelectorAll("input")[0].value;

    let counter = 0;

    let DefaultImagepath ='/includes/img/bg-section.jpg';
    
    Area.innerHTML = "";

    if(InputName !== ""){
        
    data.forEach(player => {

        console.log(player);

            if(player.PlayerName.includes(InputName)){

                let PlayerHTML = `
               
                <div class="player d-flex flex-column flex-lg-row bg-dark col-12 col-lg-5 p-0  mx-2 my-3 d-flex justify-content-center align-items-center" style="border-radius:25px">
                    
                    <div class="player-img"
                        style="
                        background-image: url('${player.ImagePath == null ? DefaultImagepath : `/playerimages/${player.ImagePath}`}');
                        background-position: center center;
                        background-size: cover;
                        min-height: 400px;
                        height: 100%;
                        width:100%;
                        border-radius: 25px ">

                        <a href="">
                            <!-- <img src="{{asset('includes/img/bg-section.jpg')}}" style="min-height: 508px" alt="player_photo"> -->  
                        </a>
                    </div>
                    <div class="one-player-data w-100 d-flex flex-column justify-content-center align-items-center h-100 py-4">
                        <h4 class="text-warning text-center">
                            ${player.PlayerName}
                            <i class="bi bi-person-fill"></i>

                            </h4>
                        <span class="text-dark bg-warning my-3 p-2 rounded w-25 text-center">
                            ${player.Position}
                            <i class="bi bi-person-fill"></i>
                            </span>
                        <h5 class="text-light my-2">
                            السن : ${player.Age}
                            <i class="bi bi-person-fill"></i>
                        </h5>
                        <h5 class="text-light my-2 fs-6">
                            ${player.CategoryName   }
                            <i class="bi bi-calendar-week"></i>
                        </h5>  
                        <h5 class="text-light my-2 fs-6">
                            ${player.GroupName}
                            <i class="bi bi-calendar-week"></i>
                        </h5>  
                        <h5 class="text-light my-2">
                            ${player.BranchName}
                            <i class="bi bi-calendar-week"></i>
                        </h5>   
                    <div id="player-buttons-area" class="row ps-3 flex-row-reverse p-0 m-0 justify-content-center">
                        <a href="/players/${player.id}" class="btn btn-warning mt-3 col-2" style="height: fit-content; white-space: nowrap; width:fit-content">
                            ملف اللاعب
                            <i class="bi bi-skip-start-fill"></i>
                        </a>
                        </div>
                    </div>
                </div>
                
                `;
                Area.innerHTML += PlayerHTML ;
                counter++;
            }
    });

        if(counter > 0){

            let Area = document.querySelector("#players-collection");
            
            Area.className.includes("d-none") ? Area.classList.remove("d-none") : null;
            
            window.scrollBy(0,550);

        }  else {

        Swal.fire({
            icon: "info",
            title: "لا يوجد بيانات",
            confirmButtonText: "رجوع",
             confirmButtonColor: "#e01a22",
        })
        Area.className.includes("d-none") ?  null : Area.classList.remove("d-none") ; 
        
        } 
    } else {
        Swal.fire({
            icon: "info",
            title: "لا يوجد بيانات",
            confirmButtonText: "رجوع",
             confirmButtonColor: "#e01a22",
        })
    }

}
InputName.addEventListener("keydown",(e)=>{
    if(e.ctrlKey && e.key == "Enter"){
        HandleSearch();
    
    }
})