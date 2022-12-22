import Vue from "vue";
import Vuex from "vuex";
import Alert from "./alert";
import Tasks from "./tasks";
import Users from "./users";
import Admins from "./admins";
import Statistics from "./statistics";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    loading: false,
  },
  mutations: {
    setLoading(state, status) {
      state.loading = status;
    },
  },
  getters: {
    loadingStatus(state) {
      return state.loading;
    },
  },
  actions: {},
  modules: {
    Alert,
    Tasks,
    Users,
    Admins,
    Statistics,
  },
});
