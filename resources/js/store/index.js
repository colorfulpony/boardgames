import Vue from 'vue'
import Vuex from 'vuex'
import ProductCategory from './modules/productCategory'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        ProductCategory
    }
})
