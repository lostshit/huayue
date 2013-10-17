$(function () {
    var totalnum = $("#img img").size();
    var index = 0;
    $('#img a img:eq(0)').css('display','inline');
    $($("#SwitchNav li")).addClass("nocurrent");
    $($("#SwitchNav li")).eq(0).addClass("current");
    $("#SwitchNav li").mouseover(function () {
        index = $("#SwitchNav li").index(this);
        showImg(index);
        clearInterval(MyTime);
    });
    $("#SwitchNav li").hover(function () {
        if (MyTime) {
            clearInterval(MyTime);
        }
    },
    function () {
        MyTime = setInterval(function () {
            index++;
            if (index == totalnum) { index = 0; }
            showImg(index)
        }, 6600);
    }
    );
    var MyTime = setInterval(function () {
        index++;
        if (index == totalnum) { index = 0; }
        showImg(index)
    }, 6600)
    function showImg(i) {
        $("#img img")
            .parent().siblings().find("img").hide()
            .eq(i).stop(true, true).fadeIn(1800)
        $("#SwitchNav li")
            .eq(i).addClass("current")
            .siblings().removeClass("current");
    }
})