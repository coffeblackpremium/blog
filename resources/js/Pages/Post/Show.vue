<script setup lang="ts">
import {computed} from "vue";
import {marked} from "marked";
import {Post} from "@/Interfaces/Posts";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PostFooter from "@/Pages/Post/Partials/PostFooter.vue";

const props = defineProps<{
    post: Post,
    readingPace: Number
}>();

const markedBody = computed(() => {
    return marked(props.post.body);
});

</script>

<template>
    <GuestLayout>
        <div class="md:max-w-3xl max-w-sm py-24 flex justify-center items-center mx-auto">
            <div class="flex flex-col">
                <h1 class="font-bold md:max-w-xl text-4xl mb-1.5 font-sans tracking-wide break-keep">{{ post.title }}</h1>
                <div class="text-start text-pretty py-2 font-roboto md:max-w-full">
                    <div class="pt-3">
                        <span class="roboto">
                            Tempo de Leitura:
                            <span class="italic font-bold text-neutral-900 dark:text-white">
                                {{ readingPace <= 1 ? readingPace + " minuto" : readingPace + " Minutos" }}
                            </span>
                        </span>
                    </div>
                    <div class="pt-2">
                        <span class="italic text-bold">
                            Criado: <span class="font-bold">{{ post.created_at }} </span>
                        </span>
                    </div>
                    <hr class="mt-4">
                    <div class="flex justify-start flex-wrap break-words">
                        <article class="roboto text-2xl max-w-sm md:max-w-2xl text-left prose
                        md:prose-xl dark:prose-invert">
                            <div v-html="markedBody"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <template #footer>
            <PostFooter/>
        </template>
    </GuestLayout>
</template>

<style scoped>
p {
    padding-left: 5px;
}
</style>
