let form = document.getElementById(ajax_form);
let name = document.querySelector("#name");
let email = document.querySelector("#mail");
let message = document.querySelector("#msg");
let content = document.querySelector("main");
let cardsContainer = document.querySelector('.cards');
let cards = '';

let clearContent = () => {
    cards = '';

    cardsContainer.remove();

    cardsContainer = document.createElement('div');
    cardsContainer.className = "cards";

    content.append(cardsContainer);
}

let select = async () => {
    let response = await fetch('./ajax_form.php', {
        method: 'POST',
        body: ''
    });

    if (response.ok) {
        let result = await response.json();

        result.forEach((item, i) => {
            let clas = (i % 2 == 0) ? 'even' : 'odd';
            cards += `<div class="card border-light mb-3 ${clas}" id="card_${item['id']}">
                        <div class="card-header">${item['name']}</div>
                        <div class="card-body">
                            <h5 class="card-title">
                                ${item['mail']}
                            </h5>
                            <p class="card-text">
                                ${item['message']}
                            </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="del(${item['id']})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>`
        });

        cardsContainer.insertAdjacentHTML('beforeend', cards);
    } else {
        alert("Ошибка HTTP: " + response.status);
    }
};
select();


let del = async (id) => {
    let response = await fetch(`./ajax_form.php?id=${id}`);

    if (response.ok) {
        let card = document.getElementById(`card_${id}`);
        card.style.opacity = '0';
        setTimeout(() => { card.remove(); }, 700);
    } else {
        alert("Ошибка HTTP: " + response.status);
    }
}


ajax_form.onsubmit = async (e) => {
    e.preventDefault();

    let response = await fetch('./ajax_form.php', {
        method: 'POST',
        body: new FormData(ajax_form)
    });

    if (response.ok) {
        let result = await response.json();

        let div = document.createElement('div');
        div.className = "alert alert-success";
        div.role = "alert";
        div.innerHTML = "Комментарий сохранен!";

        ajax_form.append(div);
        setTimeout(() => div.remove(), 2000);

        name.value = '';
        email.value = '';
        message.value = '';
        cards = '';

        result.forEach((item, i) => {
            let clas = (i % 2 == 0) ? 'even' : 'odd';
            cards = `<div class="card border-light mb-3 ${clas}" id="card_${item['id']}">
                        <div class="card-header">${item['name']}</div>
                        <div class="card-body">
                            <h5 class="card-title">
                                ${item['mail']}
                            </h5>
                            <p class="card-text">
                                ${item['message']}
                            </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="del(${item['id']})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>`
        });

        cardsContainer.insertAdjacentHTML('beforeend', cards);
    } else {
        alert("Ошибка HTTP: " + response.status);
    }
};
