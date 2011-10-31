<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FARFAN</title>
<!--     <link rel="stylesheet" href="/localhost/style.css"> -->
    <style type="text/css">
/* =============================================================================
                      RESET
   ========================================================================== */

html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,figure,footer,header,hgroup,menu,nav,section,menu,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}nav ul{list-style:none}article,aside,figure,footer,header,hgroup,nav,section{display:block}blockquote,q{quotes:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted #000;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}

    /* =============================================================================
                      STYLES
        ========================================================================== */
html{
  height: 100%;
  background: black url(data:image/png;base64,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) 0 0 repeat;

}
body{
    color: #cbcbcb;
    font-family: ubuntu condensed;
    height: 100%;
}

a {
   color: #cbcbcb;
}
#content{
   padding: 20px;
   min-height: 100%;
   background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA8AAAAAyCAYAAACTZLIUAAADHmlDQ1BJQ0MgUHJvZmlsZQAAeAGFVN9r01AU/tplnbDhizpnEQk+aJFuZFN0Q5y2a1e6zVrqNrchSJumbVyaxiTtfrAH2YtvOsV38Qc++QcM2YNve5INxhRh+KyIIkz2IrOemzRNJ1MDufe73/nuOSfn5F6g+XFa0xQvDxRVU0/FwvzE5BTf8gFeHEMr/GhNi4YWSiZHQA/Tsnnvs/MOHsZsdO5v36v+Y9WalQwR8BwgvpQ1xCLhWaBpXNR0E+DWie+dMTXCzUxzWKcECR9nOG9jgeGMjSOWZjQ1QJoJwgfFQjpLuEA4mGng8w3YzoEU5CcmqZIuizyrRVIv5WRFsgz28B9zg/JfsKiU6Zut5xCNbZoZTtF8it4fOX1wjOYA1cE/Xxi9QbidcFg246M1fkLNJK4RJr3n7nRpmO1lmpdZKRIlHCS8YlSuM2xp5gsDiZrm0+30UJKwnzS/NDNZ8+PtUJUE6zHF9fZLRvS6vdfbkZMH4zU+pynWf0D+vff1corleZLw67QejdX0W5I6Vtvb5M2mI8PEd1E/A0hCgo4cZCjgkUIMYZpjxKr4TBYZIkqk0ml0VHmyONY7KJOW7RxHeMlfDrheFvVbsrj24Pue3SXXjrwVhcW3o9hR7bWB6bqyE5obf3VhpaNu4Te55ZsbbasLCFH+iuWxSF5lyk+CUdd1NuaQU5f8dQvPMpTuJXYSWAy6rPBe+CpsCk+FF8KXv9TIzt6tEcuAcSw+q55TzcbsJdJM0utkuL+K9ULGGPmQMUNanb4kTZyKOfLaUAsnBneC6+biXC/XB567zF3h+rkIrS5yI47CF/VFfCHwvjO+Pl+3b4hhp9u+02TrozFa67vTkbqisXqUj9sn9j2OqhMZsrG+sX5WCCu0omNqSrN0TwADJW1Ol/MFk+8RhAt8iK4tiY+rYleQTysKb5kMXpcMSa9I2S6wO4/tA7ZT1l3maV9zOfMqcOkb/cPrLjdVBl4ZwNFzLhegM3XkCbB8XizrFdsfPJ63gJE722OtPW1huos+VqvbdC5bHgG7D6vVn8+q1d3n5H8LeKP8BqkjCtbCoV8yAAAACXBIWXMAAAsTAAALEwEAmpwYAAABbmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNC40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iPgogICAgICAgICA8ZGM6c3ViamVjdD4KICAgICAgICAgICAgPHJkZjpCYWcvPgogICAgICAgICA8L2RjOnN1YmplY3Q+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgrlPw1BAAAEO0lEQVR4Ae3XwWrrQBBE0Tj//88OyspZOPSikYTv8So8htHU6YZHPZ7P59fL7/Hy939/bp67611H/snbJmemd03PbX5z867p+6fnrnjb5jc379o023zX5K6tM5sGm3fdMd/Wmyb3fLrlmfn+/Id8fPjNb3LuzDPHM8/8nm+9WYyXf76bUX1Hpvmn5ybzveKuO3/zirdtzumK91/xzVPMvo9kfgQIECBAgAABAgQIECBA4NMFFOBPn7B8BAgQIECAAAECBAgQIPAroABbBAIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYSAApwYs5AECBAgQIAAAQIECBAgoADbAQIECBAgQIAAAQIECBBICCjAiTELSYAAAQIECBAgQIAAAQIKsB0gQIAAAQIECBAgQIAAgYTAD2JUNmFUwpagAAAAAElFTkSuQmCC) top center repeat-y;
}
span{
   float:left;
   border-bottom: 1px solid #d8d8d8;  
}
li{
   list-style: none;    
}
li a{
   text-transform:uppercase;
   margin:5px auto;
   padding: 5px;
   text-shadow: 0 -1px 2px black;
   text-decoration:none;
   text-align: center;
   border-bottom:1px solid rgba(117,119,123,0.5);
   border-top:1px solid rgba(0,0,0,0.5);
   max-width:400px;
   display: block;
   -moz-border-radius   : 3px;  
   -webkit-border-radius: 3px;  
   -o-border-radius     : 3px;
   border-radius        : 3px;
   -webkit-box-shadow   : 0px 0px 10px rgba(0,0,0,0.4) inset;
   -moz-box-shadow      : 0px 0px 10px rgba(0,0,0,0.4) inset;
   box-shadow           : 0px 0px 10px rgba(0,0,0,0.4) inset;
   -webkit-transition: all 0.1s ease-in-out;
   -moz-transition   : all 0.2s ease-in-out;
   -o-transition     : all 0.2s ease-in-out;
   transition        : all 0.2s ease-in-out;

}

li a:hover{
   color: white;
   text-shadow: 0 -1px 2px black, 0 0 20px rgba(255,255,255,0.5);
   background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.05)),to(rgba(0, 0, 0, 0.09)));
   background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.09));
   background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.09));
   background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.09));
   background-image: -ms-linear-gradient(top, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.09));
   background-image: linear-gradient(top, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.09));
}
li a:active{
   color: #666666;
   text-shadow: 0 -1px 2px black;
   background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.09)),to(rgba(255, 255, 255, 0.05)));
   background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.09), rgba(255, 255, 255, 0.05));
   background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.09), rgba(255, 255, 255, 0.05));
   background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.09), rgba(255, 255, 255, 0.05));
   background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.09), rgba(255, 255, 255, 0.05));
   background-image: linear-gradient(top, rgba(0, 0, 0, 0.09), rgba(255, 255, 255, 0.05));
}
    </style>
</head>
<body>
<div id="content">
    <?php
// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
  $dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//  count elements in array
$indexCount = count($dirArray);
$projectCount = count($dirArray) - 1;
Print ("<span>$projectCount Projects</span><br>\n");

// sort 'em
sort($dirArray);
// print 'em
    print('<ul class="list">');
    // loop through the array of files and print them all
    for($index=0; $index < $indexCount; $index++) {
            if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
        print("<li><a href=\"$dirArray[$index]\">$dirArray[$index]</a></li>");
      }
    }
    print("</ul>\n");
?>

</div>
</body>
</html>