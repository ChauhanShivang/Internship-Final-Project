// Main Page
document.querySelector(".hamburger-menu").addEventListener("click", () => {
    document.querySelector(".container").classList.toggle("change");
})

document.querySelector(".nav-list").addEventListener("click", e => {
    const el = e.target.parentElement;

    if(el.classList[0] === "nav-link"){
        el.nextElementSibling.classList.toggle("change");
        el.classList.toggle("change");
    } 
})


// For Sign Up and Sign In Button
document.getElementById('loadlink').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'Loaders.html';
});
document.getElementById('loadlink-2').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'Loaders.html';
});



// Toggle Button (For Mode)
document.querySelector(".toggle").addEventListener("click", () => {
    document.querySelector(".container").classList.toggle("change-2");
})



// For Hamburger Menu
document.querySelector(".hamburger-menu-3").addEventListener("click", () => {
    document.querySelector(".navigation").classList.toggle("change-3");
    document.body.classList.toggle("no-scroll");
})





// Search Bar
const searchInputWrapper = document.querySelector(".search-input-wrapper");
const searchInput = document.querySelector(".search-input input");
const searchIcon = document.querySelector(".search-icon i");
const closeIcon = document.querySelector(".search-input i");

searchIcon.addEventListener("click", ()=>{
    searchIcon.parentElement.classList.add("change-4");
    searchInputWrapper.classList.add("change-4");

    setTimeout(()=>{
        searchInput.focus();
    }, 1000)
})

closeIcon.addEventListener("click", ()=>{
    searchIcon.parentElement.classList.remove("change-4");
    searchInputWrapper.classList.remove("change-4");
})  