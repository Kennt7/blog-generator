// "use strict"
var btn = document
    .getElementById("btn")
    .addEventListener("click", getPost);
var con = 0;
var div = document.getElementById("carDiv");

function getPost() {
    fetch('blogs.json').then((res) => {
        return res.json();
    })

    .then((post) => {
            for (let i = 0; i < 10; i++) {
                div.innerHTML +=
                    ` <div class = "card col-3 m-1 mx-auto">
                    <h5 class = "card-header m-1 mx-auto">"${post[con].title}" </h5>
                    <h2 class = "card-text">"${post[con].lead}" </h2>
                    <img class = "card-img-top" src ="image\sportauto.jpg" "${post[con].image}">
                     <div id="blogcontent" class = "card-body"> 
                     "${post[con].content}"
                     <p class = "card-footer">"${post[con].keywords}"  </p> 
                      </div>`
                con = con + 1;
            }
        })
        .catch((error) => {
            console.log(error);
        });
}