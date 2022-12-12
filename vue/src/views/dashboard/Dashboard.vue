<template>
    <div>
        <div class="page-title pt-11 pl-20">
            <h1 class="text-3xl font-semibold text-gray-700">Good Morning, Michael</h1>
            <p class="font-semibold pt-3 text-gray-500">Here is your summary on whats going on at Nissa Solutions</p>
        </div>

        <PaymentsCard />
        <OverallSummaryCard />
        <TransactionsCard />
    </div>
</template>

<script setup>
    import OverallSummaryCard from '../../components/dashboard/OverallSummaryCard.vue';
    import PaymentsCard from '../../components/dashboard/PaymentSummaryCard.vue';
    import TransactionsCard from '../../components/dashboard/TransactionSummaryCard.vue';
</script>

