var scrolls = document.getElementById("scroll-btn");

scrolls.addEventListener("click", () => {
    window.scrollTo(0, 0);
})







$(document).ready(function(){
    $("#deals").click(function(){
        // alert("hi");
        $.ajax({
            url:"deals.html",
            thpe:"get",
            data:{
                name:"moni",
                age:"23"
            },
            
            success:function(res){
                // console.log(res);
                // alert(res);
            $("#shows").html("hello");
            }, 
            error:function(){
                alert("error occurs");
            }
        })
    })
})







var i=0;
var images = ["b1.jpg","b2.jpg","b3.jpg"];

function imgChange(){
    // debugger;

    document.slide.src = `assets/image/${images[i]}`;

    if(i < images.length - 1 ){
        i++;
    }else{
        i = 0;
    }
    setTimeout("imgChange()",3000);
}

window.onload = imgChange;












const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function () {
    var myObj = JSON.parse(this.responseText);
    // console.log(myObj.products);
    var a = myObj.products;
    a.forEach((element, ab, bc) => {
        // console.log(element.img);
        document.getElementById('col').innerHTML += ` <div class="col">
                                                         <div class="card">
                                                         <img src="assets/image/product/${element.img}" class="card-img-top" height="230px"alt="...">
                                                         <div class="card-body">
                                                             <h5 class="card-title">${element.name}</h5>
                                                             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                             <a href="https://www.amazon.in/" class=""target="_blank">Show more.....</a>
                                                             
                                                         </div>
                                                         </div>
                                                     </div>`



 });


    // for (let i = 0; i < a.length; i++) {

    // console.log(a[i]);
    // document.getElementById('col').innerHTML = a[i].img;
    // console.log(a[i].img);
    // var para = document.createElement('p');
    // let node = document.createTextNode(a[i].img)
    // let att = document.createAttribute('src');
    // att.value = `assets/image/product/${a[i].img}`
    // para.appendChild(node);
    // para.setAttribute(att,a);

    // document.getElementById('col').appendChild(para);


    //     document.getElementById('col').innerHTML =  `<div class="row row-cols-1 row-cols-md-2 g-4" >
    //         <div class="col" >
    //        <div class="card">
    //            <img src="assets/image/product/${a[i].img}" class="card-img-top" alt="...">
    //            <div class="card-body">
    //                <h5 class="card-title">${a[i].name}</h5>
    //                <p class="card-text">This is a longer card with supporting text below as a natural lead-in
    //                    to additional content. This content is a little bit longer.</p>
    //            </div>
    //        </div>
    //    </div>

    //       </div>`



    // }
}
xmlhttp.open("GET", "a.json");
xmlhttp.send();



        
// function login(){
//     alert("Hui");

//     let x = document.forms["login-form"]["username"].value;

//     alert(x);
// }
    
