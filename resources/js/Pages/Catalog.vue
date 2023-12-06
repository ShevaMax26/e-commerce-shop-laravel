<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';

defineProps({
        products: Array,
    }
)
</script>

<template>
    <Head title="Catalog"/>

    <MainLayout>
        <div v-for="(product, index) in products">
            <div>{{ product.title }}</div>
            <div>{{ product.description }}</div>
            <hr>
        </div>
    </MainLayout>
</template>
