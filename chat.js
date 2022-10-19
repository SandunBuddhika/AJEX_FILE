
function goToSignIn() {
    window.location = "signin.php";
}

function goToIndex() {
    window.location = "index.php";

}

function goToSignUp() {
    window.location = "signup.php";
}


function n(){
    setInterval(m, 3000);
}

function m(){
    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
       if(r.readyState==4){
           var text = r.responseText;
           var d = document.getElementById("d")
           d.innerHTML = text;
       }
    };
        

    r.open("POST","reloadchat.php",true)
    r.send();
}