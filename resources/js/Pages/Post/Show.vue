<script setup lang="ts">
import Navbar from "@/Components/Navbar.vue";
import {computed} from "vue";
import {marked} from "marked";

const post = defineProps({post: Object, readingPace: Number});

const markedBody = computed(() => {
    return marked(post.post.body);
});

</script>

<template>
    <Navbar/>
    <div class="bg-white mx-auto md:max-w-5xl my-10 flex justify-between dark:bg-gray-900">
            <div class="flex flex-col">
                <h1 class="font-bold text-4xl mb-1.5 font-sans tracking-wide break-keep">{{ post.post.title }}</h1>
                <div class=" text-start text-pretty py-2 font-roboto md:max-w-full">
                    <div class="pt-3">
                        <span class="italic">
                            Tempo de Leitura: <span class="font-bold">{{ post.readingPace }} Minutos </span>
                        </span>
                    </div>
                    <div class="pt-2">
                        <span class="italic text-bold">
                            Criado: <span class="font-bold">{{ post.post.created_at }} </span>
                        </span>
                    </div>
                    <hr class="mt-4">
                    <div class="text-xl flex justify-start flex-wrap break-words">
                        <article class="font-serif md:max-w-2xl text-left prose md:prose-xl dark:prose-invert">
                            <div v-html="markedBody"></div>
                        </article>
                    </div>
                </div>
            </div>

    </div>
</template>

<style>
p {
    padding-left: 5px;
}
</style>
