<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import {Head} from '@inertiajs/vue3';

defineProps({
        product: Object,
    }
)
</script>

<template>
    <Head title="Product"/>

    <MainLayout>
        <div>{{ product.title }}</div>
        <div>{{ product.description }}</div>
    </MainLayout>
</template>
