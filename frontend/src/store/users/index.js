import UserService from "../../services/users";

export default {
  namespaced: true,
  state: {
    users: [],
  },
  mutations: {
    setUsers(state, payload) {
      state.users = payload;
    },
  },
  actions: {
    async getUsersAction({ commit }) {
      commit("setLoading", true, { root: true });
      try {
        const response = await UserService.getUsers();
        commit("setUsers", response);
      } catch (err) {
        console.log(err);
      } finally {
        commit("setLoading", false, { root: true });
      }
    },
  },
  getters: {
    users(state) {
      return state.users;
    },
  },
};
