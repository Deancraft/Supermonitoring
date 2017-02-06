function resizeIframe() {
    var height = document.documentElement.clientHeight;
    height -= document.getElementById('frame').offsetTop;

    // not sure how to get this dynamically
    height -= 20; /* whatever you set your body bottom margin/padding to be */

    document.getElementById('frame').style.height = height + "px";

}