let toggle_search = document.getElementsByClassName("toggle-search")
let search_input = document.getElementsByClassName("search-input")
let search_icon_open = document.getElementsByClassName("search-icon-open")
let search_icon_close = document.getElementsByClassName("search-icon-close")

let search_container = document.getElementsByClassName("search-container")
let navSide = document.getElementsByClassName("navSide")
let brand = document.getElementsByClassName("brand")

Array.prototype.forEach.call(toggle_search, (trigger) => {
    trigger.addEventListener('click', () => {
        // console.log(e.target)
        trigger.classList.toggle("bg-white")
        Array.prototype.forEach.call(search_input, (input) => {
            input.classList.toggle("hidden")
            search_container[0].classList.toggle('bg-black')
            search_container[0].classList.toggle('bg-opacity-30')
            if (window.innerWidth <= 414) {
                search_container[0].classList.toggle('backdrop-blur-lg')

                navSide[0].classList.toggle('z-50')
                brand[0].classList.toggle("z-50")
            } else {
                search_container[0].classList.toggle('bg-transparent')
                brand[0].classList.toggle("z-50")
            }
        })
        Array.prototype.forEach.call(search_icon_open, (input) => {
            input.classList.toggle("hidden")
        })
        Array.prototype.forEach.call(search_icon_close, (input) => {
            input.classList.toggle("hidden")
            input.classList.toggle("flex")
        })
    });
})
export default toggle_search