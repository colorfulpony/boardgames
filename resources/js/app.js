import Vue from 'vue';
import ProductCategoryComponent from './components/ProductCategoryComponent';

require('./bootstrap');

const app = new Vue ({
    el: '#app',

    components: {
        ProductCategoryComponent,
    }

})
