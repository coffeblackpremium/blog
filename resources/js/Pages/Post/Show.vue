<script setup lang="ts">
import Navbar from "@/Components/Navbar.vue";
import {computed} from "vue";
import {marked} from "marked";

const post = defineProps({post: Object})

const markedBody = computed(() => {
    return marked(post.post.body)
});
console.log(markedBody);
</script>

<template>
    <Navbar/>
    <div class="bg-white mx-auto md:max-w-6xl my-10 dark:bg-gray-900">
        <div class="mx-auto text-center py-10 font-roboto">
            <h1 class="font-bold text-4xl">{{post.post.title}}</h1>
            <div class="text-xl mt-24">
                <article class="text-left prose md:prose-xl dark:prose-invert">
                    <div v-html="markedBody"></div>
                </article>
            </div>
        </div>
    </div>
</template>
