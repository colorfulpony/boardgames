<template>
    <div class="p-3">
        <router-link class="btn btn-dark text-white text-decoration-none mb-2" :to="{ name: 'admin.product_category.index'}">Product Categories</router-link>
        <router-link class="btn btn-dark text-white text-decoration-none mb-2" :to="{ name: 'admin.product_category.create'}">Create new Product Category</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'Index'
}
</script>

<style scoped>

</style>
