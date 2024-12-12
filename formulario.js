function redirecionar(data) {
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = "./incluir.php";

    for (const key in data) {
        if (data.hasOwnProperty(key)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = data[key];
            form.appendChild(input);
        }
    }
    document.body.appendChild(form);
    form.submit();
}

function submit() {
    let email = document.getElementById("email").value;
    let nome = document.getElementById("nome").value;

    let data = {
        nome: nome,
        email: email
    };
    redirecionar(data);
};

function validate_email() {
    let email = document.getElementById("email").value;
    let btn = document.getElementById('btnSb');
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (regex.test(email)) {
        btn.classList.remove('bloqueado')
    } else {
        btn.classList.add('bloqueado')
    }
}