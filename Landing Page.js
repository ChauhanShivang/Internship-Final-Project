// For Login Button
document.querySelector(".update-btn").addEventListener("click", () => {
    document.querySelector(".update-form-wrapper").classList.add("change");
    document.querySelector(".banner-text").classList.add("change");
})

document.querySelector(".update-x").addEventListener("click", () => {
    document.querySelector(".update-form-wrapper").classList.remove("change");
    document.querySelector(".banner-text").classList.remove("change");
})


// For Sign Up Button
document.querySelector(".delete-btn").addEventListener("click", () => {
    document.querySelector(".delete-form-wrapper").classList.add("changee");
    document.querySelector(".banner-text").classList.add("changee");
})

document.querySelector(".delete-x").addEventListener("click", () => {
    document.querySelector(".delete-form-wrapper").classList.remove("changee");
    document.querySelector(".banner-text").classList.remove("changee");
})