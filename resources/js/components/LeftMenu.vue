<template>
    <el-menu
        default-active="2"
        class="el-menu-vertical-demo aside-menu">
        <el-menu-item index="2">
            <span>Navigator Two</span>
        </el-menu-item>
        <el-menu-item index="3">
            <span>Navigator Three</span>
        </el-menu-item>
        <el-menu-item index="4">
            <span>Navigator Four</span>
        </el-menu-item>
    </el-menu>
</template>

<script>
    export default {
        name: 'LeftMenu',
    }
</script>

<style scoped lang="scss">
    .aside-menu {
        background-color: #484848;
        height: 100%;

        span {
            color: #fff;
        }
    }
</style>
