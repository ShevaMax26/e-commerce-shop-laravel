<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import MainSlider from "@/Components/MainSlider.vue";

const props = defineProps({
  title: String,
  sliders: Array,
});

</script>

<template>
  <Head title="Home"/>
  <MainLayout>
    <MainSlider :sliders="sliders"
                style="transition: 0.25s ease-out"
                v-motion-slide-bottom/>
  </MainLayout>
</template>
