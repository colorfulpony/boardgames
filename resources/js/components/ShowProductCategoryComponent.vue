<template>
    <tr :class="this.$parent.isEdit(product_category.id) ? 'd-none' : ''">
        <th scope="row">{{ product_category.id }}</th>
        <td>{{ product_category.title }}</td>
        <td>{{ product_category.slug }}</td>
        <td>{{ product_category.description }}</td>
        <td><a href="#" @click.prevent="changeEditProductCategoryId(product_category.id, product_category.title, product_category.slug, product_category.description)" class="btn btn-success">Edit</a></td>
        <td><a href="#" @click.prevent="deleteProductCategory(product_category.id)" class="btn btn-danger">Delete</a></td>
    </tr>
</template>

<script>
import axios from "axios"
export default {
    name: "ShowProductCategoryComponent",

    components: {

    },

    data() {
        return {

        }
    },

    props: [
        'product_category'
    ],

    methods: {
        changeEditProductCategoryId(id, title, slug, description) {
            this.$parent.editProductCategoryId = id
            let editName = `editProductCategoryComponent_${id}`
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.title = title
            fullEditName.slug = slug
            fullEditName.description = description
        },

        deleteProductCategory(productCategory) {
            axios.delete(`/api/admin/product_category/${productCategory}`)
            .then( res => {
                this.$parent.getProductCategories()
            })
        }
    }
}
</script>


<style scoped>

</style>
