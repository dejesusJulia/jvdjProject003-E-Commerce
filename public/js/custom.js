var productFile = document.getElementById('product_file');

productFile.addEventListener('change', showChange);


function showChange(event){
    // variables
    var productImg = document.getElementById('product_img').files[0];
    var productImgname = document.getElementById('product_img').files[0].name;

    // for image
    var filereader = new FileReader();
    filereader.readAsDataURL(productImg);
    filereader.onload = function(){
        var result = filereader.result;
        var img  = document.getElementById('preview');
        img.setAttribute('src', result);
    }

    // for label
    var label = event.target.nextElementSibling;
    label.innerText = productImgname;
}