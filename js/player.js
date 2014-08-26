function share_btn(event)
{
    document.getElementById("share").style.opacity="0";
    document.getElementById("share_btn").style.fontSize="0.8em";
    document.getElementById("share_btn").style.opacity="1";
}

function like_btn(event)
{
    document.getElementById("like").style.opacity="0";
    document.getElementById("like_btn").style.fontSize="0.8em";
    document.getElementById("like_btn").style.opacity="1";
}

function share_out(event)
{
    document.getElementById("share").style.opacity="1";
    document.getElementById("share_btn").style.fontSize="0em";
    document.getElementById("share_btn").style.opacity="0";
}

function like_out(event)
{
    document.getElementById("like").style.opacity="1";
    document.getElementById("like_btn").style.fontSize="0em";
    document.getElementById("like_btn").style.opacity="0";
}

function comment_on(event)
{
    document.getElementById("comment").style.border="3px solid #53585F";
    document.getElementById("comment").style.marginLeft="-2px";
    document.getElementById("comment_list").style.borderTop="transparent";
    document.getElementById("comment_list").style.top="3px";
}

function comment_out(event)
{
    document.getElementById("comment").style.border="1px solid #53585F";
    document.getElementById("comment").style.marginLeft="0px";
    document.getElementById("comment_list").style.borderTop="visible";
    document.getElementById("comment_list").style.top="1px";
}

function comment_focus(event)
{
    document.getElementById("comment_text").style.opacity="0";
    document.getElementById("comment_input").style.opacity="1";
}

function comment_focus_out(event)
{
    document.getElementById("comment_text").style.opacity="1";
    document.getElementById("comment_input").style.opacity="0";
}