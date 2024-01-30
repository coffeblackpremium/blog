<script setup lang="ts">
import { useDark, useToggle } from "@vueuse/core";
import {onMounted, ref} from "vue";

const toggle = ref(false);

const toggleDarkMode = () => {
    const html = document.querySelector('html')
    html?.classList.toggle('dark');
    localStorage.setItem('theme', html?.classList.contains('dark') ? 'dark' : 'light');
    toggle.value = !toggle.value;
}
onMounted(() => {
    const theme = localStorage.getItem('theme');
    toggle.value = theme === 'dark';
})

</script>

<template>
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" id="toggle-button" @click="toggleDarkMode()" v-model="toggle" class="sr-only peer" />
        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-gray-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300
         after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-gray-600">
        </div>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300" v-if="toggle">🌙 Dark Mode</span>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300" v-else>☀️ Light Mode</span>
    </label>
</template>
