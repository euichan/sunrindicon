function login(event)
{
    var a = document.getElementById("main");
    var b = document.getElementById("footer");
    var c = document.getElementById("nav");
    var d = document.getElementById("nav_login");
    var e = document.getElementById("main_box");
    a.style.left="223px";
    b.style.left="223px";
    c.style.left="222px";
    d.style.left="-58px";
    e.style.left="484px";
}

function login_back(event)
{
    var a = document.getElementById("main");
    var b = document.getElementById("footer");
    var c = document.getElementById("nav");
    var d = document.getElementById("nav_login");
    var e = document.getElementById("main_box");
    a.style.left="0px";
    b.style.left="1px";
    c.style.left="0px";
    d.style.left="-280px";
    e.style.left="262px";
}

function main(event)
{
    var a = document.getElementById("main");
    var b = document.getElementById("footer");
    var c = document.getElementById("nav");
    var d = document.getElementById("nav_login");
    var e = document.getElementById("main_box");
    a.style.left="0px";
    b.style.left="1px";
    c.style.left="0px";
    d.style.left="-280px";
    e.style.left="262px";
}

function login_hover(event)
{
    document.getElementById("main_box").style.position="fixed";
}

function search(event)
{
    document.getElementById("search_icon").style.right="-webkit-calc(11% + 200px)";

    document.getElementById("search_div").style.marginLeft="-200px";
    document.getElementById("search_div").style.width="200px";
    document.getElementById("search_div").style.bottom="37px";
    document.getElementById("search_div").style.borderColor="#bebebe";

    document.getElementById("searchange").style.opacity="0";

    document.getElementById("search_left").style.marginLeft="-200px";
    document.getElementById("search_left").style.borderColor="#bebebe";

    document.getElementById("search_right").style.height="5px";
    document.getElementById("search_right").style.marginTop="25px";
    document.getElementById("search_right").style.borderColor="#bebebe";

    document.getElementById("search_box").style.marginLeft="-190px";
    document.getElementById("search_box").style.width="190px";
    document.getElementById("search_box").style.opacity="1";
    document.getElementById("search_box").focus;
}

function Search_Over(event)
{
    document.getElementById("search_icon").style.right="11%";

    document.getElementById("search_div").style.marginLeft="0px";
    document.getElementById("search_div").style.width="0px";
    document.getElementById("search_div").style.height="30px";
    document.getElementById("search_div").style.bottom="37px";
    document.getElementById("search_div").style.borderColor="#37e5ff";

    document.getElementById("searchange").style.opacity="1";

    document.getElementById("search_left").style.marginLeft="0px";
    document.getElementById("search_left").style.borderColor="#37e5ff";

    document.getElementById("search_right").style.height="30px";
    document.getElementById("search_right").style.marginTop="0px";
    document.getElementById("search_right").style.borderColor="#37e5ff";


    document.getElementById("search_box").style.marginLeft="0px";
    document.getElementById("search_box").style.width="0px";
    document.getElementById("search_box").style.opacity="0";
}