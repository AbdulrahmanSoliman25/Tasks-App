import AdminService from "../../services/admins";

export default {
  namespaced: true,

  state: {
    admins: [],
  },
  mutations: {
    setAdmins(state, payload) {
      state.admins = payload;
    },
  },
  actions: {
    async getAdminsAction({ commit }) {
      commit("setLoading", true, { root: true });
      try {
        const response = await AdminService.getAdmins();
        commit("setAdmins", response);
      } catch (err) {
        console.log(err);
      } finally {
        commit("setLoading", false, { root: true });
      }
    },
  },
  getters: {
    admins(state) {
      return state.admins;
    },
  },
};
