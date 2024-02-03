<script setup lang="ts">
import {Link} from "@inertiajs/vue3";

const props = defineProps(['post']);

</script>

<template>
    <div class="w-full border-none lg:max-w-4xl md:max-w-4xl max-w-sm mx-auto lg:flex transition ease-in-out delay-150 hover:-translate-y-1 hover:shadow-sm hover:scale-110 duration-300 ">
        <div class="dark:bg-gray-900 border-r border-b border-l lg:flex-grow self-center
                    border-gray-400 lg:border-l
                    lg:border-t lg:border-gray-400
                    bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-gray-900 dark:text-white font-bold text-xl mb-2">
                    <Link :href="route('post.show', {slug: post.slug})">
                        {{ post.title }}
                    </Link>
                </div>
                <p class="text-gray-700 dark:text-white text-base max-w-2xl">
                    {{ post.subtitle }}
                </p>
            </div>
            <div class="flex items-center">
                <div class="font-sans antialiased italic flex-col">
                    <Link :href="route('post.show', {slug: post.slug})" class="text-sm text-gray-900 leading-none dark:text-white border-b border-t p-2 rounded-sm">
                        Ler sobre
                    </Link>
                </div>
            </div>
            <div class="flex justify-end">
                <p class="text-sm text-gray-900 dark:text-white md:mt-1 leading-none">Criado: {{ post.created_at }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
