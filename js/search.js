let toggle_search = document.getElementsByClassName("toggle-search")
let donate_container = document.getElementsByClassName("donate-container")
let search_input = document.getElementsByClassName("search-input")
let search_icon_open = document.getElementsByClassName("search-icon-open")
let search_icon_close = document.getElementsByClassName("search-icon-close")
let mobile_nav = document.getElementsByClassName("main-nav")
let a = document.getElementsByClassName("mobile-nav")

Array.prototype.forEach.call(toggle_search, (trigger) => {
    trigger.addEventListener('click', () => {
        // console.log(e.target)
        donate_container[0].classList.toggle("hidden")
        trigger.classList.toggle("bg-white")
        Array.prototype.forEach.call(search_input, (input) => {
            input.classList.toggle("hidden")
        })
        Array.prototype.forEach.call(search_icon_open, (input) => {
            input.classList.toggle("hidden")
        })
        Array.prototype.forEach.call(search_icon_close, (input) => {
            input.classList.toggle("hidden")
        })
    });
})
export default donate_container