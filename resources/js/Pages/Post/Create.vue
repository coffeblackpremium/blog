<script setup lang="ts">

import Navbar from "@/Components/Navbar.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {QuillEditor} from "@vueup/vue-quill";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {router, useForm} from "@inertiajs/vue3";
import { MdPreview, MdCatalog } from 'md-editor-v3';
import 'md-editor-v3/lib/preview.css';
import {ref} from "vue";

const id = 'preview-only';
const scrollElement = document.documentElement;
const form = useForm({
    title: null,
    subtitle: null,
});
const body = ref('');

const submit = () => {
    router.post(route('posts.store'), {
        title:form.title,
        subtitle:form.subtitle,
        body: body.value});
}

const markdownOption = () => {
    bold: true
}

</script>

<template>
    <Navbar />
    <div>
        <div class="mx-auto text-center md:max-w-full md:block hidden">
            <h1 class="text-3xl font-sans my-4">Criar Posts</h1>
        </div>
        <div class="md:max-w-full mx-auto px-4 sm:px-6 lg:px-8 bg-gray-900 py-6">
            <div class="md:max-w-7xl bg-slate-200 mx-auto rounded-md">
                <form @submit.prevent="submit">
                    <div class="flex flex-col justify-start md:max-w-7xl pt-6 pb-8 px-8 mb-4">
                        <div class="md:max-w-7xl mb-4">
                            <input-label  for="title" :value="'Titulo'" class="md:text-3xl font-normal font-sans pl-1.5"/>
                            <input type="text" name="title" id="title" v-model="form.title" class="shadow-sm
                            focus:ring-indigo-500 focus:border-indigo-500 dark:text-black block w-full sm:text-sm border-gray-300 rounded-md" />
                            <div v-if="form.errors.title">{{ form.errors.title }}</div>
                        </div>
                        <div class="md:max-w-7xl my-4">
                            <input-label for="subtitle" :value="'Subtitulo'" class="md:text-3xl font-normal font-sans pl-1.5"/>
                            <textarea id="message"
                                      rows="2"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      v-model="form.subtitle"></textarea>
                            <span v-if="form.errors.subtitle" class="text-red">
                                {{ form.errors.subtitle}}
                            </span>
                        </div>
                        <div class="md:max-w-full grid grid-cols-2 ">
                            <div>
                            <input-label  for="body" :value="'Body'" class="md:text-3xl font-normal font-sans pl-1.5"/>

<!--                            <QuillEditor class="dark:text-black ql-bg-blue bg-white" :content-type="'text'" v-model:content="form.body"/>-->
                          <textarea id="message"
                                    rows="30"
                                    class="md:mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                                     dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="O que você está pensando ?..." v-model="body"></textarea>

                            </div>
                          <MdPreview :editorId="id" :modelValue="body" class="rounded-lg border mt-8 mx-4"/>

                        </div>
                         <div class="md:max-w-7xl text-center mt-5">
                             <PrimaryButton type="submit">
                                 Salvar
                             </PrimaryButton>
                         </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>
<style scoped>
.mavonEditor {
    width: 100%;
    height: 100%;
}
</style>
