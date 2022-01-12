<template>
    <h1>User Component</h1>
</template>

<script>
export default {
    name: 'Users',
    mounted() {
        this.$store.dispatch("loadStudents");
    }
}
</script>
