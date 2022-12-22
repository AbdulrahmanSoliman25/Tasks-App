import router from "../../router";
import TasksService from "../../services/tasks";

export default {
  namespaced: true,

  state: {
    tasks: [],
    pagination: [],
  },
  mutations: {
    setTasks(state, payload) {
      state.tasks = payload;
    },
    setPagination(state, payload) {
      state.pagination = payload;
    },
  },
  actions: {
    async getTasksAction({ commit }, page) {
      commit("setLoading", true, { root: true });
      try {
        const response = await TasksService.getTasks(page);
        commit("setTasks", response.data);
        commit("setPagination", response.meta);
      } catch (err) {
        console.log(err);
      } finally {
        commit("setLoading", false, { root: true });
      }
    },
    async createtTaskAction({ commit, dispatch }, data) {
      commit("setLoading", true, { root: true });
      try {
        const response = await TasksService.createtTask(data);

        const toasObj = {
          message: response.message,
          config: {
            position: "bottom-right",
            timeout: 5000,
            icon: true,
            hideProgressBar: true,
          },
        };
        if (response.status == 200) {
          const toastInfo = { toasObj, type: "success" };
          dispatch("Alert/toast", toastInfo, { root: true });
          router.push({ name: "tasks" });
        } else {
          const toastInfo = { toasObj, type: "error" };
          dispatch("Alert/toast", toastInfo, { root: true });
        }
      } catch (err) {
        console.log(err);
      } finally {
        commit("setLoading", false, { root: true });
      }
    },
  },
  getters: {
    tasks(state) {
      return state.tasks;
    },
    pagination(state) {
      return state.pagination;
    },
  },
};
