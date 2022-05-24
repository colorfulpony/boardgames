<template>
    <div class="p-5">
        <h1>Create Product Category</h1>
        <div class="w-25">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slug</label>
                <input type="text" v-model="slug" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Title</label>
                <input type="text" v-model="title" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" v-model="description" class="form-control">
            </div>

            <input @click.prevent="addProductCategory" class="btn btn-primary" value="Add">
        </div>
    </div>

</template>

<script>
import axios from "axios"
export default {
    name: "CreateStoreProductCategoryComponent",

    components: {

    },

    data() {
        return {
            slug: null,
            title: null,
            description: null
        }
    },

    methods: {
        addProductCategory() {
            axios.post('/api/admin/product_category', {slug: this.slug, title: this.title, description: this.description}).
            then( res => {
                this.slug = null,
                this.title = null,
                this.description = null
                this.$parent.$refs.editUpdateProductCategoryComponent.getProductCategories()
            })
        }
    }
}
</script>


<style scoped>

</style>
