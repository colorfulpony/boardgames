<template>
    <div class="p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody v-for="product_category in product_categories" :key="product_category.id">
                <template>
                    <show-product-category-component :product_category="product_category" :ref="`showProductCategoryComponent_${product_category.id}`"></show-product-category-component>
                    <edit-product-category-component :product_category="product_category" :ref="`editProductCategoryComponent_${product_category.id}`"></edit-product-category-component>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditProductCategoryComponent from "./EditProductCategoryComponent.vue"
import ShowProductCategoryComponent from "./ShowProductCategoryComponent.vue"
import axios from "axios"
export default {
    name: "IndexProductCategoryComponent",

    components: {
        EditProductCategoryComponent,
        ShowProductCategoryComponent
    },

    data() {
        return {
            product_categories : null,
            editProductCategoryId: null,
            slug: '',
            title: '',
            description: '',
        }
    },

    mounted() {
        this.getProductCategories()
    },

    methods: {
        getProductCategories() {
            axios.get('/api/admin/product_category')
            .then( res => {
                this.product_categories = res.data
            })
        },

        changeEditProductCategoryId(id, title, slug, description) {
            this.editProductCategoryId = id
            let editName = `editProductCategoryComponent_${id}`
            let fullEditName = this.$refs[editName][0]
            fullEditName.title = title
            fullEditName.slug = slug
            fullEditName.description = description
        },

        isEdit(id) {
            return this.editProductCategoryId === id
        },

        updateProductCategory(productCategory) {
            this.editProductCategoryId = null;
            axios.patch(`/api/admin/product_category/${productCategory}`, {title: this.title, slug: this.slug, description: this.description})
            .then( res => {
                this.getProductCategories()
            })
        },

        deleteProductCategory(productCategory) {
            axios.delete(`/api/admin/product_category/${productCategory}`)
            .then( res => {
                this.getProductCategories()
            })
        }
    }
}
</script>


<style scoped>

</style>
