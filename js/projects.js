let projects_container = document.getElementsByClassName('project')

Array.prototype.forEach.call(projects_container, (project, ind) => {
    project.addEventListener('mouseover', () => {
        Array.prototype.forEach.call(projects_container, (trigger, i) => {
            console.log(i, ind)
            if (i != ind) {
                // trigger.lastChild.parentNode.children[2].classList.addClass('hidden')
                trigger.lastChild.parentNode.children[2].classList.add('d-none')

            }
        })
        // console.log(trigger.lastChild.parentNode.children[2])
    });
    project.addEventListener('mouseout', () => {
        Array.prototype.forEach.call(projects_container, (trigger, i) => {
            console.log(i, ind)
            if (i != ind) {
                // trigger.lastChild.parentNode.children[2].classList.removeClass('hidden')
                trigger.lastChild.parentNode.children[2].classList.remove('d-none')

            }
        })
        // console.log(trigger.lastChild.parentNode.children[2])
    });
})

export default projects_container