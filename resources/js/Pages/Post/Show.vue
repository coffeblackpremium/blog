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
    <div class="bg-neutral-50 dark:bg-gray-900">
        <div class="mx-auto md:max-w-3xl max-w-sm py-24 flex justify-center">
            <div class="flex flex-col">
                <h1 class="font-bold md:max-w-xl text-4xl mb-1.5 font-sans tracking-wide break-keep">{{ post.post.title }}</h1>
                <div class="text-start text-pretty py-2 font-roboto md:max-w-full">
                    <div class="pt-3">
                        <span class="italic">
                            Tempo de Leitura: <span class="font-bold">{{ post.readingPace <= 1 ?  post.readingPace + " minuto" : post.readingPace + " Minutos" }} </span>
                        </span>
                    </div>
                    <div class="pt-2">
                        <span class="italic text-bold">
                            Criado: <span class="font-bold">{{ post.post.created_at }} </span>
                        </span>
                    </div>
                    <hr class="mt-4">
                    <div class="flex justify-start flex-wrap break-words">
                        <article class="roboto text-2xl max-w-sm md:max-w-2xl text-left prose md:prose-xl dark:prose-invert">
                            <div v-html="markedBody"></div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-white border rounded-sm">
            <div class="flex flex-col md:max-w-3xl justify-items-center mx-auto">
                <h1>Hello World</h1>
            </div>
        </div>
    </div>
</template>

<style>
p {
    padding-left: 5px;
}
</style>
