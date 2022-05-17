<template>
    <div>
        <store-product-category-component></store-product-category-component>
        <index-product-category-component ref="indexProductCategoryComponent"></index-product-category-component>
    </div>
</template>

<script>
import axios from "axios"
import StoreProductCategoryComponent from "./StoreProductCategoryComponent.vue"
import IndexProductCategoryComponent from './IndexProductCategoryComponent.vue'
export default {
    name: "ProductCategoryComponent",

    components: {
        StoreProductCategoryComponent,
        IndexProductCategoryComponent,
    }
}
</script>


<style scoped>

</style>
