var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    freeMode: true,
});

var x = document.getElementsByClassName("idFilmes");


for(let i = 0; i < x.length; i++){
    x[i].addEventListener("click", () => {
        alert("aqui");
        console.log(x[i].innerHTML + 1);
    });
}

var x = document.getElementsByClassName("user-choice-block");

for(let i = 0; i < x.length; i++){
    x[i].addEventListener("click", () => {
       window.location.href = "https://api.polimetal.com.br/projeto/streamlab/index.php";
    });
}