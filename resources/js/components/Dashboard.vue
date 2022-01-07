<template>
    <el-container>
        <el-aside>
            <left-menu></left-menu>
        </el-aside>
        <el-container>
            <el-main>
<!--                <router-view />-->
            </el-main>
        </el-container>
    </el-container>
</template>

<script>
import LeftMenu from './LeftMenu';

export default {
    name: 'Dashboard',
    components: {
        LeftMenu
    },
    mounted: function () {
        console.log(`Component mounted.`)
    }
}
</script>

<style scoped lang="scss">
    aside {
        height: 100vh;
    }
</style>
