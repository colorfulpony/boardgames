import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/admin/product_category/index',
            component: () => import('./components/Admin/ProductCategory/Index'),
            name: 'admin.product_category.index'
        },
        {
            path: '/admin/product_category/create',
            component: () => import('./components/Admin/ProductCategory/Create'),
            name: 'admin.product_category.create'
        },
        {
            path: '/admin/product_category/:id/edit',
            component: () => import('./components/Admin/ProductCategory/Edit'),
            name: 'admin.product_category.edit'
        }
    ]
})
