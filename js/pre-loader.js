let preLoader = console.log("pre-loader", document.readyState)

$(document).ready(function () {
    var Body = $('body');
    Body.addClass('preloader-site');
    Body.addClass('overflow-hidden');
    setTimeout(() => {
        Body.removeClass('preloader-site');
        Body.removeClass('overflow-hidden');
        $('.preloader-wrapper').fadeOut();
    }, 1000);
});
export default preLoader