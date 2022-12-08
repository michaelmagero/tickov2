<template>
    <h1 class="text-2xl font-semibold capitalize">upcoming events</h1>
    <div class="flex flex-row items-center justify-center mx-auto mx-w-7xl py-10">
        <div v-for="event in upcomingEvents" :key="event.name">
            <div class="rounded-2xl mt-10 upcoming-event-card">
                <img :src="event.poster" :alt="event.name" id="card-image">
                <div class="event-info bg-emerald-400">
                    <h2 class="text-lg text-gray-900 font-extrabold py-2">{{ event.name }}</h2>
                    <h3 class="py-2">{{ event.date }}</h3>
                    <h3>
                        Regular: {{ event.charges.Regular }}
                        VIP: {{ event.charges.VIP }}
                        VVIP: {{ event.charges.VVIP }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const upcomingEvents = [
        {
            name: 'Choma Festival',
            poster: '/src/assets/images/posters/choma_festival.jpeg',
            date: '2022-12-20',
            charges: {
                Regular: 1000,
                VIP: 2000
            }
        },
        {
            name: 'Joyride Live',
            poster: '/src/assets/images/posters/joyride_live.jpeg',
            date: '2022-12-23',
            charges: {
                Regular: 500,
                VIP: 1000
            }
        },
        {
            name: 'Rayvanny Live',
            poster: '/src/assets/images/posters/rayvanny_live.jpeg',
            date: '2022-12-25',
            charges: {
                Regular: 3000,
                VIP: 5000,
                VVIP: 10000,
            }
        }
    ]
</script>

<style>
    .upcoming-event-card {
        width: 350px;
        height: 450px;
        margin: 20px;
    }

    #card-image {
        width: 350px;
        height: 350px;
    }

    .event-info {
        padding: 20px;
    }
</style>
