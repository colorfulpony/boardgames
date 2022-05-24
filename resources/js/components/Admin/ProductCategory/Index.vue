<template>
    <div>
        <h1>Product Categories</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Editing</th>
                </tr>
            </thead>
            <tbody v-for="product_category in product_categories" :key="product_category.id">
                <tr>
                    <th scope="row">{{ product_category.id }}</th>
                    <td>{{ product_category.title }}</td>
                    <td>{{ product_category.slug }}</td>
                    <td>{{ product_category.description }}</td>
                    <td><div class="btn btn-primary text-decoration-none"><router-link class="text-white text-decoration-none" :to="{name: 'admin.product_category.edit', params: {id: product_category.id}}">Edit</router-link></div></td>
                    <td><a href="#" @click.prevent="$store.dispatch('deleteProductCategory', product_category.id)" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Index',

    // data() {
    //     return {
    //         product_categories: null
    //     }
    // },

    mounted() {
        this.$store.dispatch('getProductCategories')
    },

    computed: {
        product_categories() {
            return this.$store.getters.product_categories
        },
    },

    // methods: {
    //     getProductCategories() {
    //         axios.get('/api/admin/product_category')
    //         .then( res => {
    //             this.product_categories = res.data.data
    //         })
    //     },

    //     deleteProductCategory(productCategory) {
    //         axios.delete(`/api/admin/product_category/${productCategory}`)
    //         .then( res => {
    //             this.getProductCategories()
    //         })
    //     }
    // }
}
</script>

<style scoped>

</style>

