document.addEventListener("DOMContentLoaded", function () {
    const senhaInput = document.getElementById("senha");
    const progressBar = document.querySelector(".progress-bar");

    senhaInput.addEventListener("input", function () {
        const senha = senhaInput.value;
        const forca = calcularForcaDaSenha(senha);

        // Atualize a largura da barra de progresso com base na força da senha
        progressBar.style.width = forca + "%";
    });

    function calcularForcaDaSenha(senha) {
        if (senha.length < 8) {
            return 0; // A barra de progresso não é mostrada até que a senha tenha pelo menos 8 caracteres
        }
        return (senha.length / 12) * 100; // Suponha que a senha ideal tenha 12 caracteres
    }
});
