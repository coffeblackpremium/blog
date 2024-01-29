<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Navbar from "@/Components/Navbar.vue";
</script>

<template>
    <div class="bg-neutral-50 dark:bg-gray-950 md:py-16">
        <Navbar></Navbar>
        <slot />
    </div>
    <div class="bg-neutral-300 border rounded-sm dark:bg-gray-900 dark:border-black">
        <slot name="footer" />
    </div>
</template>
