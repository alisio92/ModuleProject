/**
 * Created by alisio on 31/03/2015.
 */
document.addEventListener("DOMContentLoaded", init);

var api_key = "";
var api_secret = "";
var redirect_login_url = "";

function init(){
    getKey("api_key");
    getSecret("api_secret");
    getRedirect("redirect_login_url");
    var method1 = document.getElementById("method1");
    if(method1!= null) method1.addEventListener("click", sendDataSharer);

    var method2 = document.getElementById("method2");
    if(method2!= null) method2.addEventListener("click", sendDataDialog);

    var method3 = document.getElementById("method3");
    if(method3!= null) method3.addEventListener("click", sendDataCustom);
}

function sendDataSharer() {
    var myWindow1 = window.open("https://www.facebook.com/sharer/sharer.php?u=www.google.be", "", "width=500, height=500");
}

function sendDataDialog() {
    var myWindow2 = window.open("https://www.facebook.com/dialog/share?app_id=" + api_key + "&redirect_uri=" + redirect_login_url + "&href=http://www.google.be", "", "width=580, height=405");
}

function sendDataCustom() {
    callPHP("submit", "http://google.be", "this is a description", "Post from app", "User provided message");
}

function callPHP(fun, par1, par2, par3, par4){
    $.ajax({
        type: "GET",
        url: './php/facebookAPIAjax.php',
        data: {functionName: fun, link: par1, description: par2, message: par3, userMessage: par4},
        success: function(data){
            return data;
        }
    });
}

function getKey(fun){
    $.ajax({
        type: "GET",
        url: './php/facebookAPIAjax.php',
        data: {functionName: fun},
        success: function(data){
            api_key = data;
        }
    });
}

function getSecret(fun){
    $.ajax({
        type: "GET",
        url: './php/facebookAPIAjax.php',
        data: {functionName: fun},
        success: function(data){
            api_secret = data;
        }
    });
}

function getRedirect(fun){
    $.ajax({
        type: "GET",
        url: './php/facebookAPIAjax.php',
        data: {functionName: fun},
        success: function(data){
            redirect_login_url = data;
        }
    });
}
