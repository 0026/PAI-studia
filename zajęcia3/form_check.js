function checkString(str){
    return /^[\s\t\r\n]*$/.test(str);
}
function checkEmail(str) {
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    return !email.test(str);
}

function validate(formularz){
    if (
        checkStringAndFocus(formularz.elements["f_imie"],"Podaj imie",checkString) &&
        checkStringAndFocus(formularz.elements["f_nazwisko"],"Podaj nazwisko",checkString) &&
        checkStringAndFocus(formularz.elements["f_kod"],"Podaj kod",checkString) &&
        checkStringAndFocus(formularz.elements["f_ulica"],"Podaj ulice",checkString) &&
        checkStringAndFocus(formularz.elements["f_miasto"],"Podaj miasto",checkString) &&
        checkStringAndFocus(formularz.elements["f_email"],"Podaj maile",checkEmail)
    ){
        return true;
    }
    return false;
}
function checkStringAndFocus(obj,msg,val){
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if(val(str)){
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }else{
        document.getElementById(errorFieldName).textContent ="";
        return true;
    }
}

function showElement(e) {
    document.getElementById(e).style.visibility = 'visible';
   }
function hideElement(e) {
    document.getElementById(e).style.visibility = 'hidden';
}

function turboFunkcjaTomasza(formularz){
    console.log(formularz.elements["f_plec"]);
    if (formularz.elements["f_plec"].value=="f_k"){
        console.log("kkk")
        showElement("NazwiskoPanienskie");
    }else{
        hideElement("NazwiskoPanienskie");
    }

}

function alterRows(i, e) {
    if (e) {
        if (i % 2 == 1) {
            e.setAttribute("style", "background-color: Aqua;");
        }
        e = e.nextSibling;
        while (e && e.nodeType != 1) {
            e = e.nextSibling;
        }
        alterRows(++i, e);
    }
}
function koloraneTabeliTomka(){
    var x=document.getElementsByTagName("TBODY")[0].getElementsByTagName("TR")
    //var x = document.getElementsByTagName("TR");
    for (let i = 0; i < x.length; i++) {
        alterRows(i,x[i]);
      }
}

function nextNode(e) {
    while (e && e.nodeType != 1) {
        e = e.nextSibling;
    }
    return e;
}

function prevNode(e) {
    while (e && e.nodeType != 1) {
        e = e.previousSibling;
}
    return e;
}
function swapRows(b) {
    let tab = prevNode(b.previousSibling);
    let tBody = nextNode(tab.firstChild);
    let lastNode = prevNode(tBody.lastChild);
    tBody.removeChild(lastNode);
    let firstNode = nextNode(tBody.firstChild);
    tBody.insertBefore(lastNode, firstNode);
}

function cnt(form, msg, maxSize) {
    if (form.value.length > maxSize)
        form.value = form.value.substring(0, maxSize);
    else
        msg.innerHTML = maxSize - form.value.length;
}
   