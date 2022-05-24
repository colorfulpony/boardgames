<template>
    <div>
        <div class="p-5">
            <h1>Update Product Category ({{ product_category.title }})</h1>
            <div class="w-25">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Title</label>
                    <input type="text" name="title" v-model="product_category.title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" name="slug" v-model="product_category.slug" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea type="text" rows="5" name="description" v-model="product_category.description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <input :disabled="!isDisabled" @click.prevent="$store.dispatch('updateProductCategory', {id: product_category.id, title: product_category.title, slug: product_category.slug, description: product_category.description})" class="btn btn-primary" value="Update" type="submit">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'Edit',

    // data() {
    //     return {
    //         slug: null,
    //         title: null,
    //         description: null,
    //     }
    // },

    mounted() {
        this.$store.dispatch('getProductCategory', this.$route.params.id)
    },

    computed: {
        product_category() {
            return this.$store.getters.product_category
        },

        isDisabled() {
            return this.$store.getters.is_disabled
        }
    },

    // methods: {
    //     getProductCategory() {
    //         axios.get(`/api/admin/product_category/${this.$route.params.id}`)
    //         .then( res => {
    //             this.title = res.data.title
    //             this.slug = res.data.slug
    //             this.description = res.data.description
    //         })
    //     },

    //     updateProductCategory() {
    //         axios.patch(`/api/admin/product_category/${this.$route.params.id}`, {title: this.title, slug: this.slug, description: this.description})
    //         .then( res => {
    //             this.$router.push({ name: 'admin.product_category.index'})
    //         })
    //     }
    // }
}
</script>

<style scoped>

</style>

