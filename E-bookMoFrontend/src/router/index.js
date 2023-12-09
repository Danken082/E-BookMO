import { createRouter, createWebHistory } from 'vue-router'
import SignUp from '../views/user/SignUp.vue'

const routes = [
  {
    path: '/signup',
    component: SignUp
  },
  {
    path:'/insert',
    name: 'insert',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/insert.vue')
  },

  {
    path:'/',
    name: 'home',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/admin/home.vue')
  },
  {
    path:'/home',
    name: 'homeadmin',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/home.vue')
  },
  {
    path:'/about',
    name: 'about',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/admin/about.vue')
  },
  {
    path:'/chart',
    name: 'chart',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/visualization/chart.vue')
  },
  
  {
    path:'/contact',
    name: 'contactus',
    component: ()=> import(/*webpackChunkName: "finance"*/ '../views/admin/contactus.vue')
  },
   {
    path:'/dash',
     name: 'dashboard',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/dashboard.vue')
   },
   
   {
    path:'/books',
     name: 'book',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/booked.vue')
   },
   {
    path:'/check_in',
     name: 'checkin',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/checkin.vue')
   },
   {
    path:'/check_out',
     name: 'checkout',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/checkout.vue')
   },
   {
    path:'/rooms',
     name: 'rooms',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/rooms.vue')
   },
   {
    path:'/room_categ',
     name: 'roomcteg',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/roomscateg.vue')
   },
   {
    path:'/users',
     name: 'users',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/dashboard/user.vue')
   },
  //  {
  //   path:'/site_set',
  //    name: 'site_set',
  //    component: ()=> import(/*webpackChunkName: "finance"*/ '../viewts/dashboard/site_set.vue')
  //  },
   {
    path:'/book',
     name: 'book',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/admin/bookme.vue') 
   },
   {
     path:'/login',
     name: 'login',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/user/login.vue') 
   },
   {
    path:'/visit',
     name: 'visit',
     component: ()=> import(/*webpackChunkName: "finance"*/ '../views/admin/visitus.vue') 
   },
   
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
