let gallery_item = document.getElementsByClassName('wp-block-image')
let modal = document.getElementsByClassName('modal')
let modal_close = document.getElementsByClassName('modal-close')
let image_area = document.getElementsByClassName('image-area')
let body = document.getElementsByTagName('body')

// console.log('gallery_item', gallery_item)
Array.prototype.forEach.call(gallery_item, (gallery) => {

    console.log('image url', gallery.children[0].currentSrc)
    gallery.addEventListener('click', (e) => {
        let modal_html = `<img class="w-full h-auto" src="${e.srcElement.currentSrc}" />`
        let error_html = `<div class="flex flex-col gap-5 items-center"><div class="text-center text-red-600 font-bold"><span class="material-symbols-outlined text-inherit">error</span><h1 class="text-inherit">Error</h1></div><button class="bg-[#009688] hover:bg-[#00796B] text-white px-5 py-2 rounded-full"><a href="${e.srcElement.baseURI}">Refresh</a></button></div>`
        // console.log('openImage: image area', image_area[0], modal_close)
        body[0].classList.toggle('overflow-hidden')
        modal[0].classList.toggle('hidden')
        if (e.srcElement.currentSrc == '') {
            image_area[0].innerHTML = error_html
        } else {
            image_area[0].innerHTML = modal_html
        }

    });
})

modal_close[0].addEventListener('click', () => {
    modal[0].classList.toggle('hidden')
    image_area[0].children[0].remove()
    // console.log('close: image area', image_area[0].children)
    body[0].classList.toggle('overflow-hidden')
})

export default gallery_item;