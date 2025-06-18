console.log(document.getElementById("test").innerText)

tags = document.querySelector(".find").children;
        for ( i = 0; i< tags.length; i++){
            tags[i].addEventListener('click', function(event){
                alert(event.target.innerText);
            }
            );
        }

document.querySelectorAll(".find").forEach((abc => {
    abc.onclick = function () {
        prompt(this.innerText);
    };
}))