    var navLinks=document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right="0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }

    var fullImgBox=document.getElementById("fullImgBox");
    var fillImg=document.getElementById("fullImg");
    function openFullImg(pic){
        fullImgBox.style.display="flex";
        fullImg.src=pic;
    }
    function closeFullImg(){
        fullImgBox.style.display ="none";
    }