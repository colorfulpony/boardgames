import router from "../../router"

const state = {
    product_category: {
        title: null,
        slug: null,
        description: null
    },

    product_categories: []
}

const getters = {
    product_category: state => {
        return state.product_category
    },

    product_categories: state => {
        return state.product_categories
    },

    is_disabled: () => {
        return state.product_category.title && state.product_category.description
    }
}

const actions = {
    getProductCategories({commit}) {
        axios.get('/api/admin/product_category')
        .then( res => {
            commit('setProductCategories', res.data.data)
        })
    },

    getProductCategory({state, commit, dispatch}, id) {
        axios.get(`/api/admin/product_category/${id}`)
        .then( res => {
            commit('setProductCategory', res.data)
        })
    },

    updateProductCategory({}, data) {
        axios.patch(`/api/admin/product_category/${data.id}`, {title: data.title, slug: data.slug, description: data.description})
        .then( res => {
            console.log(res)
            router.push({ name: 'admin.product_category.index'})
        })
    },

    addProductCategory({}, data) {
        axios.post('/api/admin/product_category', {slug: data.slug, title: data.title, description: data.description})
        .then( res => {
            router.push({ name: 'admin.product_category.index' })
        })
    },

    deleteProductCategory({dispatch}, id) {
        axios.delete(`/api/admin/product_category/${id}`)
        .then( res => {
            dispatch('getProductCategories')
        })
    }
}

const mutations = {
    setProductCategory(state, product_category) {
        state.product_category = product_category
    },

    setProductCategories(state, product_categories) {
        state.product_categories = product_categories
    }

}

export default {
    state, mutations, getters, actions
}



