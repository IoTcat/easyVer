# easyVer
yahoo! It can be unbelievably easy to fight with robots by including this Plugin~


## What is easyVer?
easyVer is a friendly plugin which can help you expel robots which are trying to steal user infomation from your website.</br>
With the help of easyVer you can easily identify whether it is a robot who is visiting your website.</br>
Basing on easyVer, it becomes quick and convenient for users to finish their login process which can make your site more friendly. 


## Quick start

[Click here to see how it works!](https://cn.yimian.xyz/etc/easyVer/)


## How to use easyVer?
 - To use easyVer, you must include the jquery.min.js and easyVer.min.js first.</br>
 - To keep the image displayed in shape, you also need to include the easyVer.min.css before using it in your HTML.</br>
 - To display a verification window, you only need to cite easyVer() in your js code.</br>
 - Please store the function name which you want to run after the verification in the global variable callBackFunctionName before citing easyVer().</br> 
 - In your HTML body, you need to include a div which class is verBox.</br>
A simple example:
```html
<!--include easyVer css file-->
<link type="text/css" rel="stylesheet" href="https://cdn.yimian.ac.cn/easyVer/easyVer.min.css">

<!--Put this div in your HTML body-->
<div class="verBox"></div>


<!--include jquery and easyVer js file::the js MUST be put AFTER the div-->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.yimian.ac.cn/easyVer/easyVer.min.js"></script>

<!--demo script for using easyVer-->
<script type="text/javascript">

//This is to indicate what js need to do after a user verification-->
callBackFunctionName="your_callBack_function";

//Cite to setup verification window::This should after the callback function assignment
easyVer();

//use this function to show a easyVer window
show_easyVer();

//declaration of your callback function
function your_callBack_function()
{
	alert('Verification finished!');
}

</script>
```

