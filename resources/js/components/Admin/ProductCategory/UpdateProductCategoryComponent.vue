<template>
    <tr :class="this.$parent.isEdit(product_category.id) ? '' : 'd-none'">
        <th scope="row">{{ product_category.id }}</th>
        <td><input type="text" v-model="title" class="form-control"></td>
        <td><input type="text" v-model="slug" class="form-control"></td>
        <td><input type="text" v-model="description" class="form-control"></td>
        <td><a href="#" @click.prevent="updateProductCategory(product_category.id)" class="btn btn-success">Save</a></td>
    </tr>
</template>

<script>
import axios from "axios"
export default {
    name: "UpdateProductCategoryComponent",

    components: {

    },

    data() {
        return {
            slug: '',
            title: '',
            description: '',
        }
    },

    props: [
        'product_category'
    ],

    methods: {
        updateProductCategory(productCategory) {
            this.$parent.editProductCategoryId = null;
            axios.patch(`/api/admin/product_category/${productCategory}`, {title: this.title, slug: this.slug, description: this.description})
            .then( res => {
                this.$parent.getProductCategories()
            })
        },
    }
}
</script>


<style scoped>

</style>
