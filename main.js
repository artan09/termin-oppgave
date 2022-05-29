function hideiconbar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    //iconBar.style.display = "none";
    //navigation.style.display = "";
    navigation.classList.remove("hide");
    console.log("hello world")
}

function showiconbar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}

