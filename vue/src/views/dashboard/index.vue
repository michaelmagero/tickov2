<template>
    <div class="bg-gray-400">
        <div id="main-dash" class="flex">
            <Sidebar />
            <div id="main" class="bg-gray-200 w-10/12 h-screen">
                <div class="welcome-card pt-11 pl-20">
                    <h1 class="text-3xl font-semibold text-gray-700">Good Morning, Michael</h1>
                    <p class="font-semibold pt-3 text-gray-500">Here is your summary on whats going on at Nissa Solutions</p>
                </div>

                <PaymentsCard />
                <TransactionsCard />
            </div>
        </div>
    </div>
</template>

<script setup>
    import PaymentsCard from '../../components/dashboard/PaymentSummaryCard.vue';
    import TransactionsCard from '../../components/dashboard/TransactionSummaryCard.vue';
    import Sidebar from '/src/components/dashboard/Sidebar.vue'
</script>
