<script setup="ts">
import Navbar from "@/Components/Navbar.vue";
import NavLink from "@/Components/NavLink.vue";
import SearchBar from "@/Components/SearchBar.vue";
import {marked} from "marked";
import {computed} from "vue";

defineProps({posts: Object});

const userImage = computed(() => {
    return `${props.user.data[0].user.image}`;
});

console.log(userImage);

</script>

<template>
    <div class="bg-neutral-50 dark:bg-gray-950 md:py-16">
        <Navbar></Navbar>
        <div class="bg-neutral-50 mx-auto rounded-lg md:max-w-6xl my-10 md:max-w-6xl dark:bg-gray-950">
            <h2 class="font-light text-4xl mx-auto text-center py-10 font-roboto">Posts Mais recentes</h2>
            <SearchBar />
            <div class="flex flex-col gap-5 my-10" v-for="post in posts.data" :key="post.id">
                <div class="w-full border-none lg:max-w-4xl md:max-w-4xl max-w-sm mx-auto lg:flex transition ease-in-out delay-150 hover:-translate-y-1 hover:shadow-sm hover:scale-110 duration-300 ">
                    <div
                        class="dark:bg-gray-900 border-r border-b border-l lg:flex-grow self-center border-gray-400 lg:border-l
                    lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="text-gray-900 dark:text-white font-bold text-xl mb-2">
                                <a :href="route('post.show', {slug: post.slug})">
                                    {{post.title}}
                                </a>
                            </div>
                            <p class="text-gray-700 dark:text-white text-base max-w-2xl">
                                {{post.subtitle}}
                            </p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-10 h-10 rounded-full mr-4" :src="post.user.image"  alt="Avatar of Jonathan Reinink"  />
                            <div class="font-sans antialiased italic flex-col">
                                <p class="text-sm text-gray-900 leading-none dark:text-white">João Damaceno</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <p class="text-sm text-gray-900 dark:text-white md:mt-1 leading-none">Criado: {{post.created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
