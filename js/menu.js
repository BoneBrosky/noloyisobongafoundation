let mobile_nav = document.getElementsByClassName("menu-modal")
let open_mobile_nav = document.getElementsByClassName("open-mobile-nav")
let menu_item_has_children = document.getElementsByClassName("menu-item-has-children")
let menu_item_expand = document.getElementsByClassName("menu-item-w-icon")
let sub_menu = document.getElementsByClassName('sub-menu')
let menu_icon_open = document.getElementsByClassName("menu-icon-open")
let menu_icon_close = document.getElementsByClassName("menu-icon-close")

let body = document.getElementsByTagName('body')
let navSide = document.getElementsByClassName("navSide")
let brand = document.getElementsByClassName("brand-container")


Array.prototype.forEach.call(open_mobile_nav, (trigger) => {
    trigger.addEventListener('click', () => {
        // trigger.classList.toggle('z-10')
        navSide[0].classList.toggle('z-50')
        brand[0].classList.toggle("z-50")
        Array.prototype.forEach.call(mobile_nav, (input) => {
            console.log('body', body)
            input.classList.toggle("hidden")
            input.classList.toggle("w-full")
            body[0].classList.toggle('overflow-hidden')
        })
        Array.prototype.forEach.call(menu_icon_open, (input) => {
            input.classList.toggle("hidden")
        })
        Array.prototype.forEach.call(menu_icon_close, (input) => {
            input.classList.toggle("hidden")
        })
    });
})

Array.prototype.forEach.call(menu_item_has_children, (input, i) => {
    let aLink = input.firstChild
    let div = document.createElement('div')
    let span = document.createElement('span')
    span.classList.add('material-symbols-outlined')
    div.classList.add('menu-item-w-icon')
    span.innerHTML = 'expand_more'
    div.append(span)
    input.firstChild.remove()
    div.append(aLink)
    input.appendChild(div)
})

Array.prototype.forEach.call(menu_item_expand, (icon, i) => {
    icon.addEventListener('click', () => {
        sub_menu[i].classList.toggle("block")
        menu_item_expand[i].firstChild.classList.toggle('icon-rotate')
    })
})
export default mobile_nav