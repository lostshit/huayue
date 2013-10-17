/*
Flash Name: Carousel
Description: Carousel图片轮播
*/
document.write('<ul id="carousel_cycle_image"><!--幻灯片区域--></ul>');
$importjs = (function()
{
    var uid = 0;
    var curr = 0;
    var remove = function(id)
    {
        var head = document.getElementsByTagName('head')[0];
        head.removeChild( document.getElementById('jsInclude_'+id) );
    };

    return function(file,callback)
    {
        var callback;
        var id = ++uid;
        var head = document.getElementsByTagName('head')[0];
        var js = document.createElement('script');
        js.setAttribute('type','text/javascript');
        js.setAttribute('src',file);
        js.setAttribute('id','jsInclude_'+id);
        if( document.all )
        {
            js.onreadystatechange = function()
            {
                if(/(complete|loaded)/.test(this.readyState))
                {
                    try
                    {
                        callback(id);remove(id);
                    }
                    catch(e)
                    {
                        setTimeout(function(){remove(id);include_js(file,callback)},2000);
                    }
                }
            };
        }
        else
        {
js.onload = function(){callback(id); remove(id); };
        }
        head.appendChild(js);
        return uid;
    };
}
)();

function show_carousel()
{
    var button_pos=4; //按扭位置 1左 2右 3上 4下
    var stop_time=3000; //图片停留时间(1000为1秒钟)
    var show_text=1; //是否显示文字标签 1显示 0不显示
    var txtcolor="000000"; //文字色
    var bgcolor="DDDDDD"; //背景色

    var text_height = 18;
    var focus_width = swf_width;
    var focus_height = swf_height - text_height;
    var total_height = focus_height + text_height;

    document.getElementById('carousel_cycle_image').innerHTML = carousel_html;
}

$importjs('data/flashdata/carousel/data.js', show_carousel);