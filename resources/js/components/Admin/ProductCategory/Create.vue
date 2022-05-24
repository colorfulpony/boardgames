<template>
    <div>
        <div class="p-5">
            <h1>Create Product Category</h1>
            <div class="w-25">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Title</label>
                    <input type="text" name="title" v-model="productCategory.title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" name="slug" v-model="productCategory.slug" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea type="text" rows="5" name="description" v-model="productCategory.description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <input :disabled="!isDisabled" @click.prevent="$store.dispatch('addProductCategory', {slug: productCategory.slug, title: productCategory.title, description: productCategory.description})" class="btn btn-primary" value="Add" type="submit">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import productCategory from '../../../store/modules/productCategory';
export default {
    name: 'Create',

    // data() {
    //     return {
    //         slug: null,
    //         title: null,
    //         description: null,
    //     }
    // },

    mounted() {
        this.$store.commit('setProductCategory' , {title: '', slug: '', description: ''})
    },

    computed: {
        productCategory() {
            return this.$store.getters.product_category
        },

        isDisabled() {
            return this.$store.getters.is_disabled
        },
    },

    // methods: {
    //     addProductCategory() {
    //         axios.post('/api/admin/product_category', {slug: this.slug, title: this.title, description: this.description}).
    //         then( res => {
    //             this.$router.push({ name: 'admin.product_category.index' })
    //         })
    //     },
    // }
}
</script>

<style scoped>

</style>

