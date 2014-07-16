            function span_access_key(id, el){
                var key = el.accessKey;
                el = $(el);
                var html = $(el).html();
                if(html.indexOf(key) >= 0){
                    html = html.replace(key, "<span class='access'>"+key+"</span>");
                    el.html(html);
                }else{
                    el.html(html + " [<span class='access'>"+key+"</span>]");
                }
            }
            
            function access_key_pressed(e){
                    //FINISH THIS!
                    /*return e.ctrlKey && e.altKey;
                    return e.altKey;
                    return e.altKey && e.shiftKey;
                    return e.ctrlKey;
                    return e.shiftKey && e.keyCode == 27*/
                if($.browser.mozilla && $.client.os == "Mac"){
                    return e.ctrlKey;
                }else if($.browser.mozilla){
                    return e.altKey && e.shiftKey; 
                }else{
                    return e.altKey;
                }
            }
            
            $(document).ready(function(){
                $("a[accesskey]").each(span_access_key);
            })
            function highlight(e){
                if(access_key_pressed(e)){
                    $(".access").addClass("access_highlight");
                }else{
                    $(".access").removeClass("access_highlight");
                }
            }
            $(document).keydown(function(e){
                highlight(e)
                
            });
            $(document).keyup(function(e){
                highlight(e)
            });
            