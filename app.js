const stickyheader = document.querySelector('.header2')
const style = getComputedStyle(stickyheader)

jQuery(".plusRotate").click(function() {
    //alert(jQuery(this).css("transform"));
    if (jQuery(this).css("transform") == 'none') {
        jQuery(this).css("transform", "rotate(45deg)");
        jQuery(".hidden")
            .css("visibility", "visible")
            .css("transform", "translate(0, 0)")
            .css("opacity", "1");
        document.body.classList.add('no-scroll')

    } else {
        jQuery(this).css("transform", "");
        jQuery(".hidden")
            .css("transform", "translate(-100%, 0)")
            .css("opacity", "0");
        setTimeout(function() {
            jQuery(".hidden")
                .css("visibility", "hidden")
        }, 250)
        document.body.classList.remove('no-scroll')
    }
});