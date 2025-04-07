<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<style>
@import url('https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
html {
    background-color: #F0F0F0;
    font-size: 9pt;
}
a { color: #0067E6;}
a:visited { color: #3743DD;}
a:hover { color: #F57000;}
body {
    font-family: "Victor Mono", 'Courier New', Courier, monospace;
    padding-top: 20px;
}
div.main {
    background-color: #fff;
    margin: 0px auto;
    max-width: 120ch;
    padding: 20px 50px 20px 50px;
    margin-bottom: 40px;
}
table {
    width: 100%;
}
footer {
    margin-bottom: 40px;
    vertical-align: top;
}
p.notice { 
			border: 2px solid #EA4335;
			color: #EA4335;
			padding: 10px;
}
p.disclaimer {
    border: 1px solid #ffbe0b;
    color: #997207;
    background-color: #ffbe0b4D;
    margin: 0 auto;
    padding: 10px;
    max-width: 90%;
    text-align: center;
    font-size: 10pt;
}
table {
    font-size: 10pt;
}
table a:link {
    text-decoration: none;
}
h1 {
    font-family: "Inter", 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    font-weight: 900;
}
p { 
    font-family: "Inter", 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    font-size: medium;
    text-align: center;
}
div.drive {
    width: 700px;
    float: right;
    text-align: right;
    font-size: 9pt;
}

table tr:hover {
    font-weight: 800;
}

table a[href$=".iso"],table a[href$=".ISO"]  {
    background: url('http://img.icons8.com/officel/13/cd.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".7z"],table a[href$=".zip"]  {
    background: url('http://img.icons8.com/tiny-color/13/archive-folder.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}

table a[href$=".7z"],table a[href$=".zip"] ,table a[href$=".rar"] ,table a[href$=".RAR"]{
    background: url('http://img.icons8.com/tiny-color/13/archive-folder.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".txt"],table a[href$=".t"]  {
    background: url('http://img.icons8.com/forma-thin/13/document.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".md5.txt"],table a[href$=".md5.t"],table a[href$=".sha256.txt"],table a[href$=".sha1.t"] ,table a[href$="md5sum.txt"]{
    background: url('http://img.icons8.com/small/13/hashtag.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".pdf"] {
    background: url('http://img.icons8.com/officexs/13/pdf-2.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".exe"], table a[href$="Win11_23H2_English_x64.iso"] {
    background: url('http://img.icons8.com/external-tal-revivo-color-tal-revivo/13/external-microsoft-corporation-an-american-multinational-technology-company-logo-color-tal-revivo.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$="/"] {
    background: url('http://img.icons8.com/color/13/folder-invoices--v1.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".img"], table a[href$=".ima"] {
    background: url('http://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/13/external-floppy-disk-computer-xnimrodx-lineal-color-xnimrodx.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}
table a[href$=".ps1"] {
    background: url('http://img.icons8.com/external-tal-revivo-color-tal-revivo/13/external-powershell-a-task-based-command-line-shell-and-scripting-language-logo-color-tal-revivo.png') no-repeat;
    background-position: left 4px;
    vertical-align: middle;
    padding-left: 20px;
}

table tr td {
    padding-top: 5px;
}

</style>
<link rel="author" href="/humans.txt" />
<script defer data-project="67e48dddb96982443769bff1" src="https://cdn.jsdelivr.net/gh/litlyx/litlyx-js/browser/litlyx.js"></script>
</head>
<body>
<div class="main">
    
<div class="drive">
<img width="16" height="16" src="https://img.icons8.com/external-flat-chattapat-/16/external-data-computer-hardware-flat-chattapat-.png" alt="external-data-computer-hardware-flat-chattapat-"/> 
<span style="margin-right: 10px;">/dev/sdc1</span>
<strong>Used:</strong> <span style="margin-right: 10px;"><?php echo shell_exec("df -h | grep sdc1 | awk '{print $3}' | tr -d '\n'"); ?></span>
<strong>Avail:</strong> <span style="margin-right: 10px;"><?php echo shell_exec("df -h | grep sdc1 | awk '{print $2}' | tr -d '\n'"); ?></span>
<strong>Free:</strong> <span style="margin-right: 20px;"><?php echo shell_exec("df -h | grep sdc1 | awk '{print $4}' | tr -d '\n'"); ?></span>
<progress max="100" high="80" value="<?php echo shell_exec("df -h | grep sdc1 | awk '{print $5}'| sed 's/%//g' | tr -d '\n'"); ?>"></progress>
</div>

<div class="d" style="display:none">
Used: 2.9T<br>
Avail: 15T<br>
Free: 12T<div class="bar"><div class="bar_used" style="width: "></div></div>
<progress max="100" high="80" value="20"></progress>
</div>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<h1>junkdrv</h1>
<p>
</p>  