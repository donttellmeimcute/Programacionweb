{
    function cargaEstrella()
    {
        const bell = document.querySelector("#belleza");
        const output = document.querySelector("#medida");
        output.textContent = bell.value;
        let quant = bell.value;
        for(var i = 0; i < quant; i++)
        {
            let image = new Image();
            let imageSrc = "imagenes/estrella.png";
            image.src = imageSrc;
            image.style.width = "20px";
            document.querySelector('#medida').append(image);
        }
    }
}