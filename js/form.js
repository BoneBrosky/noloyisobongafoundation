let form = document.getElementsByClassName('form')
let confirmNewsletter = document.getElementsByClassName('newsletter-check')
let form_notification = document.getElementsByClassName('form-notification')
let form_progress = document.getElementsByClassName('form-progress')
let form_message = document.getElementsByClassName('form-message')
let form_message_error = document.getElementsByClassName('form-message-error')
let formButton = form

//  State

let consent = false
let status
let resData = []

let urlOriginLocal = 'http://localhost/nlbf'
let urlOrigin = 'https://noloyisobongafoundation.org'

function submitForm(e) {
    e.preventDefault()
    const formDataFields = new FormData(e.srcElement.form)

    if (confirmNewsletter[0] != undefined) {
        formDataFields.append("consent", consent)
    }

    const data = Object.fromEntries(formDataFields)

    if (data.email != '' && data.name_surname != '' && data.consent != 'false') {
        Array.prototype.forEach.call(form_progress, (progress) => {
            progress.classList.add('flex')
            progress.classList.remove('hidden')
        })

        axios.post(`${urlOrigin}/wp-content/themes/noloyisobongafoundation/newsletter.php`, data)
            .then((res) => {
                resData = res.data
                status = res.status
                if (res.status == 200) {
                    Array.prototype.forEach.call(form_notification, (notification) => {
                        notification.classList.toggle('hidden')
                    })
                } else {
                    console.log('php response error', res.status)
                }

            })
            .finally(() => {
                if (resData.split('">')[1]?.split('.</')[0] == 'Successful') {
                    setTimeout(() => {
                        Array.prototype.forEach.call(form_progress, (progress) => {
                            progress.classList.remove('flex')
                            progress.classList.add('hidden')
                        })
                        Array.prototype.forEach.call(form_message, (message) => {
                            console.log('message.children', message.children)
                            message.classList.remove('hidden')
                            message.classList.add('flex')
                            message.children[1].innerHTML = resData
                        })
                        setTimeout(() => {
                            Array.prototype.forEach.call(form_message, (message) => {
                                message.classList.remove('flex')
                                message.classList.add('hidden')
                                message.children[1].innerHTML = ''
                            })
                            Array.prototype.forEach.call(form_notification, (notification) => {
                                notification.classList.toggle('hidden')
                            })
                            Array.prototype.forEach.call(confirmNewsletter, (confirm) => {
                                let value = confirm.innerHTML.trim()

                                if (value == 'radio_button_checked') {
                                    consent = false
                                    confirm.innerHTML = 'radio_button_unchecked'
                                } else if (value == 'radio_button_unchecked') {
                                    consent = true
                                    confirm.innerHTML = 'radio_button_checked'
                                }
                            })
                            e.srcElement.form.reset()
                        }, 6000);
                    }, 4000);
                } else {
                    setTimeout(() => {
                        Array.prototype.forEach.call(form_progress, (progress) => {
                            progress.classList.remove('flex')
                            progress.classList.add('hidden')
                        })
                        Array.prototype.forEach.call(form_message_error, (message) => {
                            console.log('message.children', message.children)
                            message.classList.remove('hidden')
                            message.classList.add('flex')
                            message.children[1].innerHTML = resData
                        })
                        setTimeout(() => {
                            Array.prototype.forEach.call(form_message_error, (message) => {
                                message.classList.remove('flex')
                                message.classList.add('hidden')
                                message.children[1].innerHTML = ''
                            })
                            Array.prototype.forEach.call(form_notification, (notification) => {
                                notification.classList.toggle('hidden')
                            })
                            Array.prototype.forEach.call(confirmNewsletter, (confirm) => {
                                let value = confirm.innerHTML.trim()

                                if (value == 'radio_button_checked') {
                                    consent = false
                                    confirm.innerHTML = 'radio_button_unchecked'
                                } else if (value == 'radio_button_unchecked') {
                                    consent = true
                                    confirm.innerHTML = 'radio_button_checked'
                                }
                            })
                            e.srcElement.form.reset()
                        }, 6000);
                    }, 4000);
                }
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
            if (confirmNewsletter[0] == undefined) return
            confirmNewsletter[0].addEventListener('click', confirmNewsletterInput);
        }
    })
})

export default form