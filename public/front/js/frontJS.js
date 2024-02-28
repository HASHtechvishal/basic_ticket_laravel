function enableInput() {
    var radioButtons = document.getElementsByName("flight-type");
    var textInput = document.getElementById("textInput");
    
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            textInput.removeAttribute("readonly");
        } else {
            textInput.setAttribute("readonly", "readonly");
        }
    }
}
