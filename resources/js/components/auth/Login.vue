<template>
    <div class="login">
        <el-card>
            <h2>Login</h2>
            <el-form
                class="login-form"
                :model="model"
                :rules="rules"
                ref="form"
                @submit.native.prevent="login"
            >
                <el-form-item prop="username">
                    <el-input v-model="model.username" placeholder="Username" prefix-icon="fas fa-user"></el-input>
                </el-form-item>
                <el-form-item prop="password">
                    <el-input
                        v-model="model.password"
                        placeholder="Password"
                        type="password"
                        prefix-icon="fas fa-lock"
                    ></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button
                        :loading="loading"
                        class="login-button"
                        type="primary"
                        native-type="submit"
                        block
                    >Login
                    </el-button>
                </el-form-item>
                <a class="forgot-password" href="https://oxfordinformatics.com/">Forgot password ?</a>
            </el-form>
        </el-card>
    </div>
</template>

<script>
export default {
    name: 'Login',
    data() {
        return {
            validCredentials: {
                username: "lightscope",
                password: "lightscope"
            },
            model: {
                username: "",
                password: ""
            },
            loading: false,
            rules: {
                username: [
                    {
                        required: true,
                        message: "Username is required",
                        trigger: "blur"
                    },
                    {
                        min: 4,
                        message: "Username length should be at least 5 characters",
                        trigger: "blur"
                    }
                ],
                password: [
                    {required: true, message: "Password is required", trigger: "blur"},
                    {
                        min: 5,
                        message: "Password length should be at least 5 characters",
                        trigger: "blur"
                    }
                ]
            }
        }
    }
}
</script>

<style lang="scss" scoped>
    .login {
        max-width: 300px;
        margin: 50px auto;
    }
</style>
