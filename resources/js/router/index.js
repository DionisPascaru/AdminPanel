import VueRouter from "vue-router";
import Dashboard from "../components/Dashboard";
import Users from "../components/users/UsersComponent";

const routes = [
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard
    },
    {
        path: '/users',
        name: 'Users',
        component: Users
    }
]

const router = new VueRouter({
    mode: "history",
    routes: routes
})

export default router;
