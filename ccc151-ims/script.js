document.querySelector(".create-new").addEventListener("click", function(){
    document.querySelector(".popup-create").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup-create").classList.remove("active");
});

    
function createPopup(id){
    let popupNode = document. querySelector(id);
    let form = popupNode.querySelector(".form");
    let closeBtn = popupNode.querySelector(".close-btn");
    function openPopup(){
        popupNode.classList.add("active");
    }
    function closePopup(){
        popupNode.classList.remove("active");
    }
    overlay.addEventListener("click", closePopup);
    closeBtn.addEventListener("click", closePopup);
    return openPopup;
}

let popup = createPopup("#popup");
document.querySelector("#open-popup").addEventListener("click", popup);