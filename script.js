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
    function confirmar()
    {
        document.getElementById('Chismoso').addEventListener('submit', function(event) {
            var password = document.getElementsByName('contrasena')[0].value;
            var confirmPassword = document.getElementsByName('contrasena2')[0].value;
            if (password !== confirmPassword) {
                alert('las contraseñas no coinciden.');
                event.preventDefault(); 
            }
    }
}