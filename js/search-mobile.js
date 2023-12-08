let toggle_search2 = document.getElementsByClassName("toggle-search2")
let donate_container = document.getElementsByClassName("donate-container")
let search_input = document.getElementsByClassName("search-input")
let search_icon_open = document.getElementsByClassName("search-icon-open")
let search_icon_close = document.getElementsByClassName("search-icon-close")
let main_nav = document.getElementsByClassName("main-nav")
let mobile_nav = document.getElementsByClassName("mobile-nav")

Array.prototype.forEach.call(toggle_search2, (trigger) => {
    trigger.addEventListener('click', () => {
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
        Array.prototype.forEach.call(main_nav, (input) => {
            Array.prototype.forEach.call(mobile_nav, (mobile) => {
                mobile.classList.toggle("hidden")
            })
            input.classList.toggle("hidden")
        })
    });
})
export default toggle_search2