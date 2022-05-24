<template>
    <div>
        <create-store-product-category-component></create-store-product-category-component>
        <edit-update-product-category-component ref="editUpdateProductCategoryComponent"></edit-update-product-category-component>
    </div>
</template>

<script>
import axios from "axios"
import CreateStoreProductCategoryComponent from "./components/Admin/ProductCategory/CreateStoreProductCategoryComponent.vue"
import EditUpdateProductCategoryComponent from './components/Admin/ProductCategory/EditUpdateProductCategoryComponent.vue'
export default {
    name: "ProductCategoryComponent",

    components: {
        CreateStoreProductCategoryComponent,
        EditUpdateProductCategoryComponent,
    }
}
</script>


<style scoped>

</style>
