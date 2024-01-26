let form = document.getElementsByClassName('form')
let form_container = document.getElementsByClassName('from-container')
let confirmNewsletter = document.getElementsByClassName('newsletter-check')
let form_notification = document.getElementsByClassName('form-notification')
let form_progress = document.getElementsByClassName('form-progress')
let form_success = document.getElementsByClassName('form-success')
let form_error = document.getElementsByClassName('form-error')
let form_message = document.getElementsByClassName('form-message')
let form_message_error = document.getElementsByClassName('form-message-error')
let formButton = form

//  State
let status
let resData = []

let urlOriginLocal = window.location.origin

async function submitForm(e) {
    e.preventDefault()

    const formDataFields = new FormData(e.srcElement.form)

    const data = Object.fromEntries(formDataFields)
    console.log('data', data)

    if (data.email != '' && data.name_surname != '' && data.consent != 'false') {
        Array.prototype.forEach.call(form_progress, (progress) => {
            progress.classList.remove('hidden')
        })
        // form_container[0].classList.toggle('opacity-0')
        axios.post(`${urlOriginLocal}/wp-content/themes/select-few/client-quote.php`, formDataFields)
            .then()
            .then((res) => {
                resData = res.data
                status = res.status
                // form_container[0].classList.toggle('opacity-0')
                // progress.classList.toggle('hidden')
                form_progress[0].classList.add('hidden')

                if (resData == "Message has been sent.") {
                    form_message[0].innerHTML = `<h1 class="text-2xl text-white">${resData}</h1>`
                    form_success[0].classList.toggle('hidden')

                    let timeout = setTimeout(() => {
                        form_success[0].classList.toggle('hidden')
                        e.srcElement.form.reset()
                    }, 5000);
                } else {
                    console.log("log", form_message)
                    form_message[1].innerHTML = `<h1 class="text-2xl text-white">Error Please Try Again.</h1>`
                    form_error[0].classList.toggle('hidden')

                    let timeout3 = setTimeout(() => {
                        form_error[0].classList.toggle('hidden')
                        e.srcElement.form.reset()
                    }, 5000);
                }



                // clearTimeout(timeout)
                // console.log('resData', resData)

            })
    } else if (data.email == '' && data.name_surname == '') {
        alert('email and name fields are empty')
    } else if (data.email == '') {
        alert('email field is empty')
    } else if (data.name_surname == '') {
        alert('name field is empty')
    } else if (data.consent == 'false') {
        alert('Please Consent to the terms')
    }

}

function confirmNewsletterInput(e) {
    // e.preventDefault()

    let value = e.target.innerHTML.trim()

    if (value == 'radio_button_checked') {
        consent = false
        e.target.innerHTML = 'radio_button_unchecked'
    } else if (value == 'radio_button_unchecked') {
        consent = true
        e.target.innerHTML = 'radio_button_checked'
    }
}

Array.prototype.forEach.call(form, () => {

    Array.prototype.forEach.call(formButton, (formBTN) => {
        let buttonIndex = formBTN.length - 1
        let submitButton = formBTN[buttonIndex]
        let isSubmitButton = formBTN[buttonIndex].classList.value.includes('submit')

        if (isSubmitButton) {
            submitButton.addEventListener('click', submitForm);
            // if (confirmNewsletter[0] == undefined) return
            // confirmNewsletter[0].addEventListener('click', confirmNewsletterInput);
        }
    })
})

export default form