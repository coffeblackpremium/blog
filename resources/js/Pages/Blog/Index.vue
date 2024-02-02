<script setup="ts">
import {computed, onMounted, ref, watchEffect} from "vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PostCard from "@/Components/PostCard.vue";
import {MeiliSearch} from "meilisearch";

const props = defineProps({posts: Object});

const query = ref('');
const client = ref(null) || ref(MeiliSearch);
const results = ref({value: []});

const search = async (query) => {
    if (query !== '') {
        results.value = await client.value?.index('posts').search(query);
    }
}
const userImage = computed(() => {
    return `${props.user.data[0].user.image}`;
});

onMounted(() => {
    client.value = new MeiliSearch({
        host: 'http://127.0.0.1:7700',
    });
});

watchEffect(() => {
    search(query.value);
});

</script>

<template>
    <GuestLayout>
        <div class="bg-neutral-50 mx-auto rounded-lg md:max-w-6xl my-10 md:max-w-6xl dark:bg-gray-950">
            <h2 class="font-light text-4xl mx-auto text-center py-10 font-roboto">Posts Mais recentes</h2>
            <div class="md:max-w-3xl mx-auto max-w-sm">
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
                           v-model="query"
                           placeholder="Buscar por postagens.." required>
                </div>
            </div>
            <div v-if="query === ''">
                <div class="flex flex-col gap-5 my-10" v-for="post in props.posts.data" :key="post.id">
                    <PostCard :post="post" />
                </div>
            </div>
            <div v-else>
                <div class="flex flex-col gap-5 my-10" v-for="(hit, index) in results.hits" :key="hit.id">
                    <PostCard :post="hit" />
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
