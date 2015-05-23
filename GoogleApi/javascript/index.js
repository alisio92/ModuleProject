/**
 * Created by alisio on 23/05/2015.
 */
document.addEventListener("DOMContentLoaded", init);

var api_key = "";
var api_secret = "";
var redirect_login_url = "";

function init(){
    var method1 = document.getElementById("method1");
    if(method1!= null) method1.addEventListener("click", sendDataSharer);
}

function sendDataSharer() {
    var myWindow1 = window.open("https://plus.google.com/share?url=http%3A%2F%2Fwww.google.be", "", "width=500, height=500");
}