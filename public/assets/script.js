// Cookies
document.getElementById('cookieBtn').onclick = function () {
    const cookieDiv = document.getElementById('cookieBtn').parentElement;
    cookieDiv.parentElement.removeChild(cookieDiv);
    showMessage("Cookies wurden erfolgreich bestätigt! ");
};

// Success Message Cookies
function showMessage(msg) {
    const info = document.createElement("div");
    info.classList.add("msg");
    const txt = document.createElement("p");
    txt.innerHTML = msg;
    const btn = document.createElement("button");
    btn.innerHTML = "X";
    btn.onclick = function () {
        info.style.display = 'none';
    }
    info.appendChild(txt);
    info.appendChild(btn);
    document.getElementsByTagName('article')[0].prepend(info);
}

/**
	Creates one Box inside a container by copieing a default-box and then adding the data
**/
function newBox(containerEle, default_box, title, body, imgPath, productId){
	const newBox = default_box.cloneNode(true); // true: incl. all subs
	newBox.getElementsByClassName("box-title")[0].innerHTML = title;
	newBox.getElementsByClassName("box-body")[0].innerHTML = body;
	newBox.getElementsByTagName("img")[0].src = imgPath;
	newBox.style.display="block";
	newBox.href = "product.php?p="+productId;
	containerEle.appendChild(newBox);
}

