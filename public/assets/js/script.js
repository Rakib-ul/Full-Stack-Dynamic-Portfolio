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

document.querySelectorAll(".title").forEach((abc => {
    abc.onclick = function () {
        this.innerHTML = `
        <h3>
        <a href="#">This is by JS</a>
        <p>This is assigned dynamically</p>
        </h3>
        `;
        this.classList.add("display");

        avatar = document.getElementById("avatar");

        avatar.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuOOWJtPWLZeMEbDgi28nE-fyEri1iZLAhNw&s";

        avatar.classList.add("display")
    };
}))