<template>
    <div id="main-dash" class="flex justify-between">
        <div>
            <Sidebar />
        </div>
        <div id="main" class="bg-zinc-200  w-10/12">
            <transition name="routerview" appear enter-active-class="animate__animated animate__fadeInUp delay-5s"
                leave-active-class="animate__animated animate__fadeOutRight">
                <router-view />
            </transition>
        </div>
    </div>
</template>

<script setup>
import OverallSummaryCard from '../../components/dashboard/OverallSummaryCard.vue';
import PaymentsCard from '../../components/dashboard/PaymentSummaryCard.vue';
import TransactionsCard from '../../components/dashboard/TransactionSummaryCard.vue';
import Sidebar from '/src/components/dashboard/Sidebar.vue'
</script>

