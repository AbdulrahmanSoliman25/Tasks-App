import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: () => import("../views/Home.vue"),
  },
  {
    path: "/tasks/create",
    name: "task-create",
    component: () => import("../views/tasks/Create.vue"),
  },
  {
    path: "/tasks",
    name: "tasks",
    component: () => import("../views/tasks/DataTable.vue"),
  },
  {
    path: "/statistics/top-ten",
    name: "top-ten",
    component: () => import("../views/statistics/Table.vue"),
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
