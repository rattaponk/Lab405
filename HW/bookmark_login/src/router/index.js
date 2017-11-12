import Vue from 'vue'
import Router from 'vue-router'
import Bookmarker from '@/components/Bookmarker'
import Login from '@/components/Login'
import Profile from '@/components/Profile'
import About from '@/components/About'
import FirebaseAuth from '@/components/FirebaseAuth'
import Signup from '@/components/SignupValidate'

Vue.use(Router)

export default new Router({
    routes: [{
            path: '/bookmarker',
            name: 'Bookmarker',
            component: Bookmarker,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/about',
            name: 'About',
            component: About,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/profile',
            name: 'Profile',
            component: Profile,
            meta: {
                requiresAuth: true
            }
        },
        {
            path: '/login',
            name: 'Login',
            component: Login
        },
        {
            path: '/signup',
            name: 'Signup',
            component: Signup
        },
        {
            path: '*',
            redirect: { name: 'Login' }
        },
        {
            path: '/firebaseauth',
            name: 'Auth',
            component: FirebaseAuth
        }
    ],
    mode: 'history',
})