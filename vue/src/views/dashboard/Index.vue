<template>
    <div class="bg-gray-400">
        <div id="main-dash" class="flex">
            <Sidebar />
            <div id="main" class="bg-gray-200 w-10/12 h-screen">
                <transition
                    name="routerview"
                    appear
                    enter-active-class="animate__animated animate__fadeInUp delay-5s"
                    leave-active-class="animate__animated animate__fadeOutRight"
                >
                    <router-view />
                </transition>
            </div>
        </div>
    </div>
</template>

<script setup>
    import OverallSummaryCard from '../../components/dashboard/OverallSummaryCard.vue';
    import PaymentsCard from '../../components/dashboard/PaymentSummaryCard.vue';
    import TransactionsCard from '../../components/dashboard/TransactionSummaryCard.vue';
    import Sidebar from '/src/components/dashboard/Sidebar.vue'
</script>

