<template>
    <div>
        <h1>User Component</h1>
        <button @click="tryLogin">Login</button>
        <button @click="loadStudents">Get students</button>
    </div>
</template>

<script>
import UserService from '../../services/user/user.service'

export default {
    name: 'Users',
    methods: {
        tryLogin(){
            this.$store.dispatch('auth/login', {
                email: 'denis.pascaru95@gmail.com',
                password: '1234qwer'
            });
        },
        loadStudents(){
            UserService.getUserBoard().then(
                response => {
                    this.content = response.data;
                },
                error => {
                    this.content = error.response.data.message;
                }
            );
        }
    }
}
</script>
