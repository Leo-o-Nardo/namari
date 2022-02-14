window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  navbarContent = document.getElementById("navbarContent");
  if (navbarContent.classList.contains('collapsing')){ return; }

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    if (navbarContent.classList.contains('show')) {
        $('.collapse').collapse("hide");
    }
} else {
    if (!navbarContent.classList.contains('show')) {
        $('.collapse').collapse("show");
    }
  }
}
function onLoadFunction(){
    var container = document.getElementById("container");
    var navbar = document.getElementById("navbar");
    var navbarContent = document.getElementById("navbarContent");
    container.style.marginTop = navbarContent.offsetHeight+navbar.offsetHeight+10+'px';

    var postit = document.getElementById("postit");
    postit.style.top = navbar.offsetHeight+10+'px';
    postit.style.height = navbarContent.offsetHeight-20+'px';

    if (getCookie('aceitoucookies') !== 'S'){
        document.getElementById("divCookies").style.display = '';
    }

}

function openInNewTab(url) {
    if (url == 'insta'){url = 'https://www.instagram.com/use.namari/';}
    else if (url == 'face'){url = 'https://www.youtube.com/watch?v=xvsLtNWwUxw';}
    else {url = 'https://twitter.com/zaqzobar';}
    window.open(url, '_blank').focus();
}


function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }

        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function SetCookie(){
    var date = new Date();
    date.setTime(+ date + (365 * 86400000));

    document.cookie = "aceitoucookies=S; expires="+date.toGMTString()+"; path=/;";
    document.getElementById("divCookies").style.display = 'none';
}

function mudaLayoutProd(tipo){
    const prodBoxList = document.getElementsByName("prodBox");
    for (let index = 0; index < prodBoxList.length; index++) {
        prodBoxList[index].className = '';
    }

    if (tipo == 0){
        for (let index = 0; index < prodBoxList.length; index++) {
            prodBoxList[index].classList.add("prodBoxList");
        }
    } else if (tipo == 1){
        for (let index = 0; index < prodBoxList.length; index++) {
            prodBoxList[index].classList.add("prodBoxImages");
        }
    } else {
        for (let index = 0; index < prodBoxList.length; index++) {
            prodBoxList[index].classList.add("prodBoxBigImage");
        }
    }
}

onLoadFunction();
