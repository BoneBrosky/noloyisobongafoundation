let triggerArray = document.getElementsByClassName("trigger")
let triggerContentArray = document.getElementsByClassName("accordion-content")
let triggerIconArray = document.getElementsByClassName("accordion-icon")

Array.prototype.forEach.call(triggerArray, (trigger, i) => {
    trigger.addEventListener('click', () => {

        Array.prototype.forEach.call(triggerIconArray, (icon, indx) => {
            if (i == indx) {
                icon.classList.toggle("icon-rotate")
            }
        })

        Array.prototype.forEach.call(triggerContentArray, (item, indx) => {
            if (i == indx) {
                item.classList.toggle("hidden")
                item.classList.toggle("margin")
                trigger.classList.toggle("margin")
            }
        })
    });
});

export default triggerArray