 // Validação de e-mail com regex
  document.getElementById('email').addEventListener('input', function (event) {
    var email = event.target.value;
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (regex.test(email)) {
        event.target.setCustomValidity('');
    } else {
        event.target.setCustomValidity('Por favor, insira um e-mail válido.');
    }
});

// Máscara para o telefone

window.onload = function() {
    var phoneInput = document.getElementById("phone");
    
    if (phoneInput) {
        let maskApplied = false; 
        
        phoneInput.addEventListener('input', function(event) {
            // Aplica a máscara apenas quando o usuário digitar o primeiro número
            if (!maskApplied && phoneInput.value.length > 0) {
                Inputmask({
                    mask: "(99) 99999-9999",
                    showMaskOnHover: false,
                    autoUnmask: false,
                    clearMaskOnLostFocus: false,
                    showMaskOnFocus: false
                }).mask(phoneInput);
                
                maskApplied = true; // Marca que a máscara foi aplicada
            }
        });

        phoneInput.addEventListener('keydown', function(event) {
            console.log(event.key); // Verifique se as teclas estão sendo registradas
        });
    } else {
        console.error("Elemento #phone não encontrado.");
    }
};

// Rolagem Botão Contato

console.log("Script mask.js carregado corretamente.");

document.getElementById('btnContato').addEventListener('click', function(e) {
    e.preventDefault(); // Previne o comportamento padrão
    console.log("Botão clicado!");
    
    const target = document.querySelector('#contato');
    const targetPosition = target.getBoundingClientRect().top;
    const startPosition = window.pageYOffset;
    const distance = targetPosition;
    const duration = 3000; // 3 segundos
    let startTime = null;

    function animationScroll(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = easeInOutQuad(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animationScroll);
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animationScroll);
});

console.log("Script mask.js carregado corretamente.");

document.getElementById('btnContato_Secundario').addEventListener('click', function(e) {
    e.preventDefault(); // Previne o comportamento padrão
    console.log("Botão clicado!");
    
    const target = document.querySelector('#contato');
    const targetPosition = target.getBoundingClientRect().top;
    const startPosition = window.pageYOffset;
    const distance = targetPosition;
    const duration = 3000; // 3 segundos
    let startTime = null;

    function animationScroll(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = easeInOutQuad(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) requestAnimationFrame(animationScroll);
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animationScroll);
});