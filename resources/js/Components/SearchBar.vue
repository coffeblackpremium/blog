<script setup lang="ts">

</script>

<template>
    <form class="md:max-w-3xl mx-auto max-w-sm">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <input type="search"
                   id="default-search"
                   class="block w-full p-4 pl-10 text-sm text-gray-900 border
                       border-gray-600 rounded-lg
                       bg-gray-50
                       focus:ring-blue-500
                       focus:border-blue-500
                       dark:bg-gray-700
                       dark:border-gray-600
                       dark:placeholder-gray-400
                       dark:text-white
                       dark:focus:ring-blue-500
                       dark:focus:border-blue-500"
                   placeholder="Buscar por postagens.." required>
        </div>
    </form>
</template>
