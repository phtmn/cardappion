
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.addEventListener('load', function () {
    const app = new Vue({
        el: '#app'
    });

    const _token = (document.head.querySelector('meta[name="mtoken"]')) ? document.head.querySelector('meta[name="mtoken"]').content : null

    $("#change").mask('#.##0,00', {reverse: true});
    $("#whatsapp").mask('(00) 00000-0000');

    const payment = document.querySelector('.checkout-payment')
    if (payment) {
        payment.addEventListener('change', function(event) {
            let change = document.querySelector('#checkout-change')
            if (event.target.value == 3) {
                change.style.display = ''
            } else {
                change.style.display = 'none'
            }
        })
    }

    const myNumber = document.querySelector('#myNumber')

    const addCart = document.querySelector('.addCart')
    if (addCart) {
        addCart.addEventListener('click', function(event) {
            const id = event.target.dataset.id
            const quantity = myNumber.value

            axios.post('/cart', {
                id: id,
                quantity: quantity
            })
            .then((response) => {
                swal("Bom Trabalho!", response.data.message, "success");
            })
            .catch(() => {
                swal("Oops!", "Aconteceu algum problema", "error");
            });
        })
    }

    const add = document.querySelectorAll('.quantity');
    if (add) {
        add.forEach(function(el, i) {
            el.addEventListener('click', function(event) {
                const op = event.currentTarget.dataset.op
                const id = event.currentTarget.dataset.id
                let qty = event.currentTarget.dataset.qty

                axios.put('/cart/'+id, {
                    op: (op == 'add') ? 1 : -1,
                })
                .then(() => {
                    location.reload()
                })
                .catch(() => {
                    swal("Oops!", "Aconteceu algum problema", "error");
                });
            })
        });
    }

    const remove = document.querySelectorAll('.removeItem')
    if (remove) {
        remove.forEach(function(el, i) {
            el.addEventListener('click', function(event) {
                const id = event.currentTarget.dataset.id

                axios.delete('/cart/'+id)
                .then(() => {
                    location.reload()
                })
                .catch(() => {
                    swal("Oops!", "Aconteceu algum problema", "error");
                });
            })
        })
    }

    const formSale = document.querySelector('.formSale');

    if (formSale) {
        formSale.addEventListener('click', function() {
            var inputs = {'token': _token}
            const array = document.querySelector('#formSale').elements
            const form = Array.from(array)
            var resp = true

            form.forEach((input) => {
                if (input.parentNode.classList.contains('js-validate') && (input.value == '' || input.value == ' ')) {
                    toogleDisplay(input.parentNode.children, 'block')

                    resp = false
                    return
                } else {
                    toogleDisplay(input.parentNode.children, 'none')
                }
                inputs[`${input.id}`] = input.value
            })

            if (!resp) return false

            list = []
            let items = document.querySelectorAll('.item-checkout');
            items.forEach(function(val, i) {
                products = { 'product': val.dataset.id, 'quantity': val.dataset.quantity }
                list[i] = products
            })
            inputs['items'] = list

            axios({ method: 'post', baseURL: '/sale', data: inputs })
            .then(function (response) {
                swal("Bom Trabalho!", response.data.message, "success");
                setTimeout(() => { window.location.href = response.data.redirect }, response.data.time);
            })
            .catch(function (error) {
                swal("Oops!", "Aconteceu algum problema", "error");
            });
        })
    }

    function toogleDisplay(c, res) {
        for (i = 0; i < c.length; i++) {
            if (c[i].classList.contains('-error')) {
                c[i].style.display = res
            }
        }
    }
})
