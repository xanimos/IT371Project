(function(){
    const doc = document.documentElement;
    const w = window;
    const headerHeight = document.documentElement.style.getPropertyValue("--header-height");

    let prevScroll = w.scrollY || doc.scrollTop;
    let curScroll;
    let direction = 0;
    let prevDirection = 0;

    const header = document.getElementById('site-header');

    const checkScroll = function () {
        curScroll = w.scrollY || doc.scrollTop;
        if (curScroll > prevScroll) { //scrolled up
            direction = 2;
        } else if (curScroll < prevScroll) { //scrolled down
            direction = 1;
        }

        if (direction !== prevDirection) {
            toggleHeader(direction, curScroll);
        }

        prevScroll = curScroll;
    };

    const toggleHeader = function(direction, curScroll) {
        if (direction === 2 && curScroll > headerHeight) {
            header.classList.add('hide');
            prevDirection = direction;
        }
        else if (direction === 1) {
            header.classList.remove('hide');
            prevDirection = direction;
        }
    };

    window.addEventListener('scroll', checkScroll);
})();

(function () {
    const button = document.getElementById("sign-in-button");
    const dialog = document.getElementById("sign-in-dialog");

    if(button == null) {
        return;
    }

    button.addEventListener("click", (event) => {
        if(dialog.open) {
            dialog.close();
        } else {
            dialog.show();
        }
    });
})();

(function () {
    const dialog = document.getElementById("gdpr-cookie-dialog");
    if(dialog === null) {
        return;
    }
    const link = document.getElementById("gdpr-cookie-policy-link");
    const button = document.getElementById("gdpr-accept");

    if(button == null) {
        return;
    }

    button.addEventListener('click', (e) => {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "/rxjs/cookie-accept", true);
        xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 204) {
                dialog.close();
            }
        }
        xhr.send();
    });

    link.onclick = (event) => {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "/cookie-policy", true);
        xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                let modal = document.getElementById("modal-base").cloneNode(true);
                modal.id = "gdpr-cookie-policy-dialog";
                let content = document.createElement("div");
                content.innerHTML = this.responseText;
                modal.querySelector("div").appendChild(content);
                document.body.appendChild(modal);
                modal.showModal();
            }
        }
        xhr.send();
        event.preventDefault();
    }
})();

(function () {
    const form = document.getElementById("contact-form");
    if(form == null) {
        return;
    }
    form.addEventListener("submit", (event) => {
        let message = document.createElement("div");
        message.classList.add('message', 'show');

        let xhr = new XMLHttpRequest();
        xhr.responseType = "json";
        xhr.open("POST", "/rxjs/contact", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                message.innerHTML = this.response['message'];
                form.appendChild(message);
            } else {
                message.classList.add("error");
                message.innerHTML = "Message Send Unsuccessful.";
            }
            form.appendChild(message);
            setTimeout(() => {message.classList.remove("show")}, 5000);
            form.reset();
        }
        xhr.send("submit=submit");
        event.preventDefault();
    });
})();

