<script setup lang="ts">
import Navbar from "@/Components/Navbar.vue";
import {computed} from "vue";
import {marked} from "marked";
import {Post} from "@/Interfaces/Posts";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const props = defineProps<{
    post: Post,
    readingPace: Number
}>();

const markedBody = computed(() => {
    return marked(props.post.body);
});

</script>

<template>
    <Navbar/>
    <div class="bg-neutral-50 dark:bg-gray-950">
        <div class="md:max-w-3xl max-w-sm py-24 flex justify-center items-center mx-auto">
            <div class="flex flex-col">
                <h1 class="font-bold md:max-w-xl text-4xl mb-1.5 font-sans tracking-wide break-keep">{{ post.title }}</h1>
                <div class="text-start text-pretty py-2 font-roboto md:max-w-full">
                    <div class="pt-3">
                        <span class="roboto">
                            Tempo de Leitura: <span class="italic font-bold text-neutral-900 dark:text-white">{{ readingPace <= 1 ?  readingPace + " minuto" : readingPace + " Minutos" }} </span>
                        </span>
                    </div>
                    <div class="pt-2">
                        <span class="italic text-bold">
                            Criado: <span class="font-bold">{{ post.created_at }} </span>
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
        <div class="bg-neutral-300 border rounded-sm dark:bg-gray-900 dark:border-black">
            <div class="flex flex-col md:max-w-3xl justify-center items-center mx-auto">
                <div class="flex items-center ">
                    <span class="text-3xl roboto mt-2"> Gostou do conteúdo ?</span>
                </div>
                <div class="flex items-cecnter">
                    <span class="text-xl roboto italic">
                        Me siga nas redes
                    </span>
                </div>
                <div class="flex items-center justify-center fa-3x">
                    <div class="mx-3">
                        <a href="https://www.linkedin.com/in/joao-damaceno/">
                            <font-awesome-icon icon="fa-brands fa-linkedin-in"></font-awesome-icon>
                        </a>
                    </div>
                    <div class="mx-3 ">
                        <a href="https://github.com/coffeblackpremium">
                            <font-awesome-icon icon="fa-brands fa-github" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-auto md:max-w-3xl">
                <hr style="height:1px;border-width:0;color:gray;background-color:gray"/>
                <span class="flex text-sm justify-center mt-3 ">
                        Desenvolvido por: <span class="italic"> João Damaceno </span>
                    </span>
            </div>
            <div class="flex flex-row-reverse ">
                <span class="hidden text-sm justify-start">
                    Desenvolvido por: <span class="italic"> João Damacenoooo </span>
                </span>
                    <span class="text-sm md:mr-4 mt-4">
                        © Todos os direitos reservados
                    </span>
            </div>
        </div>
    </div>
</template>

<style scoped>
p {
    padding-left: 5px;
}
</style>
