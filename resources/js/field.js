Nova.booting((Vue, router, store) => {
    Vue.component('index-tickbox', require('./components/IndexField'))
    Vue.component('detail-tickbox', require('./components/DetailField'))
    Vue.component('form-tickbox', require('./components/FormField'))
})
