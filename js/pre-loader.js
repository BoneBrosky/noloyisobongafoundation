let preLoader = console.log("pre-loader", document.readyState)

$(document).ready(function () {
    var Body = $('body');
    Body.addClass('preloader-site');
    setTimeout(() => {
        Body.removeClass('preloader-site');
        $('.preloader-wrapper').fadeOut();
    }, 1000);
});
export default preLoader