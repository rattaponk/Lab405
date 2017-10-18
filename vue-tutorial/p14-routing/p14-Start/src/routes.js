import User from './components/user/User.vue';
import UserStart from './components/user/UserStart.vue';
import UserDetail from './components/user/UserDetail.vue';
import UserEdit from './components/user/UserEdit.vue';
import Home from './components/Home.vue';
export const routes = [
    { path: '', component: Home, name: 'home' },

    //{ path: '/user/:id', component: User }, // www.example.com/user
    {
        path: '/user',
        component: User,
        children: [ // add subroutes
            { path: '', component: UserStart }, // '/user/'
            { path: ':id', component: UserDetail }, // '/user/id'
            { path: ':id/edit', component: UserEdit, name: 'userEdit' } // '/user/id/edit
        ]
    }
]