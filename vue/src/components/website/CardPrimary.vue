<template>
    <div
        class="h-96 rounded-2.5xl p-10 bg-no-repeat bg-cover"
        :style="`background-image: url('${content.background}')`"
        :class="index === 0 ? 'w-2/3' : 'w-1/3'"
    >
    <h3 class="text-3xl font-semibold max-w-xxs">{{ content.title }}</h3>
    <div class="flex flex-wrap-reverse items-center pt-4 pr-24">
        <div class="flex flex-col py-4 pl-2">
            <a class="font-medium tracking-wider" href="#">{{ content.name }}</a>
            <span class="text-xs tracking-wider text-white/80">
                {{ content.views }} . {{ content.created_at }}
            </span>
        </div>
    </div>
    </div>
</template>

<script>
const content = [
    {
        title: "Header title 1",
        avatar: '../assets/vue.svg',
        background: '../assets/images/posters/bbq_whisky.jpeg',
        views: "52k",
        created_at: "1 week ago",

    }
]
export default {
    props: {
        content: {
            type: Object,
            required: true
        },
        index: {
            type: Number,
            required: true
        }
    },
    setup() {
        return {
            primaryCard
        }
    }
}
</script>
