let counter = document.querySelector('span');
let count = 5;

setInterval(() => {

    counter.innerText = count;
    count--;

    // if(count < 1) {
    //     document.body.innerHTML = document.body.innerHTML.replace('seconds', 'second');
    // };

}, 1000)
