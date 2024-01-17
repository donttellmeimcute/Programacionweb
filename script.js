{
    function cargaEstrellas()
    {
        const bell = document.querySelector("#belleza")
        const output = document.querySelector("#medida")
        output.textContent = bell.value;
        var quant = bell.value;
        for(var i = 0;<quant;i++)
        {
            let image = new image();
            let imagesrc = "imagenes/estrella.png";
            image.src = src;
            image.style.width?"30px";
            document.querySelector('#medida').append(image);


        }
}
}