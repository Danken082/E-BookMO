import { createRouter, createWebHistory } from 'vue-router'
import SignUp from '../views/user/SignUp.vue'

const routes = [
  {
    path: '/',
    component: SignUp
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
